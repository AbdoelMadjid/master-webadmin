<div class="d-flex flex-column gap-6">
    <!-- Header Card with Device Switcher & Info -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 bg-white p-5 rounded border border-gray-200 shadow-2xs">
        <div class="d-flex align-items-center gap-3">
            <div class="symbol symbol-40px symbol-circle bg-light-info p-2">
                <i class="{{ formatIconClass('ki-duotone ki-screen') }} text-info fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-screen', 4); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </div>
            <div>
                <h3 class="text-gray-900 fw-bold fs-5 m-0">
                    {{ app()->getLocale() == 'en' ? 'Live Frontpage Theme Preview' : 'Pratinjau Live Tema Beranda' }}
                </h3>
                <span class="text-muted fs-7">
                    {{ app()->getLocale() == 'en' ? 'Currently viewing active layout:' : 'Tampilan aktif beranda saat ini:' }}
                    <strong class="text-primary">{{ $activeTheme->name ?? 'Default' }}</strong> (<code>{{ $activeTheme->slug ?? 'default' }}</code>)
                </span>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 ms-auto">
            <!-- View Mode Switcher -->
            <div class="btn-group btn-group-sm" role="group" id="preview_device_group">
                <button type="button" class="btn btn-outline btn-outline-secondary active" onclick="setPreviewDevice('desktop')">
                    <i class="ki-duotone ki-screen fs-6 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    <span class="d-none d-sm-inline">Desktop</span>
                </button>
                <button type="button" class="btn btn-outline btn-outline-secondary" onclick="setPreviewDevice('tablet')">
                    <i class="ki-duotone ki-tablet fs-6 me-1"><span class="path1"></span><span class="path2"></span></i>
                    <span class="d-none d-sm-inline">Tablet</span>
                </button>
                <button type="button" class="btn btn-outline btn-outline-secondary" onclick="setPreviewDevice('mobile')">
                    <i class="ki-duotone ki-phone fs-6 me-1"><span class="path1"></span><span class="path2"></span></i>
                    <span class="d-none d-sm-inline">Mobile</span>
                </button>
            </div>

            <!-- Direct Link -->
            <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-light-primary shadow-xs d-inline-flex align-items-center gap-1">
                <i class="ki-duotone ki-exit-right-corner fs-6"><span class="path1"></span><span class="path2"></span></i>
                <span class="d-none d-sm-inline">{{ app()->getLocale() == 'en' ? 'Open Site' : 'Buka Website' }}</span>
            </a>
        </div>
    </div>

    <!-- Live Preview Container Frame -->
    <div class="card shadow-xs border border-gray-200 rounded p-4 bg-light text-center">
        <div id="preview_frame_wrapper" class="mx-auto transition-all duration-300 w-100" style="max-width: 100%; transition: max-width 0.3s ease-in-out;">
            <iframe id="theme_preview_iframe" src="{{ url('/') }}" class="w-100 rounded border border-gray-300 shadow-sm" style="height: 750px; background: #ffffff;"></iframe>
        </div>
    </div>
</div>