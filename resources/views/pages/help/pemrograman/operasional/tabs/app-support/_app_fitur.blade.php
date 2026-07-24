<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR FEATURE TOGGLE / FEATURE FLAG (APP FITUR) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-warning ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Sistem Switch Fitur Dinamis (Feature Toggle / Feature Flag)</h3>
            <span class="text-muted fs-7">Panduan operasional kontrol sakelar aktif/nonaktif modul dan komponen aplikasi secara real-time.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Helper Global</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>AppFiturController</code> pada rute <code>appsupport/app-fiturs</code>.
                </div>
                <div class="schema-step">
                    <strong>Helper Global `isFeatureActive()`:</strong> Pemanggilan di Blade: <code>@if(isFeatureActive('drawer_help')) ... @endif</code>.
                </div>
                <div class="schema-step">
                    <strong>AJAX Single Toggle:</strong> Mengubah status 1 fitur via <code>POST appsupport/app-fiturs/{id}/toggle-status</code>.
                </div>
                <div class="schema-step">
                    <strong>Bulk Toggle Status:</strong> Mengubah status banyak fitur sekaligus via <code>POST appsupport/app-fiturs/bulk-toggle</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-toggle-on fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Fitur Feature Flag</h4>
            <ul class="schema-list">
                <li><strong>Kontrol Sakelar Modul:</strong> Mengontrol tampilan drawer help, fitur ekspor data, widget statistik, atau modul uji coba secara fleksibel.</li>
                <li><strong>Keuntungan Tanpa Redeploy:</strong> Fitur yang mengalami kendala dapat dimatikan dalam hitungan detik tanpa me-redeploy aplikasi.</li>
                <li><strong>Manajemen Fitur Baru:</strong> Memungkinkan fitur yang sedang dikembangkan dirilis dalam keadaan tersembunyi terlebih dahulu (Dark Launching).</li>
            </ul>
        </div>
    </div>
</div>
