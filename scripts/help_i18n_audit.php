<?php

$id = require __DIR__ . '/../lang/id/help.php';
$en = require __DIR__ . '/../lang/en/help.php';

$opts = getopt('', ['snapshot', 'semantic-risk', 'semantic-risk-mode::', 'semantic-risk-critical-only']);
$doSnapshot = array_key_exists('snapshot', $opts);
$doSemantic = array_key_exists('semantic-risk', $opts) || array_key_exists('semantic-risk-mode', $opts) || array_key_exists('semantic-risk-critical-only', $opts);

$semanticMode = 'strict';
if (array_key_exists('semantic-risk-critical-only', $opts)) {
    $semanticMode = 'critical-only';
}
if (array_key_exists('semantic-risk-mode', $opts) && is_string($opts['semantic-risk-mode']) && $opts['semantic-risk-mode'] !== '') {
    $candidate = strtolower(trim($opts['semantic-risk-mode']));
    if (in_array($candidate, ['strict', 'critical-only'], true)) {
        $semanticMode = $candidate;
    } else {
        fwrite(STDERR, "Invalid --semantic-risk-mode value: {$candidate}. Use strict or critical-only.\n");
        exit(2);
    }
}

$keys = array_unique(array_merge(array_keys($id), array_keys($en)));
sort($keys);

function page_of(string $k): string
{
    $p = explode('.', $k);
    if (count($p) >= 2 && $p[0] === 'overview') return 'overview';
    if (count($p) >= 3 && $p[0] === 'pages') {
        if ($p[1] === 'overview') return 'overview';
        return $p[1] . '.' . $p[2];
    }
    return 'other';
}

function norm(string $s): string
{
    return (string)preg_replace('/\s+/u', ' ', trim($s));
}

function placeholders(string $s): array
{
    preg_match_all('/\{\{.*?\}\}|\{\w+\}|<\/?code>|<\/?strong>|<\/?em>/s', $s, $m);
    $vals = $m[0] ?? [];
    sort($vals);
    return $vals;
}

function ensure_dir(string $path): void
{
    if (!is_dir($path)) mkdir($path, 0777, true);
}

function strip_markup(string $s): string
{
    return strtolower(trim(preg_replace('/\s+/u', ' ', strip_tags($s))));
}

function any_match(string $text, array $patterns): bool
{
    foreach ($patterns as $p) {
        if (preg_match($p, $text)) return true;
    }
    return false;
}

function semantic_term_map(string $mode): array
{
    $strict = [
        'route' => [
            'id' => ['/\\broute\\b/u'],
            'en' => ['/\\broute(?:s|d)?\\b/u', '/\\brouting\\b/u'],
        ],
        'middleware' => [
            'id' => ['/\\bmiddleware\\b/u'],
            'en' => ['/\\bmiddleware\\b/u'],
        ],
        'auth' => [
            'id' => ['/\\bauth\\b/u', '/\\bautentikasi\\b/u'],
            'en' => ['/\\bauth\\b/u', '/\\bauthentication\\b/u'],
        ],
        'cache' => [
            'id' => ['/\\bcache\\b/u'],
            'en' => ['/\\bcache\\b/u', '/\\bcaching\\b/u'],
        ],
        'query' => [
            'id' => ['/\\bquery\\b/u'],
            'en' => ['/\\bquery\\b/u', '/\\bqueries\\b/u'],
        ],
        'transaction' => [
            'id' => ['/\\btransaction\\b/u', '/\\btransaksi\\b/u'],
            'en' => ['/\\btransactions?\\b/u', '/\\batomic\\b/u'],
        ],
        'rollback' => [
            'id' => ['/\\brollback\\b/u'],
            'en' => ['/\\brollback\\b/u'],
        ],
        'migration' => [
            'id' => ['/\\bmigration\\b/u'],
            'en' => ['/\\bmigrations?\\b/u', '/\\bschema change\\b/u'],
        ],
        'fallback' => [
            'id' => ['/\\bfallback\\b/u'],
            'en' => ['/\\bfallback\\b/u', '/\\bfalls?\\s+back\\b/u'],
        ],
        'locale' => [
            'id' => ['/\\blocale\\b/u', '/\\bbahasa\\b/u'],
            'en' => ['/\\blocale\\b/u', '/\\blanguage\\b/u'],
        ],
    ];

    $criticalOnly = [
        'route' => $strict['route'],
        'middleware' => $strict['middleware'],
        'auth' => $strict['auth'],
        'transaction' => $strict['transaction'],
        'rollback' => $strict['rollback'],
        'fallback' => $strict['fallback'],
    ];

    return $mode === 'critical-only' ? $criticalOnly : $strict;
}

function detect_semantic_risk(string $idText, string $enText, string $mode = 'strict'): array
{
    $risks = [];

    $idn = strip_markup($idText);
    $enn = strip_markup($enText);

    if ($idn === '' || $enn === '') return $risks;

    $termMap = semantic_term_map($mode);

    foreach ($termMap as $label => $rules) {
        if (any_match($idn, $rules['id'])) {
            if (!any_match($enn, $rules['en'])) {
                $risks[] = 'missing_technical_term:' . $label;
            }
        }
    }

    $idHasCode = str_contains($idText, '<code>');
    $enHasCode = str_contains($enText, '<code>');
    if ($idHasCode !== $enHasCode) $risks[] = 'code_markup_shift';

    $idHasStrong = str_contains($idText, '<strong>');
    $enHasStrong = str_contains($enText, '<strong>');
    if ($idHasStrong !== $enHasStrong) $risks[] = 'emphasis_shift';

    // Only enforce strictness shift when ID explicitly marks a mandatory rule phrase.
    if (preg_match('/(?:<strong>\s*)?rule\s+wajib\b|\bwajib\b/u', strtolower($idText)) && !preg_match('/\b(mandatory|required|must)\b/u', strtolower($enText))) {
        $risks[] = 'mandatory_strength_shift';
    }

    return $risks;
}

$rows = [];
$summary = [];

foreach ($keys as $k) {
    if (!str_starts_with($k, 'pages.')) continue;

    $page = page_of($k);
    $idv = $id[$k] ?? null;
    $env = $en[$k] ?? null;

    $issues = [];
    if ($idv === null) $issues[] = 'missing_id';
    if ($env === null) $issues[] = 'missing_en';

    if ($idv !== null && $env !== null) {
        $idn = norm((string)$idv);
        $enn = norm((string)$env);

        if ($idn === $enn) $issues[] = 'identical_id_en';
        if (str_contains((string)$env, '�') || str_contains((string)$idv, '�')) $issues[] = 'encoding_suspect';
        if (placeholders((string)$idv) !== placeholders((string)$env)) $issues[] = 'placeholder_or_markup_mismatch';

        $lenId = mb_strlen(strip_tags($idn));
        $lenEn = mb_strlen(strip_tags($enn));
        if ($lenId > 0 && $lenEn > 0) {
            $ratio = $lenId > $lenEn ? $lenId / max(1, $lenEn) : $lenEn / max(1, $lenId);
            if ($ratio >= 3.0) $issues[] = 'length_ratio_outlier';
        }

        if (preg_match('/\b(Jika|wajib|pakai|hindari|contoh|dan|yang|untuk)\b/u', (string)$env)) {
            $issues[] = 'en_contains_id_terms';
        }
    }

    $status = empty($issues) ? 'ok' : implode('|', $issues);
    $rows[] = ['page' => $page, 'key' => $k, 'status' => $status, 'id' => $idv ?? '', 'en' => $env ?? ''];

    if (!isset($summary[$page])) $summary[$page] = ['total' => 0, 'ok' => 0, 'issues' => 0, 'issue_keys' => []];
    $summary[$page]['total']++;
    if ($status === 'ok') $summary[$page]['ok']++;
    else {
        $summary[$page]['issues']++;
        $summary[$page]['issue_keys'][] = $k . ' => ' . $status;
    }
}

ksort($summary);
$outDir = __DIR__ . '/../storage/app';
ensure_dir($outDir);

$csvPath = $outDir . '/help_i18n_audit_key_by_key.csv';
$csv = fopen($csvPath, 'w');
fputcsv($csv, ['page', 'key', 'status', 'id', 'en'], ',', '"', '\\');
foreach ($rows as $r) fputcsv($csv, [$r['page'], $r['key'], $r['status'], $r['id'], $r['en']], ',', '"', '\\');
fclose($csv);

$md = [];
$md[] = '# Help i18n Audit (ID vs EN)';
$md[] = '';
$md[] = 'Generated: ' . date('Y-m-d H:i:s');
$md[] = '';
$md[] = 'Heuristic checks: missing key, identical ID/EN, placeholder/markup mismatch, length outlier, EN contains ID terms.';
$md[] = '';
$md[] = '## Summary Per Page';
$md[] = '';
$md[] = '| Page | Total Keys | OK | Issues |';
$md[] = '|---|---:|---:|---:|';
foreach ($summary as $page => $s) $md[] = '| ' . $page . ' | ' . $s['total'] . ' | ' . $s['ok'] . ' | ' . $s['issues'] . ' |';
$md[] = '';
$md[] = '## Issue Details (Key by Key)';
$md[] = '';
foreach ($summary as $page => $s) {
    if ($s['issues'] === 0) continue;
    $md[] = '### ' . $page;
    foreach ($s['issue_keys'] as $line) $md[] = '- ' . $line;
    $md[] = '';
}
$mdPath = $outDir . '/help_i18n_audit_summary.md';
file_put_contents($mdPath, implode("\n", $md));

$issuePages = 0;
$totalIssueKeys = 0;
foreach ($summary as $s) {
    if ($s['issues'] > 0) $issuePages++;
    $totalIssueKeys += $s['issues'];
}

echo "Wrote {$csvPath}\n";
echo "Wrote {$mdPath}\n";
echo "Pages with issues: {$issuePages}\n";
echo "Total issue keys: {$totalIssueKeys}\n";

if ($doSemantic) {
    $sRows = [];
    $sSummary = [];
    foreach ($keys as $k) {
        if (!str_starts_with($k, 'pages.')) continue;
        $page = page_of($k);
        $idv = $id[$k] ?? null;
        $env = $en[$k] ?? null;
        if ($idv === null || $env === null) continue;

        $risks = detect_semantic_risk((string)$idv, (string)$env, $semanticMode);
        $status = empty($risks) ? 'ok' : implode('|', $risks);
        $sRows[] = ['page' => $page, 'key' => $k, 'status' => $status, 'id' => $idv, 'en' => $env];

        if (!isset($sSummary[$page])) $sSummary[$page] = ['total' => 0, 'ok' => 0, 'risks' => 0, 'risk_keys' => []];
        $sSummary[$page]['total']++;
        if ($status === 'ok') $sSummary[$page]['ok']++;
        else {
            $sSummary[$page]['risks']++;
            $sSummary[$page]['risk_keys'][] = $k . ' => ' . $status;
        }
    }

    ksort($sSummary);
    $semanticSuffix = $semanticMode === 'critical-only' ? 'critical_only' : 'strict';
    $sCsvPath = $outDir . '/help_i18n_semantic_risk_' . $semanticSuffix . '.csv';
    $sCsv = fopen($sCsvPath, 'w');
    fputcsv($sCsv, ['page', 'key', 'status', 'id', 'en'], ',', '"', '\\');
    foreach ($sRows as $r) fputcsv($sCsv, [$r['page'], $r['key'], $r['status'], $r['id'], $r['en']], ',', '"', '\\');
    fclose($sCsv);

    $sMd = [];
    $sMd[] = '# Help i18n Semantic-Risk Audit (ID vs EN)';
    $sMd[] = '';
    $sMd[] = 'Generated: ' . date('Y-m-d H:i:s');
    $sMd[] = '';
    $sMd[] = 'Mode: ' . $semanticMode;
    $sMd[] = '';
    $sMd[] = 'Checks: technical-term preservation, code/emphasis shift, mandatory-strength shift.';
    $sMd[] = '';
    $sMd[] = '## Summary Per Page';
    $sMd[] = '';
    $sMd[] = '| Page | Total Keys | OK | Semantic Risks |';
    $sMd[] = '|---|---:|---:|---:|';
    foreach ($sSummary as $page => $s) $sMd[] = '| ' . $page . ' | ' . $s['total'] . ' | ' . $s['ok'] . ' | ' . $s['risks'] . ' |';
    $sMd[] = '';
    $sMd[] = '## Risk Details (Key by Key)';
    $sMd[] = '';
    foreach ($sSummary as $page => $s) {
        if ($s['risks'] === 0) continue;
        $sMd[] = '### ' . $page;
        foreach ($s['risk_keys'] as $line) $sMd[] = '- ' . $line;
        $sMd[] = '';
    }
    $sMdPath = $outDir . '/help_i18n_semantic_risk_summary_' . $semanticSuffix . '.md';
    file_put_contents($sMdPath, implode("\n", $sMd));

    // Backward-compatible aliases (latest semantic run)
    copy($sCsvPath, $outDir . '/help_i18n_semantic_risk.csv');
    copy($sMdPath, $outDir . '/help_i18n_semantic_risk_summary.md');

    $riskPages = 0;
    $riskKeys = 0;
    foreach ($sSummary as $s) {
        if ($s['risks'] > 0) $riskPages++;
        $riskKeys += $s['risks'];
    }
    echo "Wrote {$sCsvPath}\n";
    echo "Wrote {$sMdPath}\n";
    echo "Pages with semantic risks: {$riskPages}\n";
    echo "Total semantic-risk keys: {$riskKeys}\n";
}

if ($doSnapshot) {
    $ts = date('Ymd_His');
    $snapDir = $outDir . '/help_i18n_baseline/' . $ts;
    ensure_dir($snapDir);

    copy($csvPath, $snapDir . '/help_i18n_audit_key_by_key.csv');
    copy($mdPath, $snapDir . '/help_i18n_audit_summary.md');
    if ($doSemantic) {
        $semanticSuffix = $semanticMode === 'critical-only' ? 'critical_only' : 'strict';
        copy($outDir . '/help_i18n_semantic_risk.csv', $snapDir . '/help_i18n_semantic_risk.csv');
        copy($outDir . '/help_i18n_semantic_risk_summary.md', $snapDir . '/help_i18n_semantic_risk_summary.md');
        copy($outDir . '/help_i18n_semantic_risk_' . $semanticSuffix . '.csv', $snapDir . '/help_i18n_semantic_risk_' . $semanticSuffix . '.csv');
        copy($outDir . '/help_i18n_semantic_risk_summary_' . $semanticSuffix . '.md', $snapDir . '/help_i18n_semantic_risk_summary_' . $semanticSuffix . '.md');
    }

    $manifest = [
        'created_at' => date('c'),
        'source' => 'scripts/help_i18n_audit.php',
        'files' => array_values(array_filter([
            'help_i18n_audit_key_by_key.csv',
            'help_i18n_audit_summary.md',
            $doSemantic ? 'help_i18n_semantic_risk.csv' : null,
            $doSemantic ? 'help_i18n_semantic_risk_summary.md' : null,
            $doSemantic ? 'help_i18n_semantic_risk_' . ($semanticMode === 'critical-only' ? 'critical_only' : 'strict') . '.csv' : null,
            $doSemantic ? 'help_i18n_semantic_risk_summary_' . ($semanticMode === 'critical-only' ? 'critical_only' : 'strict') . '.md' : null,
        ])),
    ];
    file_put_contents($snapDir . '/manifest.json', json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    echo "Wrote baseline snapshot: {$snapDir}\n";
}
