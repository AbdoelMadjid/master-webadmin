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
            {{ __('help.operasional') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <div class="schema-hero">
                    <span class="schema-pill">Developer Workflow</span>
                    <h2 class="fw-bold">{{ __('help.panduan_tambah_halaman') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.panduan-tambah-halaman.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-halaman.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-halaman.heading_2') !!}</h4>
                            <pre class="schema-code"><code>resources/views/pages/help/pemrograman/operasional/
  panduan-foo.blade.php</code></pre>
                            <pre class="schema-code mt-4"><code>// route name otomatis
help.pemrograman.operasional.panduan-foo

// URL otomatis
/help/pemrograman/operasional/panduan-foo</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-halaman.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.operasional.panduan-tambah-halaman.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.operasional.panduan-tambah-halaman.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-halaman.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-halaman.heading_5') !!}</h4>
                            <pre class="schema-code"><code>php artisan route:list --name=help.pemrograman
php artisan optimize:clear
composer test</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12 mt-6">
                        <div class="schema-card">
                            <h4>Aturan Halaman Multi-Tab & Preservasi Core Layout</h4>
                            <ul class="schema-list">
                                <li><strong>Jangan Mengubah File Layout Core & Seeder:</strong> Dilarang mengubah file layout bawaan (seperti <code>_menu-item.blade.php</code>, <code>_menu-item-temp.blade.php</code>, <code>navs.blade.php</code>) atau seeder menu (<code>config/menu_seeder/*_seeder.php</code>) hanya untuk menambahkan sub-tab.</li>
                                <li><strong>Arsitektur Multi-Tab Single-Route:</strong> Gunakan rute tunggal (misal <code>/profil-pengguna?tab=...</code>) dan panggil partial tab secara dinamis via Blade <code>@@include('pages.feature.tabs._tab')</code> agar highlight aktif pada menu sidebar tetap terjaga 100%.</li>
                                <li><strong>Integritas Partial Blade:</strong> File partial tab TIDAK boleh berisi tag <code>@@endsection</code>, <code>@@extends</code>, atau tag penutup <code>&lt;/div&gt;</code> kontainer utama agar tidak merusak tata letak footer atau menutup section lebih awal.</li>
                                <li><strong>Pemuatan Bundel Script:</strong> Pastikan <code>@@section('scripts')</code> pada view utama memuat pustaka JS pendukung (seperti <code>widgets.bundle.js</code>, <code>custom/widgets.js</code>, <code>datatables.bundle.js</code>) agar grafik dan komponen interaktif berjalan normal.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12 mt-6">
                        <div class="schema-card">
                            <h4>Aturan Pembuatan Tabel Responsif</h4>
                            <ul class="schema-list">
                                <li><strong>Tanpa Blok CSS Custom:</strong> Dilarang membuat tag <code>&lt;style&gt;</code> atau CSS override custom untuk tabel. Gunakan 100% kelas bawaan Metronic & Bootstrap 5 (seperti <code>table</code>, <code>align-middle</code>, <code>table-row-dashed</code>, <code>fs-6</code>, <code>gy-4</code>, <code>w-100</code>).</li>
                                <li><strong>Pembungkus Responsif Bawaan:</strong> Wajib membungkus tabel data dengan <code>&lt;div class="table-responsive"&gt;</code>. Ini menjamin tampilan tabel pas di desktop dan otomatis mengaktifkan scroll horizontal di perangkat mobile/gadget.</li>
                                <li><strong>Menjaga Lebar Kolom dengan Kelas Bawaan:</strong> Gunakan kelas minimum width bawaan Metronic (seperti <code>min-w-200px</code>, <code>min-w-150px</code>, <code>min-w-125px</code>) pada elemen <code>&lt;th&gt;</code> agar kolom (seperti URL/Route, Nama, Permission) tidak gepeng atau menyusut.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection