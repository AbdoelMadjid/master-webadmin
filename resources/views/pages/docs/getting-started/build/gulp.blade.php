@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Content-->
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Notice-->
                    <div class="d-flex align-items-center rounded py-5 px-4 bg-light-info "> <!--begin::Icon-->
                        <div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6"> <svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="text-primary h-80px w-80px position-absolute opacity-5">
                                <path fill="currentColor"
                                    d="M10.2,21.23,4.91,18.17a3.58,3.58,0,0,1-1.8-3.11V8.94a3.58,3.58,0,0,1,1.8-3.11L10.2,2.77a3.62,3.62,0,0,1,3.6,0l5.29,3.06a3.58,3.58,0,0,1,1.8,3.11v6.12a3.58,3.58,0,0,1-1.8,3.11L13.8,21.23A3.62,3.62,0,0,1,10.2,21.23Z" />
                            </svg> <i class="ki-duotone ki-design-frame fs-3x text-info  position-absolute"><span
                                    class="path1"></span><span class="path2"></span></i> </div> <!--end::Icon-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fw-bold fs-6 lh-lg">
                            Metronic's <a class="fw-semibold me-1" href="https://gulpjs.com/" target="_blank">Gulp</a> build
                            tools provide easy package management and production deployment for any type of web application
                            that also comes with powerful asset bundle tools to organize assets structure with custom
                            bundling for production.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="gulp-quick-start" data-kt-scroll-offset="50">
                            <a href="#gulp-quick-start"></a>

                            Gulp Quick Start
                        </h1>
                        <!--end::Heading-->


                        <!--begin::List-->
                        <ol class="py-5">
                            <li class="pt-0 pb-3">Download the latest theme source from the <a
                                    href="https://1.envato.market/EA4JP" class="fw-semibold">Marketplace</a>.</li>

                            <li class="py-3">Download and install Node.js from <a href="https://nodejs.org/en/download/"
                                    class="fw-semibold">Nodejs</a>. The suggested version to install is <code>16.x
                                    LTS</code>.</li>

                            <li class="py-3">
                                Start a command prompt window or terminal and change directory to <code>[unpacked
                                    path]/theme/tools/</code>:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">cd theme/tools/</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Install the latest NPM:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm install --global npm@latest</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Install Yarn via the NPM:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm install --global yarn</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                            class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            Don't forget to run <code>yarn upgrade</code> after every Metronic update is
                                            released in order to receive newly added or updated 3rd-party plugins.
                                            <br />Use <code>npm cache clean --force</code> command, if the installation had
                                            failed at any step. Retry again from beginning once it's done.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>

                            <li class="py-3">
                                Gulp is a toolkit that helps you automate your time-consuming tasks in development workflow.
                                To install gulp globally:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm install --global gulp-cli</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                If you have previously installed a version of gulp globally, remove it to make sure old
                                version doesn't collide with new gulp-cli:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm rm --global gulp</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                Verify that gulp in successfully installed, and version of installed gulp will appear
                                (<code>CLI version: 2.3.0 Local version: 4.0.2</code>):

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">gulp --version</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                            class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            if you encounter a <code>ReferenceError: primordials is not defined</code> error
                                            when running gulp in the terminal, you may have an incompatibility between the
                                            node version and gulp.
                                            Use below command to force install gulp version.<br />
                                            <code>npm install gulp@^4.0.2</code>
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>

                            <li class="py-3">
                                Install the Metronic dependencies in <code>[unpacked path]/theme/tools/</code> folder.

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">yarn</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                            class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            We recommend using <code>Yarn</code> instead <code>NPM</code> for the Metronic
                                            dependencies setup.
                                            <code>Yarn</code> supports nested dependencies resolutions in
                                            <code>package.json</code> where specific version of
                                            sub dependacies are required such as <code>resolutions: { "gulp-dart-sass/sass":
                                                "1.32.13" }</code>.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>

                            <li class="py-3">
                                The below command will compile all the assets(sass, js, media) to <code>assets/</code>
                                folder:
                                State which demo to compile and append at the end of the command. Eg. <code>--demo1</code>

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">gulp --demo1</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                            class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            If you had any error at this step during compilation. Try to update
                                            <code>gulp</code> to the latest version. <code>npm install --global
                                                gulp-cli</code>
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>

                            <li class="py-3">
                                Start the localhost server:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">gulp localhost</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                            class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            Keep the console open. Open this link to run <a
                                                href="http://localhost:8080/demo1/"
                                                target="_blank"><code>http://localhost:8080/demo1/</code></a>. It will take
                                            a few seconds for the build to finish. To stop a localhost environment, press
                                            <code>Ctrl+C</code>.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>
                        </ol>
                        <!--end::List-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="build-options" data-kt-scroll-offset="50">
                            <a href="#build-options"></a>

                            Build Options
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            The build config file is located at <code>tools/gulp.config.json</code> and you can fully
                            customize the build settings to meet your project requirements.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-javascript" style="height:600px"><code class="language-javascript">const gulpConfig = {
    name: &quot;{theme}&quot;,
    desc: &quot;Gulp build config file&quot;,
    version: &quot;{version}&quot;,
    config: {
        debug: false,
        compile: {
            rtl: {
                enabled: false,
                skip: [
                    &quot;select2&quot;,
                    &quot;line-awesome&quot;,
                    &quot;fontawesome5&quot;,
                    &quot;nouislider&quot;,
                    &quot;tinymce&quot;,
                    &quot;sweetalert2&quot;,
                ],
            },
            jsMinify: false,
            cssMinify: false,
            jsSourcemaps: false,
            cssSourcemaps: false,
        },
        path: {
            src: &quot;../../../themes/{theme}/html/src&quot;,
            common_src: &quot;../src&quot;,
            node_modules: &quot;node_modules&quot;,
        },
        dist: [&quot;../../../themes/{theme}/html/assets&quot;],
    },
    build: {
        base: {
            src: {
                styles: [&quot;{$config.path.src}/sass/style.scss&quot;],
                scripts: [
                    &quot;{$config.path.common_src}/js/components/**/*.js&quot;,
                    &quot;{$config.path.common_src}/js/layout/**/*.js&quot;,
                    &quot;{$config.path.src}/js/layout/**/*.js&quot;
                ]
            },
            dist: {
                styles: &quot;{$config.dist}/css/style.bundle.css&quot;,
                scripts: &quot;{$config.dist}/js/scripts.bundle.js&quot;,
            }
        },
        plugins: {
            global: {
                src: {
                    mandatory: {
                        jquery: {
                            scripts: [&quot;{$config.path.node_modules}/jquery/dist/jquery.js&quot;],
                        },
                        popperjs: {
                            scripts: [
                                &quot;{$config.path.node_modules}/@popperjs/core/dist/umd/popper.js&quot;,
                            ],
                        },
                        bootstrap: {
                            scripts: [
                                &quot;{$config.path.node_modules}/bootstrap/dist/js/bootstrap.min.js&quot;,
                            ],
                        },
                        moment: {
                            scripts: [
                                &quot;{$config.path.node_modules}/moment/min/moment-with-locales.min.js&quot;,
                            ],
                        },
                        wnumb: {
                            scripts: [&quot;{$config.path.node_modules}/wnumb/wNumb.js&quot;],
                        },
                    },
                    optional: {
                        axios: {
                            scripts: [
                                &quot;{$config.path.node_modules}/axios/dist/axios.min.js&quot;
                            ],
                        },
                        lozad: {
                            scripts: [
                                &quot;{$config.path.node_modules}/lozad/dist/lozad.min.js&quot;
                            ],
                        },
                        select2: {
                            styles: [
                                &quot;{$config.path.node_modules}/select2/dist/css/select2.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/select2/dist/js/select2.full.js&quot;,
                                &quot;{$config.path.common_src}/js/vendors/plugins/select2.init.js&quot;,
                            ],
                        },
                        flatpickr: {
                            styles: [
                                &quot;{$config.path.node_modules}/flatpickr/dist/flatpickr.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/flatpickr/dist/flatpickr.js&quot;
                            ],
                        },
                        formvalidation: {
                            styles: [
                                &quot;{$config.path.common_src}/plugins/formvalidation/dist/css/formValidation.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/es6-shim/es6-shim.js&quot;,
                                &quot;{$config.path.common_src}/plugins/formvalidation/dist/js/FormValidation.full.min.js&quot;,
                                &quot;{$config.path.common_src}/plugins/formvalidation/dist/js/plugins/Bootstrap5.min.js&quot;
                            ],
                        },
                        bootstrapmaxlength: {
                            &quot;scripts&quot;: [
                                &quot;{$config.path.node_modules}/bootstrap-maxlength/src/bootstrap-maxlength.js&quot;
                            ]
                        },
                        daterangepicker: {
                            styles: [
                                &quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.js&quot;,
                            ],
                        },
                        inputmask: {
                            scripts: [
                                &quot;{$config.path.node_modules}/inputmask/dist/inputmask.js&quot;,
                                &quot;{$config.path.node_modules}/inputmask/dist/bindings/inputmask.binding.js&quot;
                            ]
                        },
                        tinyslider: {
                            styles: [
                                &quot;{$config.path.node_modules}/tiny-slider/dist/tiny-slider.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/tiny-slider/dist/min/tiny-slider.js&quot;,
                            ],
                        },
                        nouislider: {
                            styles: [
                                &quot;{$config.path.node_modules}/nouislider/dist/nouislider.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/nouislider/dist/nouislider.js&quot;,
                            ],
                        },
                        autosize: {
                            scripts: [
                                &quot;{$config.path.node_modules}/autosize/dist/autosize.js&quot;,
                            ],
                        },
                        clipboard: {
                            scripts: [
                                &quot;{$config.path.node_modules}/clipboard/dist/clipboard.min.js&quot;,
                            ],
                        },
                        bootstrapmultiselectsplitter: {
                            scripts: [
                                &quot;{$config.path.node_modules}/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js&quot;,
                            ],
                        },
                        smoothscroll: {
                            scripts: [
                                &quot;{$config.path.node_modules}/smooth-scroll/dist/smooth-scroll.js&quot;,
                            ],
                        },
                        dropzone: {
                            styles: [
                                &quot;{$config.path.node_modules}/dropzone/dist/dropzone.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/dropzone/dist/dropzone.js&quot;,
                                &quot;{$config.path.common_src}/js/vendors/plugins/dropzone.init.js&quot;,
                            ],
                        },
                        quil: {
                            styles: [&quot;{$config.path.node_modules}/quill/dist/quill.snow.css&quot;],
                            scripts: [&quot;{$config.path.node_modules}/quill/dist/quill.js&quot;],
                        },
                        tagify: {
                            styles: [
                                &quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.polyfills.min.js&quot;,
                                &quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.min.js&quot;,
                            ],
                        },
                        toastr: {
                            styles: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.css&quot;],
                            scripts: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.min.js&quot;],
                        },
                        apexcharts: {
                            styles: [
                                &quot;{$config.path.node_modules}/apexcharts/dist/apexcharts.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/apexcharts/dist/apexcharts.min.js&quot;,
                            ],
                        },
                        chartjs: {
                            scripts: [&quot;{$config.path.node_modules}/chart.js/dist/chart.js&quot;],
                        },
                        countupjs: {
                            scripts: [
                                &quot;{$config.path.node_modules}/countup.js/dist/countUp.umd.js&quot;,
                            ],
                        },
                        sweetalert2: {
                            styles: [
                                &quot;{$config.path.node_modules}/sweetalert2/dist/sweetalert2.css&quot;,
                            ],
                            scripts: [
                                &quot;{$config.path.node_modules}/es6-promise-polyfill/promise.min.js&quot;,
                                &quot;{$config.path.node_modules}/sweetalert2/dist/sweetalert2.min.js&quot;,
                                &quot;{$config.path.common_src}/js/vendors/plugins/sweetalert2.init.js&quot;,
                            ],
                        },
                        lineawesome: {
                            styles: [
                                &quot;{$config.path.node_modules}/line-awesome/dist/line-awesome/css/line-awesome.css&quot;,
                            ],
                            fonts: [
                                &quot;{$config.path.node_modules}/line-awesome/dist/line-awesome/fonts/**&quot;,
                            ],
                        },
                        bootstrapicons: {
                            styles: [
                                &quot;{$config.path.node_modules}/bootstrap-icons/font/bootstrap-icons.css&quot;,
                            ],
                            fonts: [
                                &quot;{$config.path.node_modules}/bootstrap-icons/font/fonts/**&quot;,
                            ],
                        },
                        fortawesome: {
                            styles: [
                                &quot;{$config.path.node_modules}/@fortawesome/fontawesome-free/css/all.min.css&quot;,
                            ],
                            fonts: [
                                &quot;{$config.path.node_modules}/@fortawesome/fontawesome-free/webfonts/**&quot;,
                            ],
                        },
                        fonticon: {
                            styles: [
                                &quot;{$config.path.common_src}/plugins/fonticon/fonticon.css&quot;,
                            ],
                            fonts: [
                                &quot;{$config.path.common_src}/plugins/fonticon/**&quot;,
                            ],
                        },
                    },
                    override: {
                        styles: [&quot;{$config.path.src}/sass/plugins.scss&quot;],
                    },
                },
                dist: {
                    styles: &quot;{$config.dist}/plugins/global/plugins.bundle.css&quot;,
                    scripts: &quot;{$config.dist}/plugins/global/plugins.bundle.js&quot;,
                    images: &quot;{$config.dist}/plugins/global/images&quot;,
                    fonts: &quot;{$config.dist}/plugins/global/fonts&quot;,
                },
            },
            custom: {
                draggable: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/draggable.bundle.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/draggable.bundle.legacy.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/draggable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/sortable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/droppable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/swappable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/plugins.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/plugins/collidable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/plugins/resize-mirror.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/plugins/snappable.js&quot;,
                            &quot;{$config.path.node_modules}/@shopify/draggable/lib/plugins/swap-animation.js&quot;,
                        ],
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/draggable/draggable.bundle.js&quot;,
                    },
                },
                prismjs: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/prism-themes/themes/prism-shades-of-purple.css&quot;,
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/prismjs/prism.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-markup.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-markup-templating.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-bash.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-javascript.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-scss.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-css.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-php.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-php-extras.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-python.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/components/prism-aspnet.js&quot;,
                            &quot;{$config.path.node_modules}/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.js&quot;,
                            &quot;{$config.path.common_src}/js/vendors/plugins/prism.init.js&quot;,
                        ],
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/prismjs/prismjs.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/prismjs/prismjs.bundle.js&quot;,
                    },
                },
                datatables: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/datatables.net-bs5/css/dataTables.bootstrap5.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-scroller-bs5/css/scroller.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-select-bs5/css/select.bootstrap5.min.css&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-datetime/dist/dataTables.dateTime.min.css&quot;,
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/datatables.net/js/jquery.dataTables.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-bs5/js/dataTables.bootstrap5.js&quot;,
                            &quot;{$config.path.common_src}/js/vendors/plugins/datatables.init.js&quot;,
                            &quot;{$config.path.node_modules}/jszip/dist/jszip.min.js&quot;,
                            &quot;{$config.path.node_modules}/pdfmake/build/pdfmake.min.js&quot;,
                            &quot;{$config.path.node_modules}/pdfmake/build/vfs_fonts.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons/js/dataTables.buttons.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.colVis.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.flash.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.html5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-buttons/js/buttons.print.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-colreorder/js/dataTables.colReorder.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-responsive/js/dataTables.responsive.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-rowgroup/js/dataTables.rowGroup.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-rowgroup-bs5/js/rowGroup.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-rowreorder/js/dataTables.rowReorder.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-scroller/js/dataTables.scroller.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-scroller-bs5/js/dataTables.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-select/js/dataTables.select.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-select-bs5/js/dataTables.bootstrap5.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-datetime/dist/dataTables.dateTime.min.js&quot;,
                            &quot;{$config.path.node_modules}/datatables.net-plugins/features/conditionalPaging/dataTables.conditionalPaging.js&quot;,
                        ]
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/datatables/datatables.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/datatables/datatables.bundle.js&quot;,
                    }
                },
                leaflet: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/leaflet/dist/leaflet.css&quot;,
                            &quot;{$config.path.node_modules}/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css&quot;,
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/leaflet/dist/leaflet.js&quot;,
                            &quot;{$config.path.node_modules}/esri-leaflet/dist/esri-leaflet.js&quot;,
                            &quot;{$config.path.node_modules}/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.js&quot;,
                        ],
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/leaflet/leaflet.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/leaflet/leaflet.bundle.js&quot;,
                    }
                },
                fslightbox: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/fslightbox/index.js&quot;,
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/fslightbox/fslightbox.bundle.js&quot;,
                    }
                },
                typedjs: {
                    src: {
                        scripts: [&quot;{$config.path.node_modules}/typed.js/lib/typed.js&quot;],
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/typedjs/typedjs.bundle.js&quot;,
                    }
                },
                fullcalendar: {
                    src: {
                        styles: [&quot;{$config.path.node_modules}/fullcalendar/main.min.css&quot;],
                        scripts: [
                            &quot;{$config.path.node_modules}/fullcalendar/main.js&quot;,
                            &quot;{$config.path.node_modules}/fullcalendar/locales-all.min.js&quot;,
                        ],
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/fullcalendar/fullcalendar.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/fullcalendar/fullcalendar.bundle.js&quot;,
                    },
                },
                tinymcejs: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/tinymce/tinymce.min.js&quot;,
                            &quot;{$config.path.node_modules}/tinymce/themes/silver/theme.js&quot;,
                            &quot;{$config.path.node_modules}/tinymce/themes/mobile/theme.js&quot;,
                            &quot;{$config.path.node_modules}/tinymce/icons/default/icons.js&quot;,
                            &quot;{$config.path.node_modules}/tinymce/plugins/**/plugin.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/tinymce/tinymce.bundle.js&quot;,
                    }
                },
                ckeditorclassic: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@ckeditor/ckeditor5-build-classic/build/ckeditor.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/ckeditor/ckeditor-classic.bundle.js&quot;
                    }
                },
                ckeditorinline: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@ckeditor/ckeditor5-build-inline/build/ckeditor.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/ckeditor/ckeditor-inline.bundle.js&quot;
                    }
                },
                ckeditorballoon: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@ckeditor/ckeditor5-build-balloon/build/ckeditor.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/ckeditor/ckeditor-balloon.bundle.js&quot;
                    }
                },
                ckeditorballoonblock: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@ckeditor/ckeditor5-build-balloon-block/build/ckeditor.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js&quot;
                    }
                },
                ckeditordecoupleddocument: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/@ckeditor/ckeditor5-build-decoupled-document/build/ckeditor.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/ckeditor/ckeditor-document.bundle.js&quot;
                    }
                },
                cropperjs: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/cropperjs/dist/cropper.css&quot;
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/cropperjs/dist/cropper.js&quot;
                        ]
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/cropper/cropper.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/cropper/cropper.bundle.js&quot;
                    }
                },
                jkanban: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/jkanban/dist/jkanban.min.css&quot;
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/jkanban/dist/jkanban.min.js&quot;
                        ]
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/jkanban/jkanban.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/jkanban/jkanban.bundle.js&quot;
                    }
                },
                flot: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/flot/dist/es5/jquery.flot.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.resize.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.categories.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.pie.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.stack.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.crosshair.js&quot;,
                            &quot;{$config.path.node_modules}/flot/source/jquery.flot.axislabels.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/flotcharts/flotcharts.bundle.js&quot;
                    }
                },
                vistimeline: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/vis-timeline/dist/vis-timeline-graph2d.css&quot;,
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/vis-timeline/standalone/umd/vis-timeline-graph2d.min.js&quot;,
                            &quot;{$config.path.node_modules}/handlebars/dist/handlebars.min.js&quot;,
                        ],
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/vis-timeline/vis-timeline.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/vis-timeline/vis-timeline.bundle.js&quot;
                    },
                },
                jstree: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/jstree/dist/themes/default/style.css&quot;
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/jstree/dist/jstree.js&quot;
                        ],
                        images: [
                            &quot;{$config.path.common_src}/assets/media/plugins/jstree/32px.png&quot;,
                            &quot;{$config.path.node_modules}/jstree/dist/themes/default/throbber.gif&quot;
                        ]
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/jstree/jstree.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/jstree/jstree.bundle.js&quot;,
                        images: &quot;{$config.dist}/plugins/custom/jstree/images/jstree&quot;
                    }
                },
                formrepeater: {
                    src: {
                        scripts: [
                            &quot;{$config.path.node_modules}/jquery.repeater/src/lib.js&quot;,
                            &quot;{$config.path.node_modules}/jquery.repeater/src/jquery.input.js&quot;,
                            &quot;{$config.path.node_modules}/jquery.repeater/src/repeater.js&quot;
                        ]
                    },
                    dist: {
                        scripts: &quot;{$config.dist}/plugins/custom/formrepeater/formrepeater.bundle.js&quot;,
                    }
                },
                cookiealert: {
                    src: {
                        styles: [
                            &quot;{$config.path.node_modules}/bootstrap-cookie-alert/cookiealert.css&quot;
                        ],
                        scripts: [
                            &quot;{$config.path.node_modules}/bootstrap-cookie-alert/cookiealert.js&quot;
                        ]
                    },
                    dist: {
                        styles: &quot;{$config.dist}/plugins/custom/cookiealert/cookiealert.bundle.css&quot;,
                        scripts: &quot;{$config.dist}/plugins/custom/cookiealert/cookiealert.bundle.js&quot;,
                    }
                }
            }
        },
        widgets: {
            src: {
                scripts: [
                    &quot;{$config.path.common_src}/js/widgets/**/*.js&quot;
                ]
            },
            dist: {
                scripts: &quot;{$config.dist}/js/widgets.bundle.js&quot;,
            }
        },
        custom: {
            src: {
                styles: [
                    &quot;{$config.path.common_src}/sass/custom/**/*.scss&quot;,
                    &quot;{$config.path.src}/sass/custom/**/*.scss&quot;,
                ],
                scripts: [
                    &quot;{$config.path.common_src}/js/custom/**/*.js&quot;,
                    &quot;{$config.path.src}/js/custom/**/*.js&quot;,
                ],
            },
            dist: {
                styles: &quot;{$config.dist}/css/custom/&quot;,
                scripts: &quot;{$config.dist}/js/custom/&quot;,
            },
        },
        media: {
            src: {
                media: [
                    &quot;{$config.path.common_src}/assets/media/**/*.*&quot;,
                    &quot;{$config.path.src}/assets/media/**/*.*&quot;,
                ],
            },
            dist: {
                media: &quot;{$config.dist}/assets/media/&quot;,
            },
        },
        misc: {
            src: {
                styles: [
                    &quot;{$config.path.node_modules}/tinymce/skins/**/*.css&quot;
                ],
                media: [
                    &quot;{$config.path.node_modules}/tiny-slider/dist/sourcemaps/tiny-slider.css.map&quot;,
                ],
            },
            dist: {
                styles: &quot;{$config.dist}/plugins/custom/tinymce/skins/&quot;,
                media: &quot;{$config.dist}/plugins/global/sourcemaps/&quot;,
            }
        }
    }
};

export {
    gulpConfig
};</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Alert-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    <h4 class="text-gray-900 fs-4 mb-2 fw-bold">Required Core CSS and JS files</h4>
                                    The core CSS and JS files defined under <code>build.plugins.base.src.mandatory</code>
                                    and <code>build.theme.base</code> are required in order to have the theme's basic
                                    functionality up. However the assets defined
                                    <code>build.plugins.base.src.optional</code> are optional.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Alert-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-borderless align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr>
                                            <th class="fs-4 fw-bold text-gray-900 ps-6 py-6" colspan="3">Gulp Build
                                                Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-gray-600 align-middle">
                                            <th class="fw-semibold ps-6 py-6" scope="col">Field</th>
                                            <th class="fw-semibold text-gray-600 py-6" scope="col">Type</th>
                                            <th class="fw-semibold text-gray-600 ps-6 py-6" scope="col">Description
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.debug</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable debug console log.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.compile.rtl.enabled</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable compilation with RTL version of CSS along
                                                with default LTR CSS.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.compile.rtl.skip</code></td>
                                            <td><code>array</code></td>
                                            <td class="ps-6">An array of plugin to be skipped from being compile as RTL.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.compile.jsMinify</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable output Javascript minify.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.compile.cssMinify</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable output CSS minify.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-5 ps-6"><code>config.compile.jsSourcemaps</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable output Javascript with sourcemaps.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.compile.cssSourcemaps</code></td>
                                            <td><code>boolean</code></td>
                                            <td class="ps-6">Enable/disable output CSS with sourcemaps.</td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>config.dist</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                <code>dist</code> &nbsp; stands for
                                                <code>distributable</code> &nbsp; and refers to the directories where the
                                                minified and bundled assets will be stored for production uses.
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Block-->

                                    <!--begin::Block-->
                                    <thead>
                                        <tr>
                                            <th class="fs-4 fw-semibold text-gray-900 ps-6 py-5" colspan="3">Build
                                                Items</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.base</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                This object specifies the global assets of the demo to be added into the
                                                global css and js demo bundles.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.plugins.global</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                This object specifies required 3rd party resources to be added into the
                                                global css and js plugins bundles.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.plugins.custom</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                This object specifies global 3rd party resources to be added into the custom
                                                css and js plugins bundles.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.custom</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                This object specifies custom assets that are included on demand.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.media</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                Media folder.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 ps-6"><code>build.api</code></td>
                                            <td><code>object</code></td>
                                            <td class="ps-6">
                                                Server side scripts used for examples with remote data source(e.g: ajax
                                                datatables, dropdown list, quick search results, etc).
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Block-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="build-task" data-kt-scroll-offset="50">
                            <a href="#build-task"></a>

                            Build Task
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Notice-->
                        <div class="py-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                    class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i> <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    Update the <code class="me-0">Node.js</code>, global <code>npm</code> and
                                    <code>yarn</code> to the latest versions for any errors related to
                                    <code>node-sass</code>. <br />

                                    If the <code>gulp</code> command is not working, try to remove
                                    <code>tools/node_modules</code> folder, and reinstall dependencies using
                                    <code>yarn</code>.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Launch your terminal and change its current directory to the project's tools folder where
                                the build files are located. All commands below must be run in this tools folder.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">cd theme/tools/</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                For the first time, run the command below to install the npm dependencies defined in
                                <code>/tools/package.json</code> (if you haven't done it) :
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">yarn</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                After every modification in <code>[demo]/src/</code>, run the below task to compile the
                                assets as defined in <code>/tools/gulp.config.json</code>:
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Provide parameter <code>--rtl</code> to the gulp task. This command will disable
                                RTL CSS from generating. If this param does not exist, by default, RTL CSS will be
                                generated.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --rtl --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Provide parameter <code>--js</code> to the gulp task. This command will generate javascript
                                assets only.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --js --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Provide parameter <code>--sass</code> to the gulp task. This command will generate SCSS,
                                SASS and CSS assets only.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --sass --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Provide parameter <code>--media</code> to the gulp task. This command will generate all
                                media, fonts, images, etc. assets only.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --media --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Provide parameter <code>--prod</code> to the gulp task. This command will minify all the JS
                                and CSS.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp --prod --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="">
                                The customization should be done in <code>theme/src/</code> folder. After compilation refer
                                to the destination folder
                                <code>theme/</code>.
                                The bellow command is to start a real-time watcher. This task watches the SCSS and
                                Javascript files and automatically recompile whenever the source files are changed.
                                You also can run watcher separately for JS and SCSS.
                            </p>
                            <p class="mb-0">

                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp watch --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="localhost" data-kt-scroll-offset="50">
                            <a href="#localhost"></a>

                            Localhost
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <p class="mb-0">
                                Metronic uses <a href="https://www.npmjs.com/package/gulp-connect" target="_blank"
                                    class="fw-bold me-1">Gulp-connect</a> plugin use to run a simple webserver for quick
                                browsing the HTML templatest:
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">gulp localhost</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <p class="mb-0">
                                Keep the console open. Open this link to run <a href="http://localhost:8080/demo1/"
                                    target="_blank"><code>http://localhost:8080/demo1/</code></a>.
                                The default running port is <code>8080</code> and in case, this port being used by other
                                application, it can be changed in
                                <code>tools/gulp/watch.js</code>
                            </p>
                            <!--end::Block-->

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">connect.server({
  root: &#039;../&#039;,
  livereload: true,
  port: 8081,
});</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->

            <!--begin::Sidebar wrapper-->
            <div class="ms-7 flex-row-auto w-lg-250px">
                <!--begin::Sidebar nav-->
                <div class="card card-flush d-none d-lg-flex position-sticky" style="top: 25px;" data-kt-sticky="true" data-kt-sticky-name="sidebar-navs"
                    data-kt-sticky-offset="{default: false, lg: 250}" data-kt-sticky-width="250px"
                    data-kt-sticky-animation="false" data-kt-sticky-left="auto" data-kt-sticky-top="25px"
                    data-kt-sticky-zindex="5">
                    <!--begin::Card body-->
                    <div class="card-body px-0 px-6 py-6 min-h-300px">
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#gulp-quick-start" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Gulp Quick Start</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#build-options" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Build Options</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#build-task" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Build Task</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#localhost" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Localhost</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png"
                                alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="<b>License Reminder</b>"
                                data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." />
                        </a>

                        <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&utm_content=mega-bundle"
                            class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/mega-bundle.png"
                                alt="buy mega bundle" class="mw-100 rounded-3" />
                        </a>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Sidebar nav-->
            </div>
            <!--end::Sidebar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


