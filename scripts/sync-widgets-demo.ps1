param(
    [string]$PagesRoot = 'resources/views/pages/demo',
    [string]$PartialsRoot = 'resources/views/partials/widgets-demo',
    [string]$ViewsRoot = 'resources/views'
)

# Reusable sync utility for widgets-demo:
# 1) Detect raw widget blocks in pages/demo (<!--begin::...Widget N--> ... <!--end::...-->)
# 2) Reuse/create widget partials in partials/widgets-demo
# 3) Replace raw blocks with @include('partials.widgets-demo.<category>.__widget-<n><suffix>')
# 4) Normalize naming order per category+number to contiguous suffixes: '', a, b, c, ...
# 5) Keep partial files that are still referenced by any @include in resources/views
#
# Usage:
#   powershell -ExecutionPolicy Bypass -File scripts/sync-widgets-demo.ps1
#   powershell -ExecutionPolicy Bypass -File scripts/sync-widgets-demo.ps1 -PagesRoot 'resources/views/pages/demo'

$ErrorActionPreference = 'Stop'

function Normalize-Label([string]$s) {
    return (($s -replace '\s+', ' ').Trim().ToLower())
}

function To-Slug([string]$s) {
    $slug = $s.ToLower()
    $slug = $slug -replace '&', ' and '
    $slug = $slug -replace '[^a-z0-9]+', '-'
    return $slug.Trim('-')
}

function Canon([string]$s) {
    if ($null -eq $s) { return '' }
    $x = $s -replace "`r`n", "`n"
    $x = $x -replace "`r", "`n"
    $x = [regex]::Replace($x, '<!--\s*(begin|end)\s*::?\s*(.*?)\s*-->', {
        param($m)
        $kind = $m.Groups[1].Value.ToLower()
        $label = (($m.Groups[2].Value -replace '\s+', ' ').Trim())
        return "<!--$kind::$label-->"
    })
    $lines = $x -split "`n", -1
    $lines = $lines | ForEach-Object { $_.TrimEnd() }
    return ($lines -join "`n").TrimEnd("`n")
}

function Suffix-FromIndex([int]$n) {
    if ($n -le 0) { return '' }
    $result = ''
    while ($n -gt 0) {
        $n--
        $result = ([char](97 + ($n % 26))) + $result
        $n = [math]::Floor($n / 26)
    }
    return $result
}

function Index-FromSuffix([string]$suffix) {
    if ([string]::IsNullOrEmpty($suffix)) { return 0 }
    $n = 0
    for ($i = 0; $i -lt $suffix.Length; $i++) {
        $c = [int][char]$suffix[$i]
        if ($c -lt 97 -or $c -gt 122) { return 99999 }
        $n = ($n * 26) + ($c - 97 + 1)
    }
    return $n
}

function Get-WidgetCandidatesFromFile([string]$filePath) {
    $raw = Get-Content -LiteralPath $filePath -Raw
    if ([string]::IsNullOrEmpty($raw)) { return @() }

    $lines = [regex]::Split($raw, "`r?`n")
    $stack = New-Object System.Collections.ArrayList
    $candidates = New-Object System.Collections.Generic.List[object]

    for ($i = 0; $i -lt $lines.Length; $i++) {
        $m = [regex]::Match($lines[$i], '<!--\s*(begin|end)\s*::?\s*(.*?)\s*-->')
        if (-not $m.Success) { continue }

        $kind = $m.Groups[1].Value.ToLower()
        $label = $m.Groups[2].Value.Trim()
        $norm = Normalize-Label $label

        if ($kind -eq 'begin') {
            [void]$stack.Add([pscustomobject]@{
                Label = $label
                Norm = $norm
                Start = $i
                IsWidget = ([regex]::IsMatch($label, '(?i)\bwidget\b'))
            })
            continue
        }

        $matchIndex = -1
        for ($s = $stack.Count - 1; $s -ge 0; $s--) {
            if ($stack[$s].Norm -eq $norm) { $matchIndex = $s; break }
        }
        if ($matchIndex -lt 0) { continue }

        $entry = $stack[$matchIndex]
        if ($entry.IsWidget) {
            $mw = [regex]::Match($entry.Label, '(?i)^(.*?)\s*widget\s*([0-9]+)\b')
            if ($mw.Success) {
                $catRaw = $mw.Groups[1].Value.Trim()
                if ([string]::IsNullOrWhiteSpace($catRaw)) { $catRaw = 'widget' }
                $category = To-Slug $catRaw
                if ([string]::IsNullOrWhiteSpace($category)) { $category = 'widget' }
                $num = $mw.Groups[2].Value
                $blockRaw = ($lines[$entry.Start..$i] -join [Environment]::NewLine)

                $candidates.Add([pscustomobject]@{
                    Start = $entry.Start
                    End = $i
                    Category = $category
                    Num = $num
                    Raw = $blockRaw
                    Canon = (Canon $blockRaw)
                }) | Out-Null
            }
        }

        $removeCount = $stack.Count - $matchIndex
        if ($removeCount -gt 0) { $stack.RemoveRange($matchIndex, $removeCount) }
    }

    if ($candidates.Count -eq 0) { return @() }

    # Keep only outermost to avoid overlapping replacements.
    $ordered = $candidates | Sort-Object @{Expression='Start';Ascending=$true}, @{Expression='End';Ascending=$false}
    $selected = New-Object System.Collections.Generic.List[object]
    foreach ($c in $ordered) {
        $inside = $false
        foreach ($s in $selected) {
            if ($c.Start -ge $s.Start -and $c.End -le $s.End) { $inside = $true; break }
        }
        if (-not $inside) { $selected.Add($c) | Out-Null }
    }

    return $selected
}

if (-not (Test-Path -LiteralPath $PartialsRoot)) {
    New-Item -ItemType Directory -Path $PartialsRoot -Force | Out-Null
}

$itemsByKey = @{}
$globalOrder = 0

# Load existing partial widgets as baseline.
Get-ChildItem -Path $PartialsRoot -Recurse -File -Filter '*.blade.php' | Sort-Object FullName | ForEach-Object {
    $category = $_.Directory.Name
    $mFile = [regex]::Match($_.Name, '^__widget-([0-9]+)([a-z]*)\.blade\.php$')
    if (-not $mFile.Success) { return }

    $num = $mFile.Groups[1].Value
    $suffix = $mFile.Groups[2].Value
    $stem = "__widget-$num$suffix"
    $key = "$category|$num"

    if (-not $itemsByKey.ContainsKey($key)) {
        $itemsByKey[$key] = New-Object System.Collections.Generic.List[object]
    }

    $raw = Get-Content -LiteralPath $_.FullName -Raw
    $itemsByKey[$key].Add([pscustomobject]@{
        Category = $category
        Num = $num
        Canon = (Canon $raw)
        Raw = $raw
        OldStem = $stem
        OldPath = $_.FullName
        OldView = "partials.widgets-demo.$category.$stem"
        ExistingOrder = (Index-FromSuffix $suffix)
        AddedOrder = $globalOrder
    }) | Out-Null
    $globalOrder++
}

$pageFiles = Get-ChildItem -Path $PagesRoot -Recurse -File -Filter '*.blade.php' | Sort-Object FullName
$pagePlans = New-Object System.Collections.Generic.List[object]
$rawWidgetBlocks = 0
$newItemsAdded = 0

foreach ($file in $pageFiles) {
    $candidates = Get-WidgetCandidatesFromFile -filePath $file.FullName
    if ($candidates.Count -eq 0) { continue }

    $rawWidgetBlocks += $candidates.Count
    $repls = New-Object System.Collections.Generic.List[object]

    foreach ($c in $candidates) {
        $key = "$($c.Category)|$($c.Num)"
        if (-not $itemsByKey.ContainsKey($key)) {
            $itemsByKey[$key] = New-Object System.Collections.Generic.List[object]
        }

        $found = $null
        foreach ($it in $itemsByKey[$key]) {
            if ($it.Canon -eq $c.Canon) { $found = $it; break }
        }

        if ($null -eq $found) {
            $found = [pscustomobject]@{
                Category = $c.Category
                Num = $c.Num
                Canon = $c.Canon
                Raw = $c.Raw
                OldStem = $null
                OldPath = $null
                OldView = $null
                ExistingOrder = 99999
                AddedOrder = $globalOrder
            }
            $globalOrder++
            $itemsByKey[$key].Add($found) | Out-Null
            $newItemsAdded++
        }

        $repls.Add([pscustomobject]@{
            Start = $c.Start
            End = $c.End
            ItemRef = $found
        }) | Out-Null
    }

    $pagePlans.Add([pscustomobject]@{
        File = $file.FullName
        Replacements = $repls
    }) | Out-Null
}

# Assign contiguous names and build desired file set.
$desiredFiles = @{}
$viewMap = @{}

foreach ($key in ($itemsByKey.Keys | Sort-Object)) {
    $parts = $key.Split('|')
    $category = $parts[0]
    $num = $parts[1]

    $ordered = $itemsByKey[$key] | Sort-Object @{Expression='ExistingOrder';Ascending=$true}, @{Expression='AddedOrder';Ascending=$true}

    for ($i = 0; $i -lt $ordered.Count; $i++) {
        $suffix = Suffix-FromIndex $i
        $stem = "__widget-$num$suffix"
        $newView = "partials.widgets-demo.$category.$stem"
        $targetDir = Join-Path $PartialsRoot $category
        $targetPath = Join-Path $targetDir ($stem + '.blade.php')

        $ordered[$i] | Add-Member -NotePropertyName NewStem -NotePropertyValue $stem -Force
        $ordered[$i] | Add-Member -NotePropertyName NewView -NotePropertyValue $newView -Force
        $ordered[$i] | Add-Member -NotePropertyName NewPath -NotePropertyValue $targetPath -Force

        $desiredFiles[$targetPath] = $ordered[$i].Raw

        if ($ordered[$i].OldView -and $ordered[$i].OldView -ne $newView) {
            $viewMap[$ordered[$i].OldView] = $newView
        }
    }
}

# Write desired partial files and remove stale files.
$written = 0
foreach ($p in $desiredFiles.Keys) {
    $dir = Split-Path -Parent $p
    if (-not (Test-Path -LiteralPath $dir)) {
        New-Item -ItemType Directory -Path $dir -Force | Out-Null
    }
    Set-Content -LiteralPath $p -Value $desiredFiles[$p] -NoNewline
    $written++
}

$desiredSet = New-Object System.Collections.Generic.HashSet[string] ([System.StringComparer]::OrdinalIgnoreCase)
foreach ($p in $desiredFiles.Keys) { [void]$desiredSet.Add((Resolve-Path -LiteralPath $p).Path) }

$protectedByInclude = New-Object System.Collections.Generic.HashSet[string] ([System.StringComparer]::OrdinalIgnoreCase)
$allBladeForProtect = Get-ChildItem -Path $ViewsRoot -Recurse -File -Filter '*.blade.php'
foreach ($bf in $allBladeForProtect) {
    $txt = Get-Content -LiteralPath $bf.FullName -Raw
    [regex]::Matches($txt, '@include\(\s*[''"](partials\.widgets-demo\.[^''"]+)[''"]\s*\)') | ForEach-Object {
        $fullView = $_.Groups[1].Value
        $path = Join-Path $ViewsRoot (($fullView -replace '\.', '/') + '.blade.php')
        if (Test-Path -LiteralPath $path) {
            [void]$protectedByInclude.Add((Resolve-Path -LiteralPath $path).Path)
        }
    }
}

$removed = 0
Get-ChildItem -Path $PartialsRoot -Recurse -File -Filter '*.blade.php' | ForEach-Object {
    $abs = (Resolve-Path -LiteralPath $_.FullName).Path
    if (-not $desiredSet.Contains($abs) -and -not $protectedByInclude.Contains($abs)) {
        Remove-Item -LiteralPath $_.FullName -Force
        $removed++
    }
}

# Apply replacements for pages that still have raw widget blocks.
$pagesChanged = 0
$blocksReplaced = 0
foreach ($plan in $pagePlans) {
    $raw = Get-Content -LiteralPath $plan.File -Raw
    $lines = [regex]::Split($raw, "`r?`n")

    $repls = $plan.Replacements | Sort-Object @{Expression='Start';Ascending=$true}
    $map = @{}
    foreach ($r in $repls) { $map[[string]$r.Start] = $r }

    $newLines = New-Object System.Collections.Generic.List[string]
    $idx = 0
    $fileReplace = 0

    while ($idx -lt $lines.Length) {
        $k = [string]$idx
        if ($map.ContainsKey($k)) {
            $r = $map[$k]
            $indent = ([regex]::Match($lines[$idx], '^\s*')).Value
            $newLines.Add("$indent@include('$($r.ItemRef.NewView)')") | Out-Null
            $idx = $r.End + 1
            $fileReplace++
            continue
        }

        $newLines.Add($lines[$idx]) | Out-Null
        $idx++
    }

    if ($fileReplace -gt 0) {
        $newContent = ($newLines -join [Environment]::NewLine)
        if ($newContent -ne $raw) {
            Set-Content -LiteralPath $plan.File -Value $newContent -NoNewline
            $pagesChanged++
            $blocksReplaced += $fileReplace
        }
    }
}

# Rewrite includes that still point to renamed stems.
$includeUpdates = 0
if ($viewMap.Count -gt 0) {
    $allBlade = Get-ChildItem -Path $ViewsRoot -Recurse -File -Filter '*.blade.php'
    foreach ($f in $allBlade) {
        $raw = Get-Content -LiteralPath $f.FullName -Raw
        $new = $raw

        foreach ($oldView in ($viewMap.Keys | Sort-Object -Descending)) {
            $newView = $viewMap[$oldView]
            $new = $new -replace [regex]::Escape("@include('$oldView')"), "@include('$newView')"
            $oldDouble = '@include("' + $oldView + '")'
            $newDouble = '@include("' + $newView + '")'
            $new = $new -replace [regex]::Escape($oldDouble), $newDouble
        }

        if ($new -ne $raw) {
            Set-Content -LiteralPath $f.FullName -Value $new -NoNewline
            $includeUpdates++
        }
    }
}

Write-Output "RAW_WIDGET_BLOCKS_FOUND=$rawWidgetBlocks"
Write-Output "NEW_ITEMS_ADDED=$newItemsAdded"
Write-Output "PARTIAL_FILES_WRITTEN=$written"
Write-Output "PARTIAL_FILES_REMOVED=$removed"
Write-Output "PAGES_CHANGED_BY_BLOCK_REPLACE=$pagesChanged"
Write-Output "BLOCKS_REPLACED_WITH_INCLUDE=$blocksReplaced"
Write-Output "FILES_UPDATED_BY_INCLUDE_RENAME=$includeUpdates"
Write-Output "RENAMED_VIEW_REFERENCES=$($viewMap.Count)"
Write-Output "PROTECTED_FILES_FROM_INCLUDE=$($protectedByInclude.Count)"
