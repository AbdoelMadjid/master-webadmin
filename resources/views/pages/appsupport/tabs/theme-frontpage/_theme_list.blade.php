<div class="d-flex flex-column gap-6">
    <!-- Top Action Bar -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 bg-white p-5 rounded border border-gray-200 shadow-2xs">
        <div class="d-flex align-items-center gap-3">
            <div class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                <i class="{{ formatIconClass('ki-duotone ki-element-11') }} text-primary fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-element-11', 4); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </div>
            <div>
                <h3 class="text-gray-900 fw-bold fs-4 m-0">
                    {{ app()->getLocale() == 'en' ? 'Registered Frontpage Themes' : 'Daftar Tema Beranda Terdaftar' }}
                </h3>
                <span class="text-muted fs-7">
                    {{ app()->getLocale() == 'en' ? 'Select and activate your desired frontend landing page layout.' : 'Pilih dan aktifkan layout tampilan utama beranda publik yang diinginkan.' }}
                </span>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 ms-auto">
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Theme' : 'Tambah Tema Baru' }}">
                <button type="button" class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4" onclick="openAddThemeModal()">
                    <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                    <span class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Theme' : 'Tambah Tema' }}</span>
                </button>
            </span>
        </div>
    </div>

    <!-- Theme Cards Grid -->
    <div class="row g-6">
        @foreach($themes as $theme)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card h-100 shadow-xs border {{ $theme->is_active ? 'border-primary border-2' : 'border-gray-200' }} rounded position-relative">
                    @if($theme->is_active)
                        <div class="position-absolute top-0 end-0 m-3 z-index-2">
                            <span class="badge badge-primary fw-bold px-3 py-2 fs-8 shadow-xs d-inline-flex align-items-center gap-1">
                                <i class="ki-duotone ki-check-circle fs-6 text-white"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Active Theme' : 'Tema Aktif' }}
                            </span>
                        </div>
                    @endif

                    <div class="card-body p-6 d-flex flex-column justify-content-between">
                        <div>
                            <!-- Header & Icon Badge -->
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="symbol symbol-50px symbol-circle {{ $theme->is_active ? 'bg-light-primary' : 'bg-light' }} p-2">
                                    <i class="ki-duotone ki-element-11 {{ $theme->is_active ? 'text-primary' : 'text-gray-600' }} fs-2x">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                    </i>
                                </div>
                                <div class="overflow-hidden">
                                    <h4 class="text-gray-900 fw-bold fs-5 m-0 text-truncate">
                                        {{ app()->getLocale() == 'en' && !empty($theme->name_en) ? $theme->name_en : $theme->name }}
                                    </h4>
                                    <span class="badge badge-light-secondary text-gray-700 fs-9 fw-bold mt-1">
                                        v{{ $theme->version ?? '1.0.0' }} &bull; {{ $theme->author ?? 'System' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Description -->
                            <p class="text-gray-600 fs-7 mb-4 line-clamp-2">
                                {{ app()->getLocale() == 'en' && !empty($theme->description_en) ? $theme->description_en : $theme->description ?? 'No description provided.' }}
                            </p>

                            <!-- Theme Details Box -->
                            <div class="bg-light p-3 rounded mb-4 border border-dashed border-gray-300 fs-8 text-gray-700">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-semibold">Slug:</span>
                                    <code class="text-primary fw-bold">{{ $theme->slug }}</code>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">View Path:</span>
                                    <code>{{ $theme->view_path }}</code>
                                </div>
                            </div>

                            <!-- Feature Capabilities -->
                            <div class="mb-4">
                                <span class="fs-8 text-muted fw-bold d-block mb-2 text-uppercase">
                                    {{ app()->getLocale() == 'en' ? 'Supported Integrations:' : 'Integrasi Didukung:' }}
                                </span>
                                <div class="d-flex flex-wrap gap-1">
                                    @php
                                        $supports = is_array($theme->supports) ? $theme->supports : [];
                                    @endphp
                                    @if(in_array('bilingual_support', $supports))
                                        <span class="badge badge-light-success fs-9">🌐 Bilingual</span>
                                    @endif
                                    @if(in_array('top_navigation', $supports))
                                        <span class="badge badge-light-info fs-9">Top Nav</span>
                                    @endif
                                    @if(in_array('main_navigation', $supports))
                                        <span class="badge badge-light-primary fs-9">Main Nav</span>
                                    @endif
                                    @if(in_array('footer_navigation', $supports))
                                        <span class="badge badge-light-dark fs-9">Footer Nav</span>
                                    @endif
                                    @if(in_array('slide_banner', $supports))
                                        <span class="badge badge-light-warning fs-9">Slide Banner</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Card Action Footer -->
                        <div class="d-flex align-items-center justify-content-between pt-4 border-top border-gray-200 mt-auto gap-2">
                            <div>
                                @if(!$theme->is_active)
                                    <button type="button" class="btn btn-sm btn-primary shadow-xs d-inline-flex align-items-center gap-1 fs-8 fw-bold" onclick="activateTheme({{ $theme->id }}, '{{ addslashes($theme->name) }}')">
                                        <i class="ki-duotone ki-check fs-6 text-white"><span class="path1"></span><span class="path2"></span></i>
                                        {{ app()->getLocale() == 'en' ? 'Set Active' : 'Aktifkan Tema' }}
                                    </button>
                                @else
                                    <span class="badge badge-light-success fs-8 fw-bold px-3 py-2">
                                        <i class="ki-duotone ki-check-circle text-success fs-6 me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ app()->getLocale() == 'en' ? 'Currently Active' : 'Sedang Aktif' }}
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex align-items-center gap-1">
                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Theme Meta' : 'Edit Meta Tema' }}">
                                    <button type="button" class="btn btn-icon btn-sm btn-light-warning h-30px w-30px" onclick='openEditThemeModal(@json($theme))'>
                                        <i class="ki-duotone ki-pencil fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                </span>

                                @if(!$theme->is_active)
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Delete Theme' : 'Hapus Tema' }}">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-danger h-30px w-30px" onclick="deleteTheme({{ $theme->id }}, '{{ addslashes($theme->name) }}')">
                                            <i class="ki-duotone ki-trash fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        </button>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal Form Create/Edit Theme -->
<div class="modal fade" id="kt_modal_theme_form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold modal-title" id="theme_modal_title">
                    {{ app()->getLocale() == 'en' ? 'Add Frontpage Theme' : 'Tambah Tema Beranda' }}
                </h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="theme_form" onsubmit="saveThemeForm(event)">
                @csrf
                <input type="hidden" id="theme_id" name="id" value="" />
                <input type="hidden" id="_method_field" name="_method" value="POST" />

                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Theme Name (ID)' : 'Nama Tema (ID)' }}</label>
                            <input type="text" class="form-control form-control-solid" id="theme_name" name="name" required placeholder="Metronic 8 Landing" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Theme Name (EN)' : 'Nama Tema (EN)' }}</label>
                            <input type="text" class="form-control form-control-solid" id="theme_name_en" name="name_en" placeholder="Metronic 8 Landing Theme" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">Slug</label>
                            <input type="text" class="form-control form-control-solid" id="theme_slug" name="slug" required placeholder="default" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">View Path</label>
                            <input type="text" class="form-control form-control-solid" id="theme_view_path" name="view_path" required placeholder="theme.default" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="fs-6 fw-semibold mb-2">Author</label>
                            <input type="text" class="form-control form-control-solid" id="theme_author" name="author" placeholder="KeenThemes" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="fs-6 fw-semibold mb-2">Version</label>
                            <input type="text" class="form-control form-control-solid" id="theme_version" name="version" placeholder="8.2.5" />
                        </div>
                        <div class="col-12">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Description (ID)' : 'Deskripsi (ID)' }}</label>
                            <textarea class="form-control form-control-solid" id="theme_description" name="description" rows="2" placeholder="Deskripsi tema..."></textarea>
                        </div>
                        <div class="col-12">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Description (EN)' : 'Deskripsi (EN)' }}</label>
                            <textarea class="form-control form-control-solid" id="theme_description_en" name="description_en" rows="2" placeholder="Theme description..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_submit_theme">
                        <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Theme' : 'Simpan Tema' }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>