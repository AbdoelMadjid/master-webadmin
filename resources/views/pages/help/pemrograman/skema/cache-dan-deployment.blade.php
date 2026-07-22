@extends('layouts.index')

@section('styles')
    @include('pages.help.pemrograman._schema-ui')
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            {{ __('help.skema') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <div class="schema-hero">
                    <span class="schema-pill">Release Ops</span>
                    <h2 class="fw-bold">{{ __('help.skema_cache_and_deployment') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.cache-dan-deployment.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_2') !!}</h4>
                            <pre class="schema-code"><code>1) Config cache
- Command: php artisan config:cache
- Efek: gabungkan config jadi 1 cache file
- Wajib regen saat .env/config berubah

2) Route cache
- Command: php artisan route:cache
- Efek: percepat registrasi route
- Syarat: tidak ada route closure

3) View cache
- Command: php artisan view:cache
- Efek: precompile semua Blade
- Cocok untuk production

4) Event cache (opsional)
- Command: php artisan event:cache
- Efek: cache discovery listener event</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_3') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_4') !!}</h4>
                            <pre class="schema-code"><code># 1) Persiapan release
git pull
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# 2) Migration (jika ada perubahan schema)
php artisan migrate --force

# 3) Regenerate cache produksi
php artisan config:cache
php artisan route:cache
php artisan view:cache
# opsional: php artisan event:cache

# 4) Restart worker/service yang relevan
php artisan queue:restart

# 5) Smoke test
php artisan route:list --name=help.pemrograman
# cek endpoint kritikal via browser/monitoring</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_5') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>php artisan optimize:clear
# lalu regenerate cache yang dibutuhkan</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_12') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_25') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_9') !!}</h4>
                            <pre class="schema-code"><code>Trigger rollback jika:
- error rate naik signifikan dan tidak stabil dalam window observasi
- fitur kritikal gagal dan tidak ada mitigasi cepat
- data integrity berisiko

Langkah rollback:
1) Rollback code ke release terakhir yang stabil
2) Clear/regenerate cache sesuai versi rollback
3) Restart queue worker/service
4) Jalankan smoke test minimal
5) Komunikasikan status rollback + next action</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_10') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_16') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_11') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_18') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_7') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_8') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_9') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_10') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_12') !!}</h4>
                            <pre class="schema-code"><code># A. Pre-check
git rev-parse --short HEAD
php artisan about

# B. Build & dependency
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# C. Schema change (jika ada)
php artisan migrate --force

# D. Cache regenerate
php artisan config:cache
php artisan route:cache
php artisan view:cache
# opsional: php artisan event:cache

# E. Runtime refresh
php artisan queue:restart

# F. Verification
php artisan route:list --name=help.pemrograman</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_13') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_20') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_14') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_24') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.cache-dan-deployment.heading_15') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_22') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_23') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection