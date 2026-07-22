@extends('layouts.index')

@section('styles')
    <style>
        .wdg-density.wdg-comfortable {
            --wdg-item-pad-y: 0.6rem;
            --wdg-item-pad-x: 0.7rem;
            --wdg-item-fs: 0.875rem;
            --wdg-gap: 0.5rem;
        }

        .wdg-density.wdg-compact {
            --wdg-item-pad-y: 0.35rem;
            --wdg-item-pad-x: 0.5rem;
            --wdg-item-fs: 0.8rem;
            --wdg-gap: 0.35rem;
        }

        .wdg-hero {
            border: 1px solid var(--bs-gray-200);
            background: linear-gradient(135deg, #f8fafc 0%, #eef4ff 100%);
            border-radius: 1rem;
        }

        .wdg-board-card {
            border: 1px solid var(--bs-gray-200);
            border-radius: 1rem;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        .wdg-board-card .card-header {
            border-bottom: 1px solid #dbe7ff;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            background: linear-gradient(135deg, #f8fbff 0%, #ebf2ff 100%);
        }

        .wdg-board-card:hover {
            transform: translateY(-3px);
            border-color: #d6e4ff;
            box-shadow: 0 12px 28px rgba(29, 78, 216, 0.12);
        }

        .wdg-title-link {
            line-height: 1.2;
            text-decoration: none;
        }

        .wdg-title-link:hover {
            text-decoration: underline;
            text-decoration-color: #3b82f6;
            text-underline-offset: 3px;
        }

        .wdg-counter {
            border-radius: 999px;
            font-weight: 700;
            padding: 0.45rem 0.75rem;
        }

        .wdg-item {
            border: 1px solid var(--bs-gray-200);
            border-radius: 0.75rem;
            background-color: #fff;
            padding: var(--wdg-item-pad-y) var(--wdg-item-pad-x);
        }

        .wdg-item-name {
            font-weight: 600;
            color: #111827;
            letter-spacing: 0.1px;
            font-size: var(--wdg-item-fs);
        }

        .wdg-item-badges {
            gap: calc(var(--wdg-gap) - 0.1rem) !important;
        }

        .wdg-items-scroll {
            max-height: 360px;
            overflow-y: auto;
            padding-right: 0.25rem;
        }

        .wdg-items-scroll::-webkit-scrollbar {
            width: 8px;
        }

        .wdg-items-scroll::-webkit-scrollbar-thumb {
            background: #dbe7ff;
            border-radius: 999px;
        }

        .wdg-items-scroll::-webkit-scrollbar-track {
            background: #f5f8ff;
            border-radius: 999px;
        }

        .wdg-density-toggle .btn.active {
            box-shadow: inset 0 0 0 1px #3b82f6;
        }
    </style>
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Widgets / Distribusi
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid wdg-density wdg-comfortable">
            @php
                $dashboards = collect(glob(resource_path('views/pages/dashboards/*.blade.php')))
                    ->sort()
                    ->map(function ($path) {
                        $lines = file($path, FILE_IGNORE_NEW_LINES) ?: [];
                        $items = [];
                        $seen = [];

                        // Acuan tunggal: widget-include-badge di file dashboard
                        foreach ($lines as $line) {
                            if (!preg_match('/x-widget-include-badge\b[^>]*\bname="([a-z0-9]+)\._widget-([^"]+)"([^>]*)\/?>/i', $line, $m)) {
                                continue;
                            }

                            $type = strtolower($m[1]);
                            $raw = trim($m[2]);
                            $attrs = $m[3] ?? '';
                            $id = $raw;
                            $follow = null;

                            if (preg_match('/^([a-zA-Z0-9-]+)\s+\(follow\s+_widget-([a-zA-Z0-9-]+)\)$/', $raw, $f)) {
                                $id = $f[1];
                                $follow = $f[2];
                            }

                            $ref = [
                                'type' => $type,
                                'id' => $id,
                                'follow' => $follow,
                                'flexible' => str_contains($attrs, 'flexible'),
                            ];

                            $key = $ref['type'] . ':' . $ref['id'];
                            if (!isset($seen[$key])) {
                                $seen[$key] = true;
                                $items[] = $ref;
                            }
                        }

                        usort($items, function ($a, $b) {
                            $typeCompare = strcmp($a['type'], $b['type']);
                            if ($typeCompare !== 0) {
                                return $typeCompare;
                            }

                            return strnatcmp($a['id'], $b['id']);
                        });

                        return [
                            'name' => basename($path, '.blade.php'),
                            'path' => str_replace(resource_path('views') . DIRECTORY_SEPARATOR, '', $path),
                            'items' => $items,
                            'total' => count($items),
                        ];
                    })
                    ->values();
            @endphp

            <div class="card card-flush mb-8 wdg-hero">
                <div class="card-header pt-6">
                    <h3 class="card-title">Distribusi Widgets Per Dashboard</h3>
                    <div class="card-toolbar">
                        <div class="btn-group wdg-density-toggle" role="group" aria-label="Density">
                            <button type="button" class="btn btn-sm btn-light-primary active" data-density="comfortable">Comfortable</button>
                            <button type="button" class="btn btn-sm btn-light" data-density="compact">Compact</button>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 text-gray-600 fs-7">
                    Acuan: hanya dari <code>x-widget-include-badge</code> di file dashboard. Jika tipe widget baru diberi badge, daftar ini akan otomatis bertambah.
                </div>
            </div>

            <div class="row g-5">
                @foreach ($dashboards as $dashboard)
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card card-flush h-100 wdg-board-card">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex justify-content-between align-items-start w-100 gap-3">
                                    <div class="min-w-0">
                                        <a href="{{ url('/dashboards/' . $dashboard['name']) }}" target="_blank" rel="noopener noreferrer"
                                            class="fw-bold fs-5 text-capitalize text-gray-900 text-hover-primary wdg-title-link">
                                            {{ str_replace('-', ' ', $dashboard['name']) }}
                                        </a>
                                    </div>
                                    <span class="badge badge-light-primary flex-shrink-0 wdg-counter">{{ $dashboard['total'] }} widgets</span>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <div class="d-flex flex-column gap-2 wdg-items-scroll">
                                    @foreach ($dashboard['items'] as $item)
                                        <div class="wdg-item">
                                            <div class="fs-8 wdg-item-name">
                                                {{ $item['type'] }}._widget-{{ $item['id'] }}
                                            </div>
                                            <div class="d-flex flex-wrap wdg-item-badges mt-1">
                                                @if ($item['follow'])
                                                    <span class="badge badge-light-warning">Follow {{ $item['type'] }}._widget-{{ $item['follow'] }}</span>
                                                @endif
                                                @if ($item['flexible'])
                                                    <span class="badge badge-light-success">Flexible</span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        (function() {
            var root = document.getElementById('kt_app_content_container');
            if (!root) return;

            var buttons = root.querySelectorAll('.wdg-density-toggle [data-density]');
            buttons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var mode = btn.getAttribute('data-density');
                    root.classList.remove('wdg-comfortable', 'wdg-compact');
                    root.classList.add(mode === 'compact' ? 'wdg-compact' : 'wdg-comfortable');

                    buttons.forEach(function(b) {
                        b.classList.remove('active', 'btn-light-primary');
                        b.classList.add('btn-light');
                    });
                    btn.classList.add('active', 'btn-light-primary');
                    btn.classList.remove('btn-light');
                });
            });
        })();
    </script>
@endsection
