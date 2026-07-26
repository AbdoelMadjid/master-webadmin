@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. DATA REFERENCE MANAGEMENT OPERATIONAL OVERVIEW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">Master Data Reference Engine Operations</h3>
            <span class="text-muted fs-7">Operational guide for real-time control of lookup categories and dynamic form choice options.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Code Architecture & Endpoints</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>ReferensiController</code> on route <code>appsupport/referensi</code>.
                </div>
                <div class="schema-step">
                    <strong>Category Management:</strong> AJAX endpoints for storing, updating, deleting, and toggling active status of reference categories.
                </div>
                <div class="schema-step">
                    <strong>Item Options Management:</strong> Manage selectable choices per category with display sorting order.
                </div>
                <div class="schema-step">
                    <strong>Live Interactive Demo:</strong> Test dynamic select dropdowns directly on the Live Preview tab.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Master Reference Operational Workflow</h4>
            <ul class="schema-list">
                <li><strong>Dynamic Lookup System:</strong> Avoid hardcoding dropdown options inside forms; manage choices centrally via this panel.</li>
                <li><strong>Instant Form Updates:</strong> Adding or editing reference items instantly updates selection options across all forms.</li>
                <li><strong>System Safeguards:</strong> Built-in safeguards protect system-critical categories (e.g., <code>JENKEL</code>, <code>AGAMA</code>) from deletion.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. OPERASIONAL DATA REFERENSI -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">Operasional Engine Master Data Referensi</h3>
            <span class="text-muted fs-7">Panduan operasional pengelolaan data acuan acuan dan opsi pilihan formulir dinamis secara real-time.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur Koding & Endpoint</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>ReferensiController</code> pada rute <code>appsupport/referensi</code>.
                </div>
                <div class="schema-step">
                    <strong>Pengelolaan Kategori:</strong> Endpoint AJAX untuk menambah, mengedit, menghapus, dan mengaktifkan/menonaktifkan kategori.
                </div>
                <div class="schema-step">
                    <strong>Pengelolaan Item Referensi:</strong> Kelola opsi pilihan per kategori lengkap dengan urutan tampil.
                </div>
                <div class="schema-step">
                    <strong>Demo Interaktif Live:</strong> Uji coba pengujian kontrol dropdown secara langsung pada tab Live Preview.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Operasional Master Data Referensi</h4>
            <ul class="schema-list">
                <li><strong>Sistem Pilihan Dinamis:</strong> Hindari pemodelan pilihan hardcode dalam formulir; kelola seluruh acuan secara terpusat.</li>
                <li><strong>Pembaruan Instan:</strong> Penambahan atau pengubahan opsi item acuan akan langsung memperbarui seluruh pilihan formulir aplikasi.</li>
                <li><strong>Proteksi Sistem:</strong> Proteksi otomatis mencegah penghapusan kategori acuan inti sistem (seperti <code>JENKEL</code>, <code>AGAMA</code>).</li>
            </ul>
        </div>
    </div>
</div>
@endif
