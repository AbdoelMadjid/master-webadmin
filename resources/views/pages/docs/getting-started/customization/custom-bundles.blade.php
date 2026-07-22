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
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            By default all common plugins are bundled togather in the global bundle
                            <code>assets/plugins/global/plugins.bundle.css</code> and
                            <code>assets/plugins/global/plugins.bundle.js</code> files and included in all pages for global
                            usage.

                            This approach allows to load all common plugins at once and keeping them in the browser cache
                            rather than loading each plugin
                            separately to significantly reduce overall page loading time.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="custom-build" data-kt-scroll-offset="50">
                            <a href="#custom-build"></a>

                            Custom Build
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            However, in certain projects, loading each plugin separately might be required.
                            For such cases you can use the below Gulp config instead of <code>tools/gulp.config.js</code>
                            in order to bundle each plugin separately and include them in pages on demand:
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
				axios: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/axios/dist/axios.min.js&quot;
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/axios/axios.bundle.js&quot;
					}
				},
				lozad: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/lozad/dist/lozad.min.js&quot;
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/lozad/lozad.bundle.js&quot;
					}
				},
				select2: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/select2/dist/css/select2.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/select2/dist/js/select2.full.js&quot;,
							&quot;{$config.path.common_src}/js/vendors/plugins/select2.init.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/select2/select2.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/select2/select2.bundle.css&quot;,
					}
				},
				flatpickr: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/flatpickr/dist/flatpickr.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/flatpickr/dist/flatpickr.js&quot;
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/flatpickr/flatpickr.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/flatpickr/flatpickr.bundle.css&quot;,
					}
				},
				formvalidation: {
					src: {
						styles: [
							&quot;{$config.path.common_src}/plugins/formvalidation/dist/css/formValidation.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/es6-shim/es6-shim.js&quot;,
							&quot;{$config.path.common_src}/plugins/formvalidation/dist/js/FormValidation.full.min.js&quot;,
							&quot;{$config.path.common_src}/plugins/formvalidation/dist/js/plugins/Bootstrap5.min.js&quot;
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/formvalidation/formvalidation.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/formvalidation/formvalidation.bundle.css&quot;,
					}
				},
				bootstrapmaxlength: {
					src: {
						&quot;scripts&quot;: [
							&quot;{$config.path.node_modules}/bootstrap-maxlength/src/bootstrap-maxlength.js&quot;
						]
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/bootstrap-maxlength/bootstrap-maxlength.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/bootstrap-maxlength/bootstrap-maxlength.bundle.css&quot;,
					}
				},
				daterangepicker: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/daterangepicker/daterangepicker.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/daterangepicker/daterangepicker.bundle.css&quot;,
					}
				},
				inputmask: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/inputmask/dist/inputmask.js&quot;,
							&quot;{$config.path.node_modules}/inputmask/dist/bindings/inputmask.binding.js&quot;
						]
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/inputmask/inputmask.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/inputmask/inputmask.bundle.css&quot;,
					}
				},
				tinyslider: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/tiny-slider/dist/tiny-slider.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/tiny-slider/dist/min/tiny-slider.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/tiny-slider/tiny-slider.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/tiny-slider/tiny-slider.bundle.css&quot;,
					}
				},
				nouislider: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/nouislider/dist/nouislider.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/nouislider/dist/nouislider.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/nouislider/nouislider.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/nouislider/nouislider.bundle.css&quot;,
					}
				},
				autosize: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/autosize/dist/autosize.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/autosize/autosize.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/autosize/autosize.bundle.css&quot;,
					}
				},
				clipboard: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/clipboard/dist/clipboard.min.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/clipboard/clipboard.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/clipboard/clipboard.bundle.css&quot;,
					}
				},
				bootstrapmultiselectsplitter: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.bundle.css&quot;,
					}
				},
				smoothscroll: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/smooth-scroll/dist/smooth-scroll.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/smooth-scroll/smooth-scroll.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/smooth-scroll/smooth-scroll.bundle.css&quot;,
					}
				},
				dropzone: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/dropzone/dist/dropzone.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/dropzone/dist/dropzone.js&quot;,
							&quot;{$config.path.common_src}/js/vendors/plugins/dropzone.init.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/dropzone/dropzone.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/dropzone/dropzone.bundle.css&quot;,
					}
				},
				quil: {
					src: {
						styles: [&quot;{$config.path.node_modules}/quill/dist/quill.snow.css&quot;],
						scripts: [&quot;{$config.path.node_modules}/quill/dist/quill.js&quot;],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/quil/quil.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/quil/quil.bundle.css&quot;,
					}
				},
				tagify: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.polyfills.min.js&quot;,
							&quot;{$config.path.node_modules}/@yaireo/tagify/dist/tagify.min.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/tagify/tagify.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/tagify/tagify.bundle.css&quot;,
					}
				},
				toastr: {
					src: {
						styles: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.css&quot;],
						scripts: [&quot;{$config.path.common_src}/plugins/toastr/build/toastr.min.js&quot;],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/toastr/toastr.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/toastr/toastr.bundle.css&quot;,
					}
				},
				apexcharts: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/apexcharts/dist/apexcharts.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/apexcharts/dist/apexcharts.min.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/apexcharts/apexcharts.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/apexcharts/apexcharts.bundle.css&quot;,
					}
				},
				chartjs: {
					src: {
						scripts: [&quot;{$config.path.node_modules}/chart.js/dist/chart.js&quot;],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/chartjs/chartjs.bundle.js&quot;
					}
				},
				countupjs: {
					src: {
						scripts: [
							&quot;{$config.path.node_modules}/countup.js/dist/countUp.umd.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/countupjs/countupjs.bundle.js&quot;,
					}
				},
				sweetalert2: {
					src: {
						styles: [
							&quot;{$config.path.node_modules}/sweetalert2/dist/sweetalert2.css&quot;,
						],
						scripts: [
							&quot;{$config.path.node_modules}/es6-promise-polyfill/promise.min.js&quot;,
							&quot;{$config.path.node_modules}/sweetalert2/dist/sweetalert2.min.js&quot;,
							&quot;{$config.path.common_src}/js/vendors/plugins/sweetalert2.init.js&quot;,
						],
					},
					dist: {
						scripts: &quot;{$config.dist}/plugins/custom/sweetalert2/sweetalert2.bundle.js&quot;,
						styles: &quot;{$config.dist}/plugins/custom/sweetalert2/sweetalert2.bundle.css&quot;,
					}
				},
				&quot;line-awesome&quot;: {
                    styles: [
                        &quot;{$config.path.node_modules}/line-awesome/dist/line-awesome/css/line-awesome.css&quot;,
                    ],
                    fonts: [
                        &quot;{$config.path.node_modules}/line-awesome/dist/line-awesome/fonts/**&quot;,
                    ],
                },
                &quot;bootstrap-icons&quot;: {
                    styles: [
                        &quot;{$config.path.node_modules}/bootstrap-icons/font/bootstrap-icons.css&quot;,
                    ],
                    fonts: [
                        &quot;{$config.path.node_modules}/bootstrap-icons/font/fonts/**&quot;,
                    ],
                },
                &quot;@fortawesome&quot;: {
                    styles: [
                        &quot;{$config.path.node_modules}/@fortawesome/fontawesome-free/css/all.min.css&quot;,
                    ],
                    fonts: [
                        &quot;{$config.path.node_modules}/@fortawesome/fontawesome-free/webfonts/**&quot;,
                    ],
                },
				fonticon: {
					src: {
						styles: [
							&quot;{$config.path.common_src}/plugins/fonticon/fonticon.css&quot;,
						],
						fonts: [
							&quot;{$config.path.common_src}/plugins/fonticon/**&quot;,
						],
					},
					dist: {
						styles: &quot;{$config.dist}/plugins/custom/fonticon/fonticon.bundle.css&quot;,
						fonts: &quot;{$config.dist}/plugins/custom/fonticon/fonts&quot;,
					}
				},
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
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            After making the above changes in <code>tools/gulp.config.js</code> you will need to recompile
                            the <code>assets</code>
                            folder using the <a href="/html/metronic/docs/getting-started/customization/custom-bundles">Gulp
                                Build</a> and
                            include required plugins separately under <code>Vendors Javascript</code> and <code>Vendor
                                Stylesheets</code> sections as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;!--begin::Vendor Stylesheets(used for this page only)--&gt;
        &lt;link href=&quot;assets/plugins/custom/fullcalendar/fullcalendar.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;link href=&quot;assets/plugins/custom/datatables/datatables.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;!--end::Vendor Stylesheets--&gt;

        &lt;!--begin::Global Stylesheets Bundle(mandatory for all pages)--&gt;
        &lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;link href=&quot;assets/css/style.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
        &lt;!--end::Global Stylesheets Bundle--&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!--begin::Page markup--!&gt;
        ...
        &lt;!--end::Page markup--&gt;&gt;

        &lt;!--begin::Javascript--&gt;
        &lt;!--begin::Global Javascript Bundle(mandatory for all pages)--&gt;
        &lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/js/scripts.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Global Javascript Bundle--&gt;

        &lt;!--begin::Vendors Javascript(used for this page only)--&gt;
        &lt;script src=&quot;assets/plugins/custom/fullcalendar/fullcalendar.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;assets/plugins/custom/datatables/datatables.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Vendors Javascript--&gt;

        &lt;!--begin::Custom Javascript(used for this page only)--&gt;
        &lt;script src=&quot;assets/js/widgets.bundle.js&quot;&gt;&lt;/script&gt;
        &lt;!--end::Custom Javascript--&gt;
        &lt;!--end::Javascript--&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->

                        <!--begin::Notice-->
                        <div class="pt-5">
                            <!--begin::Information-->
                            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                    class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-bold fs-6">
                                    These global bundles <code>plugins.bundle.js</code>, <code>plugins.bundle.css</code>,
                                    <code>style.bundle.css</code> and <code>scripts.bundle.js</code>
                                    are still required to be included in all pages for proper functioning of the theme.
                                </div> <!--end::Description-->
                            </div><!--end::Information-->
                        </div>
                        <!--end::Notice-->
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
                                <a href="#overview" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overview</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#custom-build" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom Build</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png" alt="buy metronic"
                                class="mw-100 rounded-3" data-bs-toggle="popover" data-bs-trigger="hover"
                                data-bs-html="true" data-bs-placement="top" data-bs-title="<b>License Reminder</b>"
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


