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
                    <div class="py-0">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview">
                            <a href="#overview"></a>
                            Updating &nbsp;Metronic
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-4">
                            Like all HTML templates, you will need to manually handle all updates that we provide after
                            purchase for free.
                            The best practice is to always keep Metronic's source folder on an entire separate folder within
                            your project
                            and then use Metronic as a development companion or support.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-4">
                            Each update should be used independently without mixing it with the previous versions.
                            This is because new updates may not have a 100% backward compatibility for elements within
                            previous versions.
                            Therefore, each update is considered as a new and better version of the theme.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-4">
                            Here's our recommended steps needed to update Metronic effectively:

                            <ol class="py-3">
                                <li class="py-2">Backup all your files (your project folder and Metronic's's older
                                    version).</li>
                                <li class="py-2">Review Metronics changelog to have a quick preview on what has been
                                    updated.</li>
                                <li class="py-2">Unzip the latest version of Metronic and then browse through the elements
                                    (layout, widgets, plugins, etc) that you have used on your project.</li>
                                <li class="py-2">Get the latest version use it instead the previous version.</li>
                                <li class="py-2">Manually replace the <code>src</code> folder.</li>
                                <li class="py-2">Run <code>yarn install</code> task to update 3rd party plugins with their
                                    latest versions.</li>
                                <li class="py-2">Compare your project's code vs the latest version of Metronics code.</li>
                                <li class="py-2">Manually update the HTML code where necessary by using code compare
                                    tools.</li>
                                <li class="py-2">Save and test your project files with Metronic's updated elements.</li>
                            </ol>

                            If something goes wrong, you can revert your updates by reusing your backup files.
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


