<!--begin::Tab Live Form Preview & Code Generator-->
<div class="row g-6 g-xl-9">
    <!--begin::Col - Live Interactive Form Controls-->
    <div class="col-xl-6">
        <div class="card card-flush h-lg-100 border border-primary border-dashed">
            <!--begin::Card Header-->
            <div class="card-header pt-6 pb-4">
                <div class="card-title d-flex align-items-center gap-3">
                    <div class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-eye fs-2 text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column">
                        <h3 class="fw-bold fs-4 text-gray-900 m-0">
                            {{ app()->getLocale() == 'en' ? 'Live Form Dropdown Controls Demo' : 'Demonstrasi Kontrol Pilihan Formulir Interaktif' }}
                        </h3>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Dynamic select controls generated from active reference database items' : 'Kontrol dropdown pilihan dinamis dari database acuan aktif' }}
                        </span>
                    </div>
                </div>
            </div>
            <!--end::Card Header-->

            <!--begin::Card Body-->
            <div class="card-body pt-2">
                <div
                    class="alert alert-dismissible bg-light-primary border border-primary border-dashed d-flex flex-column flex-sm-row p-5 mb-7">
                    <i class="ki-duotone ki-information-5 fs-2hx text-primary me-4 mb-5 mb-sm-0"><span
                            class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <div class="d-flex flex-column">
                        <h5 class="mb-1 text-primary fw-bold">
                            {{ app()->getLocale() == 'en' ? 'Real-Time Database Sync' : 'Sinkronisasi Real-Time' }}
                        </h5>
                        <span class="fs-7 text-gray-700">
                            {{ app()->getLocale() == 'en' ? 'Any changes or additions made in the Category/Items tabs immediately reflect in these form dropdowns.' : 'Setiap perubahan atau penambahan opsi pada Tab Kategori/Item akan langsung tercermin pada pilihan dropdown di bawah ini.' }}
                        </span>
                    </div>
                </div>

                <form class="form" onsubmit="event.preventDefault(); return false;">
                    <!--1. Jenis Kelamin (JENKEL)-->
                    <div class="mb-6">
                        <label class="form-label fw-bold text-gray-800 fs-6">
                            <i class="ki-duotone ki-user text-primary me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Gender (JENKEL)' : 'Jenis Kelamin (JENKEL)' }}
                        </label>
                        <select class="form-select form-select-solid" id="demo_jenkel">
                            <option value="">
                                {{ app()->getLocale() == 'en' ? '-- Select Gender --' : '-- Pilih Jenis Kelamin --' }}
                            </option>
                            @if (isset($previewData['JENKEL']))
                                @foreach ($previewData['JENKEL']->activeItems as $item)
                                    <option value="{{ $item->kode }}">{{ $item->nama }} ({{ $item->kode }})
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!--2. Agama & Kepercayaan (AGAMA)-->
                    <div class="mb-6">
                        <label class="form-label fw-bold text-gray-800 fs-6">
                            <i class="ki-duotone ki-abstract-26 text-info me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Religion (AGAMA)' : 'Agama & Kepercayaan (AGAMA)' }}
                        </label>
                        <select class="form-select form-select-solid" id="demo_agama">
                            <option value="">
                                {{ app()->getLocale() == 'en' ? '-- Select Religion --' : '-- Pilih Agama --' }}
                            </option>
                            @if (isset($previewData['AGAMA']))
                                @foreach ($previewData['AGAMA']->activeItems as $item)
                                    <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!--3. Status Perkawinan (STATUS_PERKAWINAN)-->
                    <div class="mb-6">
                        <label class="form-label fw-bold text-gray-800 fs-6">
                            <i class="ki-duotone ki-heart text-danger me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Marital Status (STATUS_PERKAWINAN)' : 'Status Perkawinan (STATUS_PERKAWINAN)' }}
                        </label>
                        <select class="form-select form-select-solid" id="demo_status_perkawinan">
                            <option value="">
                                {{ app()->getLocale() == 'en' ? '-- Select Marital Status --' : '-- Pilih Status Perkawinan --' }}
                            </option>
                            @if (isset($previewData['STATUS_PERKAWINAN']))
                                @foreach ($previewData['STATUS_PERKAWINAN']->activeItems as $item)
                                    <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!--4. Tingkat Pendidikan (PENDIDIKAN)-->
                    <div class="mb-6">
                        <label class="form-label fw-bold text-gray-800 fs-6">
                            <i class="ki-duotone ki-teacher text-success me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Education Level (PENDIDIKAN)' : 'Tingkat Pendidikan (PENDIDIKAN)' }}
                        </label>
                        <select class="form-select form-select-solid" id="demo_pendidikan">
                            <option value="">
                                {{ app()->getLocale() == 'en' ? '-- Select Education --' : '-- Pilih Tingkat Pendidikan --' }}
                            </option>
                            @if (isset($previewData['PENDIDIKAN']))
                                @foreach ($previewData['PENDIDIKAN']->activeItems as $item)
                                    <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!--5. Golongan Darah (GOLONGAN_DARAH)-->
                    <div class="mb-6">
                        <label class="form-label fw-bold text-gray-800 fs-6">
                            <i class="ki-duotone ki-drop text-danger me-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Blood Type (GOLONGAN_DARAH)' : 'Golongan Darah (GOLONGAN_DARAH)' }}
                        </label>
                        <div class="d-flex flex-wrap gap-3">
                            @if (isset($previewData['GOLONGAN_DARAH']))
                                @foreach ($previewData['GOLONGAN_DARAH']->activeItems as $item)
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="demo_golongan_darah"
                                            value="{{ $item->kode }}" />
                                        <span
                                            class="form-check-label fw-semibold text-gray-800">{{ $item->nama }}</span>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Card Body-->
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Developer Integration Code Snippets-->
    <div class="col-xl-6">
        <div class="card card-flush h-lg-100">
            <!--begin::Card Header-->
            <div class="card-header pt-6 pb-4">
                <div class="card-title d-flex align-items-center gap-3">
                    <div class="symbol symbol-40px symbol-circle bg-light-warning p-2">
                        <i class="ki-duotone ki-code fs-2 text-warning">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column">
                        <h3 class="fw-bold fs-4 text-gray-900 m-0">
                            {{ app()->getLocale() == 'en' ? 'Developer Implementation Code Snippets' : 'Panduan Koding Integration Developer' }}
                        </h3>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'How to query and load reference choices in your Laravel controllers & views' : 'Cara memanggil dan menampilkan data acuan di controller dan blade view Anda' }}
                        </span>
                    </div>
                </div>
            </div>
            <!--end::Card Header-->

            <!--begin::Card Body-->
            <div class="card-body pt-2">
                <!--Snippet 1: Controller Code-->
                <div class="mb-6">
                    <label class="fw-bold text-gray-800 fs-6 mb-2 d-block">
                        1. Querying Reference Items in Controller:
                    </label>
                    <div class="bg-dark p-4 rounded text-white font-monospace fs-7 overflow-auto">
                        <span class="text-info">use</span> App\Models\AppSupport\ReferensiKategori;<br /><br />
                        <span class="text-success">// Fetch active items for JENKEL category</span><br />
                        <span class="text-warning">$jenkelCategory</span> = ReferensiKategori::<span
                            class="text-info">with</span>(<span class="text-danger">'activeItems'</span>)<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;-><span class="text-info">where</span>(<span
                            class="text-danger">'kode'</span>, <span class="text-danger">'JENKEL'</span>)<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;-><span class="text-info">first</span>();<br />
                        <span class="text-warning">$jenkelItems</span> = <span
                            class="text-warning">$jenkelCategory</span> ? <span
                            class="text-warning">$jenkelCategory</span>->activeItems : [];
                    </div>
                </div>

                <!--Snippet 2: AJAX API Endpoint-->
                <div class="mb-6">
                    <label class="fw-bold text-gray-800 fs-6 mb-2 d-block">
                        2. Fetching via AJAX API Route:
                    </label>
                    <div class="bg-dark p-4 rounded text-white font-monospace fs-7 overflow-auto">
                        <span class="text-success">// Route endpoint</span><br />
                        GET /appsupport/referensi/items-by-kategori/JENKEL<br /><br />
                        <span class="text-success">// Returns JSON response:</span><br />
                        {<br />
                        &nbsp;&nbsp;<span class="text-info">"success"</span>: <span
                            class="text-warning">true</span>,<br />
                        &nbsp;&nbsp;<span class="text-info">"data"</span>: [<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;{ <span class="text-info">"kode"</span>: <span
                            class="text-danger">"L"</span>, <span class="text-info">"nama"</span>: <span
                            class="text-danger">"Laki-Laki"</span> },<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;{ <span class="text-info">"kode"</span>: <span
                            class="text-danger">"P"</span>, <span class="text-info">"nama"</span>: <span
                            class="text-danger">"Perempuan"</span> }<br />
                        &nbsp;&nbsp;]<br />
                        }
                    </div>
                </div>

                <!--Snippet 3: Blade Select Render-->
                <div>
                    <label class="fw-bold text-gray-800 fs-6 mb-2 d-block">
                        3. Rendering Dropdown in Blade View:
                    </label>
                    <div class="bg-dark p-4 rounded text-white font-monospace fs-7 overflow-auto">
                        &lt;select class="form-select" name="jenis_kelamin"&gt;<br />
                        &nbsp;&nbsp;&commat;foreach($jenkelItems as $item)<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;option
                        value="&#123;&#123; $item->kode &#125;&#125;"&gt;&#123;&#123; $item->nama
                        &#125;&#125;&lt;/option&gt;<br />
                        &nbsp;&nbsp;&commat;endforeach<br />
                        &lt;/select&gt;
                    </div>
                </div>
            </div>
            <!--end::Card Body-->
        </div>
    </div>
    <!--end::Col-->
</div>
<!--end::Tab Live Form Preview & Code Generator-->
