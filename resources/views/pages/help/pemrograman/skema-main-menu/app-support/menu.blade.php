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
            Skema Main Menu > App Support
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero">
                    <span class="schema-pill">Skema Main Menu > App Support > Menu</span>
                    <h2 class="fw-bold">Skema Menu Management (Dynamic Menu, Ordering & Permissions)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur manajemen menu dinamis aplikasi, pengurutan hirarki menu (sort orders), sinkronisasi permission otomatis (`firstOrCreate`), serta pembaharuan HTML sidebar secara real-time.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR & STRUKTUR DATA -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & Database Model</h4>
                            <pre class="schema-code"><code>// Migration: menus
$table->id();
$table->string('name');            // Nama Menu
$table->string('url')->nullable(); // Rute / URL Path
$table->string('icon')->nullable(); // Class Ikon Metronic
$table->string('category')->default('appsupport');
$table->unsignedBigInteger('parent_id')->nullable();
$table->integer('orders')->default(0);
$table->boolean('active')->default(1);
$table->timestamps();

// Model: App\Models\AppSupport\Menu
public function subMenus() {
    return $this->hasMany(Menu::class, 'parent_id')->orderBy('orders');
}

public function permissions() {
    return $this->belongsToMany(Permission::class, 'menu_has_permissions');
}</code></pre>
                            <div class="schema-note mt-3">
                                Model menggunakan self-referencing relationship (<code>parent_id</code>) untuk mendukung hirarki menu bertingkat (parent & sub-menu).
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER & ALUR ENDPOINT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Controller Management (<code>MenuController</code>)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>GET /appsupport/menu</code></strong><br>
                                    <code>MenuController@index</code> -> Menampilkan daftar hirarki menu beserta izin akses (permissions).
                                </div>
                                <div class="schema-step">
                                    <strong><code>POST /appsupport/menu/sort</code></strong><br>
                                    <code>MenuController@sort</code> -> Meng-update kolom <code>orders</code> secara masal dan mengembalikan Partial HTML Sidebar terbaru (`sidebar_html`).
                                </div>
                                <div class="schema-step">
                                    <strong><code>POST /appsupport/menu/{id}/add-permission</code></strong><br>
                                    <code>MenuController@addPermission</code> -> Membuat & menghubungkan permission aksi (misal: <code>read appsupport/menu</code>) secara otomatis via <code>Permission::firstOrCreate</code>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. SINKRONISASI REAL-TIME SIDEBAR -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-refresh fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Pembaharuan Sidebar Real-time Tanpa Reload Halaman</h4>
                            <p class="fs-7 text-gray-700">
                                Setiap kali pengurutan menu diubah (drag & drop) atau status aktif toggle diubah, `MenuController` merender ulang partial view sidebar `layouts.partials.sidebar._menu` dan mengirimkannya via response JSON:
                            </p>
                            <pre class="schema-code"><code>// MenuController.php -> sort() & toggleStatus()
$sidebarHtml = view('layouts.partials.sidebar._menu')->render();

return response()->json([
    'success'      => true,
    'message'      => 'Urutan menu berhasil diperbarui.',
    'sidebar_html' => $sidebarHtml,
]);</code></pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
