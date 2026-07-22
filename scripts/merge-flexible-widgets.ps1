param(
    [string]$PartialsRoot = 'resources/views/partials/widgets-demo',
    [string]$PagesRoot = 'resources/views/pages/demo'
)

$ErrorActionPreference = 'Stop'

function Get-GroupInfo([string]$fileName) {
    $m = [regex]::Match($fileName, '^__widget-([0-9]+)([a-z]*)\.blade\.php$')
    if (-not $m.Success) { return $null }
    return [pscustomobject]@{ Num = $m.Groups[1].Value; Suffix = $m.Groups[2].Value }
}

function Escape-DoubleQuoted([string]$value) {
    if ($null -eq $value) { return '' }
    return $value.Replace('\\', '\\\\').Replace('"', '\\"')
}

function Escape-SingleQuoted([string]$value) {
    if ($null -eq $value) { return '' }
    return $value.Replace("'", "''")
}

function Get-LineSkeleton([string]$line) {
    $s = [regex]::Replace($line, '"(?:[^"\\]|\\.)*"', '""')
    $s = [regex]::Replace($s, "'(?:[^'\\]|\\.)*'", "''")
    $s = [regex]::Replace($s, '>([^<>]+)<', '><')
    return $s
}

function Get-LineTokens([string]$line) {
    $tokens = New-Object System.Collections.Generic.List[object]
    $pattern = '"(?:[^"\\]|\\.)*"|''(?:[^''\\]|\\.)*''|>[^<>]+<'
    [regex]::Matches($line, $pattern) | ForEach-Object {
        $m = $_.Value
        if ($m.StartsWith('"')) {
            $tokens.Add([pscustomobject]@{ Type='dq'; Start=$_.Index+1; Length=$_.Length-2; Value=$m.Substring(1, $m.Length-2) }) | Out-Null
        } elseif ($m.StartsWith("'")) {
            $tokens.Add([pscustomobject]@{ Type='sq'; Start=$_.Index+1; Length=$_.Length-2; Value=$m.Substring(1, $m.Length-2) }) | Out-Null
        } elseif ($m.StartsWith('>') -and $m.EndsWith('<')) {
            $tokens.Add([pscustomobject]@{ Type='tx'; Start=$_.Index+1; Length=$_.Length-2; Value=$m.Substring(1, $m.Length-2) }) | Out-Null
        }
    }
    return $tokens
}

function Build-IncludeWithVars([string]$baseView, [hashtable]$vars) {
    $parts = New-Object System.Collections.Generic.List[string]
    foreach ($k in ($vars.Keys | Sort-Object)) {
        $v = Escape-SingleQuoted $vars[$k]
        $parts.Add("'$k' => '$v'") | Out-Null
    }
    $inside = ($parts -join ', ')
    return "@include('$baseView', ['vars' => [$inside]])"
}

$groups = @{}
Get-ChildItem -Path $PartialsRoot -Recurse -File -Filter '__widget-*.blade.php' | ForEach-Object {
    $info = Get-GroupInfo $_.Name
    if ($null -eq $info) { return }
    $category = $_.Directory.Name
    $key = "$category|$($info.Num)"
    if (-not $groups.ContainsKey($key)) { $groups[$key] = New-Object System.Collections.Generic.List[object] }
    $groups[$key].Add([pscustomobject]@{
        Path = $_.FullName
        Category = $category
        Num = $info.Num
        Suffix = $info.Suffix
        Stem = "__widget-$($info.Num)$($info.Suffix)"
        View = "partials.widgets-demo.$category.__widget-$($info.Num)$($info.Suffix)"
    }) | Out-Null
}

$pageFiles = Get-ChildItem -Path $PagesRoot -Recurse -File -Filter '*.blade.php'
$mergedGroups = 0
$totalVariantIncludesReplaced = 0
$changedPageSet = New-Object System.Collections.Generic.HashSet[string] ([System.StringComparer]::OrdinalIgnoreCase)

foreach ($key in ($groups.Keys | Sort-Object)) {
    $items = $groups[$key]
    if ($items.Count -lt 2) { continue }

    $base = $items | Where-Object { $_.Suffix -eq '' } | Select-Object -First 1
    if ($null -eq $base) { continue }

    $variants = $items | Where-Object { $_.Suffix -ne '' } | Sort-Object Suffix
    if ($variants.Count -eq 0) { continue }

    $all = @($base) + @($variants)

    $linesMap = @{}
    $lineCount = $null
    $canMerge = $true

    foreach ($it in $all) {
        $raw = Get-Content -LiteralPath $it.Path -Raw
        $lines = [regex]::Split($raw, "`r?`n")
        $linesMap[$it.Stem] = $lines

        if ($null -eq $lineCount) { $lineCount = $lines.Length }
        elseif ($lineCount -ne $lines.Length) { $canMerge = $false; break }
    }
    if (-not $canMerge) { continue }

    $diffTokens = New-Object System.Collections.Generic.List[object]

    for ($i = 0; $i -lt $lineCount; $i++) {
        $baseLine = $linesMap[$base.Stem][$i]
        $baseSkeleton = Get-LineSkeleton $baseLine
        $baseTokens = Get-LineTokens $baseLine

        foreach ($it in $all) {
            $line = $linesMap[$it.Stem][$i]
            if ((Get-LineSkeleton $line) -ne $baseSkeleton) { $canMerge = $false; break }

            $tks = Get-LineTokens $line
            if ($tks.Count -ne $baseTokens.Count) { $canMerge = $false; break }
            for ($t = 0; $t -lt $tks.Count; $t++) {
                if ($tks[$t].Type -ne $baseTokens[$t].Type) { $canMerge = $false; break }
            }
            if (-not $canMerge) { break }
        }
        if (-not $canMerge) { break }

        for ($t = 0; $t -lt $baseTokens.Count; $t++) {
            $vals = @{}
            foreach ($it in $all) {
                $line = $linesMap[$it.Stem][$i]
                $vals[$it.Stem] = (Get-LineTokens $line)[$t].Value
            }

            $uniqueVals = $vals.Values | Sort-Object -Unique
            if ($uniqueVals.Count -le 1) { continue }

            # Avoid generating complex nested blade in script/style lines.
            $tokenType = $baseTokens[$t].Type
            if ($tokenType -eq 'tx') {
                foreach ($v in $vals.Values) {
                    if ($v -match '<\?php|@if|@foreach|@php|\{\{.*\}\}') { $canMerge = $false; break }
                }
                if (-not $canMerge) { break }
            }

            $diffTokens.Add([pscustomobject]@{
                Line = $i
                TokenIndex = $t
                TokenType = $tokenType
                Key = ('p{0}_{1}' -f $i, $t)
                Values = $vals
            }) | Out-Null
        }

        if (-not $canMerge) { break }
    }

    if (-not $canMerge) { continue }
    if ($diffTokens.Count -eq 0) { continue }

    # Rewrite base widget with placeholders
    $baseLines = [System.Collections.Generic.List[string]]::new()
    foreach ($l in $linesMap[$base.Stem]) { $baseLines.Add($l) }

    $byLine = $diffTokens | Group-Object Line
    foreach ($g in $byLine) {
        $lineIndex = [int]$g.Name
        $origLine = $baseLines[$lineIndex]
        $tokens = Get-LineTokens $origLine

        $newLine = $origLine
        $offset = 0

        foreach ($node in ($g.Group | Sort-Object TokenIndex)) {
            $idx = [int]$node.TokenIndex
            $tok = $tokens[$idx]
            $default = Escape-DoubleQuoted $tok.Value
            $replacement = '{{ $vars["' + $node.Key + '"] ?? "' + $default + '" }}'
            $start = $tok.Start + $offset
            $len = $tok.Length
            $newLine = $newLine.Substring(0, $start) + $replacement + $newLine.Substring($start + $len)
            $offset += ($replacement.Length - $len)
        }

        $baseLines[$lineIndex] = $newLine
    }

    if ($baseLines.Count -eq 0 -or $baseLines[0] -notmatch '^\s*@php\(\$vars\s*=\s*\$vars\s*\?\?\s*\[\]\)') {
        $baseLines.Insert(0, '@php($vars = $vars ?? [])')
    }

    Set-Content -LiteralPath $base.Path -Value ($baseLines -join [Environment]::NewLine) -NoNewline

    # Replace variant includes in pages
    foreach ($variant in $variants) {
        $vars = @{}
        foreach ($node in $diffTokens) {
            $b = $node.Values[$base.Stem]
            $v = $node.Values[$variant.Stem]
            if ($v -ne $b) { $vars[$node.Key] = $v }
        }
        if ($vars.Count -eq 0) { continue }

        $newInclude = Build-IncludeWithVars -baseView $base.View -vars $vars
        $oldSingle = "@include('$($variant.View)')"
        $oldDouble = '@include("' + $variant.View + '")'

        foreach ($pf in $pageFiles) {
            $rawPage = Get-Content -LiteralPath $pf.FullName -Raw
            $newPage = $rawPage.Replace($oldSingle, $newInclude).Replace($oldDouble, $newInclude)
            if ($newPage -ne $rawPage) {
                Set-Content -LiteralPath $pf.FullName -Value $newPage -NoNewline
                [void]$changedPageSet.Add($pf.FullName)
                $totalVariantIncludesReplaced++
            }
        }
    }

    $mergedGroups++
}

Write-Output "MERGED_GROUPS=$mergedGroups"
Write-Output "CHANGED_PAGE_FILES=$($changedPageSet.Count)"
Write-Output "VARIANT_INCLUDE_REPLACEMENTS=$totalVariantIncludesReplaced"
