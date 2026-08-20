@php
    $availableFeatures = \App\Services\WebsiteTemplateService::getAvailableFeatureFiles($selectedTheme->slug);
@endphp
<div class="d-flex flex-column gap-6">
    <!-- Top Selector Bar -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 bg-white p-5 rounded border border-gray-200 shadow-2xs">
        <div class="d-flex align-items-center gap-3">
            <div class="symbol symbol-40px symbol-circle bg-light-info p-2">
                <i class="{{ formatIconClass('ki-duotone ki-setting-2') }} text-info fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-setting-2', 2); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </div>
            <div>
                <h3 class="text-gray-900 fw-bold fs-4 m-0">
                    {{ app()->getLocale() == 'en' ? 'Theme Configurations & Branding' : 'Konfigurasi & Branding Tema' }}
                </h3>
                <span class="text-muted fs-7">
                    {{ app()->getLocale() == 'en' ? 'Manage logos and navigation menus for' : 'Kelola logo dan menu navigasi untuk tema' }}
                    <strong class="text-primary">{{ $selectedTheme->name }}</strong>
                </span>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 ms-auto">
            <label class="fw-semibold me-2 fs-7">{{ app()->getLocale() == 'en' ? 'Select Theme:' : 'Pilih Tema:' }}</label>
            <select class="form-select form-select-solid form-select-sm w-200px" onchange="location = this.value;">
                @foreach($themes as $t)
                    <option value="{{ route('appsupport.theme-frontpage', ['tab' => 'theme-config', 'theme_id' => $t->id]) }}" {{ $t->id == $selectedTheme->id ? 'selected' : '' }}>
                        {{ $t->name }} {{ $t->is_active ? '(' . (app()->getLocale() == 'en' ? 'Active' : 'Aktif') . ')' : '' }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Main Config Form -->
    <form id="theme_config_form" onsubmit="saveThemeConfig(event, {{ $selectedTheme->id }})" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="theme_frontpage_id" value="{{ $selectedTheme->id }}" />

        <!-- 1. Logo Management Card -->
        <div class="card shadow-xs border border-gray-200 mb-6">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-4 text-gray-900">
                        <i class="ki-duotone ki-picture fs-3 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Logo Branding Settings' : 'Pengaturan Logo & Branding' }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Configure header top logo, sticky header logo, and footer bottom logo.' : 'Atur logo header atas, logo sticky saat di-scroll, dan logo footer bawah.' }}
                    </span>
                </h3>
            </div>
            <div class="card-body pt-2">
                <div class="row g-6">
                    <!-- Logo Default (Header Main) -->
                    <div class="col-12 col-md-4">
                        <div class="border rounded p-4 bg-light text-center h-100 d-flex flex-column justify-content-between">
                            <div>
                                <label class="fw-bold text-gray-800 mb-2 d-block">
                                    {{ app()->getLocale() == 'en' ? '1. Default Header Logo' : '1. Logo Header Default (Atas)' }}
                                </label>
                                <div class="symbol symbol-100px bg-white p-3 border mb-3 rounded d-inline-flex align-items-center justify-content-center">
                                    <img src="{{ $selectedConfig->logo_default_url }}" alt="Default Logo" class="mw-100 mh-100 object-fit-contain" id="preview_logo_default" />
                                </div>
                            </div>
                            <div>
                                <input type="file" name="logo_default_file" class="form-control form-control-sm mb-2" accept="image/*" onchange="previewImage(this, 'preview_logo_default')" />
                                <input type="text" name="logo_default" class="form-control form-control-solid form-control-sm" placeholder="Path / Asset (Optional)" value="{{ $selectedConfig->logo_default }}" />
                                <span class="fs-9 text-muted d-block mt-1">{{ app()->getLocale() == 'en' ? 'Upload file or custom asset path' : 'Unggah file atau path asset kustom' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Logo Sticky (Header Scrolled) -->
                    <div class="col-12 col-md-4">
                        <div class="border rounded p-4 bg-light text-center h-100 d-flex flex-column justify-content-between">
                            <div>
                                <label class="fw-bold text-gray-800 mb-2 d-block">
                                    {{ app()->getLocale() == 'en' ? '2. Sticky Header Logo' : '2. Logo Header Sticky (Scroll)' }}
                                </label>
                                <div class="symbol symbol-100px bg-dark p-3 border mb-3 rounded d-inline-flex align-items-center justify-content-center">
                                    <img src="{{ $selectedConfig->logo_sticky_url }}" alt="Sticky Logo" class="mw-100 mh-100 object-fit-contain" id="preview_logo_sticky" />
                                </div>
                            </div>
                            <div>
                                <input type="file" name="logo_sticky_file" class="form-control form-control-sm mb-2" accept="image/*" onchange="previewImage(this, 'preview_logo_sticky')" />
                                <input type="text" name="logo_sticky" class="form-control form-control-solid form-control-sm" placeholder="Path / Asset (Optional)" value="{{ $selectedConfig->logo_sticky }}" />
                                <span class="fs-9 text-muted d-block mt-1">{{ app()->getLocale() == 'en' ? 'Upload file or custom asset path' : 'Unggah file atau path asset kustom' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Logo Footer (Bottom) -->
                    <div class="col-12 col-md-4">
                        <div class="border rounded p-4 bg-light text-center h-100 d-flex flex-column justify-content-between">
                            <div>
                                <label class="fw-bold text-gray-800 mb-2 d-block">
                                    {{ app()->getLocale() == 'en' ? '3. Footer Bottom Logo' : '3. Logo Footer (Bawah)' }}
                                </label>
                                <div class="symbol symbol-100px bg-white p-3 border mb-3 rounded d-inline-flex align-items-center justify-content-center">
                                    <img src="{{ $selectedConfig->logo_footer_url }}" alt="Footer Logo" class="mw-100 mh-100 object-fit-contain" id="preview_logo_footer" />
                                </div>
                            </div>
                            <div>
                                <input type="file" name="logo_footer_file" class="form-control form-control-sm mb-2" accept="image/*" onchange="previewImage(this, 'preview_logo_footer')" />
                                <input type="text" name="logo_footer" class="form-control form-control-solid form-control-sm" placeholder="Path / Asset (Optional)" value="{{ $selectedConfig->logo_footer }}" />
                                <span class="fs-9 text-muted d-block mt-1">{{ app()->getLocale() == 'en' ? 'Upload file or custom asset path' : 'Unggah file atau path asset kustom' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Header Menu & Features Builder Card -->
        <div class="card shadow-xs border border-gray-200 mb-6">
            <div class="card-header border-0 pt-5 d-flex align-items-center justify-content-between">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-4 text-gray-900">
                        <i class="ki-duotone ki-category fs-3 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Header Navigation & Feature Section Builder' : 'Kelola Menu Navigasi & File Feature Header' }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Map header menu items to feature view partials (automatically included in home-page.blade.php).' : 'Hubungkan menu header dengan berkas partial feature (otomatis di-include pada home-page.blade.php).' }}
                    </span>
                </h3>
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add Header Item' : 'Tambah Menu Header' }}">
                    <button type="button" class="btn btn-sm btn-light-primary fw-bold" onclick="addHeaderMenuItem()">
                        <i class="ki-duotone ki-plus fs-5"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Add Item' : 'Tambah Item' }}
                    </button>
                </span>
            </div>
            <div class="card-body pt-2">
                <div class="table-responsive">
                    <table class="table table-row-bordered table-row-gray-200 align-middle gs-0 gy-3" id="table_header_menu">
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th class="ps-4 min-w-50px rounded-start">#</th>
                                <th class="min-w-175px">{{ app()->getLocale() == 'en' ? 'Title / Label' : 'Judul / Label Menu' }}</th>
                                <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Target URL / Anchor (#)' : 'URL Tujuan / Anchor (#)' }}</th>
                                <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Feature File (features/)' : 'File Feature (features/)' }}</th>
                                <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Target Window' : 'Target Window' }}</th>
                                <th class="min-w-80px text-end pe-4 rounded-end">{{ app()->getLocale() == 'en' ? 'Action' : 'Aksi' }}</th>
                            </tr>
                        </thead>
                        <tbody id="header_menu_tbody">
                            @foreach($selectedConfig->header_menu_list as $idx => $item)
                                <tr>
                                    <td class="ps-4 fw-bold text-gray-600 index-col">{{ $idx + 1 }}</td>
                                    <td>
                                        <input type="text" name="header_menu[{{ $idx }}][title]" class="form-control form-control-solid form-control-sm" value="{{ $item['title'] ?? '' }}" required placeholder="Home" />
                                    </td>
                                    <td>
                                        <input type="text" name="header_menu[{{ $idx }}][url]" class="form-control form-control-solid form-control-sm" value="{{ $item['url'] ?? '' }}" required placeholder="#how-it-works" />
                                    </td>
                                    <td>
                                        <select name="header_menu[{{ $idx }}][feature_file]" class="form-select form-select-solid form-select-sm">
                                            <option value="">-- {{ app()->getLocale() == 'en' ? 'None / Auto-Resolve' : 'Tanpa File / Otomatis' }} --</option>
                                            @foreach($availableFeatures as $fFile)
                                                <option value="{{ $fFile }}" {{ ($item['feature_file'] ?? '') === $fFile ? 'selected' : '' }}>{{ $fFile }}.blade.php</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="header_menu[{{ $idx }}][target]" class="form-select form-select-solid form-select-sm">
                                            <option value="_self" {{ ($item['target'] ?? '_self') === '_self' ? 'selected' : '' }}>_self (Same Tab)</option>
                                            <option value="_blank" {{ ($item['target'] ?? '') === '_blank' ? 'selected' : '' }}>_blank (New Tab)</option>
                                        </select>
                                    </td>
                                    <td class="text-end pe-4">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-danger h-30px w-30px" onclick="removeMenuRow(this)">
                                            <i class="ki-duotone ki-trash fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. Footer Menu Builder Card -->
        <div class="card shadow-xs border border-gray-200 mb-6">
            <div class="card-header border-0 pt-5 d-flex align-items-center justify-content-between">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-4 text-gray-900">
                        <i class="ki-duotone ki-element-plus fs-3 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Footer Bottom Navigation Menu Builder' : 'Kelola Menu Navigasi Footer Bawah' }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Manage right-side footer bottom links (must be distinct from header menu).' : 'Atur tautan footer sebelah kanan (harus berbeda dari menu header).' }}
                    </span>
                </h3>
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add Footer Item' : 'Tambah Menu Footer' }}">
                    <button type="button" class="btn btn-sm btn-light-warning fw-bold" onclick="addFooterMenuItem()">
                        <i class="ki-duotone ki-plus fs-5"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Add Item' : 'Tambah Item' }}
                    </button>
                </span>
            </div>
            <div class="card-body pt-2">
                <div class="table-responsive">
                    <table class="table table-row-bordered table-row-gray-200 align-middle gs-0 gy-3" id="table_footer_menu">
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th class="ps-4 min-w-50px rounded-start">#</th>
                                <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Title / Label' : 'Judul / Label Menu' }}</th>
                                <th class="min-w-250px">{{ app()->getLocale() == 'en' ? 'Target URL' : 'URL Tujuan' }}</th>
                                <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Target Window' : 'Target Window' }}</th>
                                <th class="min-w-80px text-end pe-4 rounded-end">{{ app()->getLocale() == 'en' ? 'Action' : 'Aksi' }}</th>
                            </tr>
                        </thead>
                        <tbody id="footer_menu_tbody">
                            @foreach($selectedConfig->footer_menu_list as $idx => $item)
                                <tr>
                                    <td class="ps-4 fw-bold text-gray-600 index-col">{{ $idx + 1 }}</td>
                                    <td>
                                        <input type="text" name="footer_menu[{{ $idx }}][title]" class="form-control form-control-solid form-control-sm" value="{{ $item['title'] ?? '' }}" required placeholder="About" />
                                    </td>
                                    <td>
                                        <input type="text" name="footer_menu[{{ $idx }}][url]" class="form-control form-control-solid form-control-sm" value="{{ $item['url'] ?? '' }}" required placeholder="#how-it-works" />
                                    </td>
                                    <td>
                                        <select name="footer_menu[{{ $idx }}][target]" class="form-select form-select-solid form-select-sm">
                                            <option value="_self" {{ ($item['target'] ?? '_self') === '_self' ? 'selected' : '' }}>_self (Same Tab)</option>
                                            <option value="_blank" {{ ($item['target'] ?? '') === '_blank' ? 'selected' : '' }}>_blank (New Tab)</option>
                                        </select>
                                    </td>
                                    <td class="text-end pe-4">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-danger h-30px w-30px" onclick="removeMenuRow(this)">
                                            <i class="ki-duotone ki-trash fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Submit Button Section -->
        <div class="d-flex justify-content-end gap-3 mb-6">
            <button type="submit" class="btn btn-primary shadow-xs px-6">
                <i class="ki-duotone ki-check fs-2 me-1"><span class="path1"></span><span class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Save Configurations' : 'Simpan Konfigurasi Tema' }}
            </button>
        </div>
    </form>
</div>
