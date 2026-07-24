@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. APP PROFILE & BRANDING MANAGEMENT WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Application Profile & Identity (App Profile & Branding)</h3>
            <span class="text-muted fs-7">Operational guide and architecture for system identity, logos, favicons, and global footer text management.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Architecture & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>AppProfilController</code> on route <code>appsupport/app-profil</code>.
                </div>
                <div class="schema-step">
                    <strong>Form Request Validation:</strong> Uses Form Request <code>App\Http\Requests\AppSupport\AppProfilRequest</code>.
                </div>
                <div class="schema-step">
                    <strong>Asset Files Storage:</strong> Main logo, small logo, and favicon are saved in <code>public/uploads/app/</code>.
                </div>
                <div class="schema-step">
                    <strong>Model Accessor:</strong> Asset URLs are automatically accessed via <code>$profil->logo_url</code>, <code>$profil->logo_small_url</code>, and <code>$profil->favicon_url</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-picture fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> App Profile Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>Main Identity:</strong> Configure App Name, Tagline, Contact Email, Phone Number, and Company Address.</li>
                <li><strong>Upload Branding Assets:</strong> Upload Main Logo (expanded sidebar), Small Logo (collapsed sidebar), and browser Favicon.</li>
                <li><strong>Maintenance Mode:</strong> Enable maintenance status to restrict non-admin users during system upgrades.</li>
                <li><strong>Footer Text & Copyright:</strong> Edit global copyright text displayed at the bottom of all webadmin pages.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR PENGELOLAAN APP PROFIL & BRANDING -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Profil & Identitas Aplikasi (App Profil & Branding)</h3>
            <span class="text-muted fs-7">Panduan operasional dan arsitektur pengolahan identitas sistem, logo, favicon, dan teks footer global.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>AppProfilController</code> pada rute <code>appsupport/app-profil</code>.
                </div>
                <div class="schema-step">
                    <strong>Form Request Validation:</strong> Menggunakan Form Request <code>App\Http\Requests\AppSupport\AppProfilRequest</code>.
                </div>
                <div class="schema-step">
                    <strong>Penyimpanan Berkas Asset:</strong> Logo utama, logo kecil, dan favicon disimpan di <code>public/uploads/app/</code>.
                </div>
                <div class="schema-step">
                    <strong>Model Accessor:</strong> URL asset diakses secara otomatis via <code>$profil->logo_url</code>, <code>$profil->logo_small_url</code>, dan <code>$profil->favicon_url</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-picture fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Fitur App Profil</h4>
            <ul class="schema-list">
                <li><strong>Identitas Utama:</strong> Mengatur Nama Aplikasi, Tagline, Email Kontak, Nomor Telepon, dan Alamat Perusahaan.</li>
                <li><strong>Upload Asset Branding:</strong> Mengunggah Logo Utama (untuk sidebar terbentang), Logo Small (untuk sidebar terlipat), dan Favicon browser.</li>
                <li><strong>Mode Pemeliharaan (Maintenance Mode):</strong> Mengaktifkan status maintenance untuk membatasi akses pengguna non-admin saat ada perbaikan sistem.</li>
                <li><strong>Teks Footer & Copyright:</strong> Mengubah teks hak cipta pada bagian bawah seluruh halaman webadmin secara terpusat.</li>
            </ul>
        </div>
    </div>
</div>
@endif
