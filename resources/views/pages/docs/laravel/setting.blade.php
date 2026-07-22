@extends('layouts.document832')
@section('title', 'Index')
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
                        <h1 class="anchor fw-bold mb-5" id="settings" data-kt-scroll-offset="50">
                            <a href="#settings"></a>

                            Settings
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Here’s a list of settings available in Metronic Laravel core and their default values. The
                            default config file is located in <code>starterkit/config/settings.php</code>
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped align-top mb-0 g-5">
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-150px">Name</th>
                                            <th class="min-w-50px">Type</th>
                                            <th class="">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=""><code>KT_THEME_LAYOUT_DIR</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>A property used for a layout partials directory location. Default value:
                                                <code>layout</code>.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""><code>KT_THEME_MODE_DEFAULT</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>Default theme mode value. The supported values are <code>light</code>,
                                                <code>dark</code> and <code>system</code>.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""><code>KT_THEME_MODE_SWITCH_ENABLED</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>Enable theme mode switch toggle. The default value: <code>true</code>.</td>
                                        </tr>
                                        <tr>
                                            <td class=""><code>KT_THEME_DIRECTION</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>Set the text writing direction. The supported values are <code>rtl</code>
                                                and <code>ltr</code>.
                                                RTL is the writing starts from the
                                                right of the page and continues to the left (Right-to-Left).
                                                Default value: <code>ltr</code>.</td>
                                        </tr>
                                        <tr>
                                            <td class=""><code>KT_THEME_ASSETS</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>A set of configuration array for assets included in the application. Eg.
                                                favicon, fonts, css, js, etc.</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-13"><code>favicon</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>Display an icon as a visual reminder of the Web site identity in the address
                                                bar or in tabs.</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-13"><code>fonts</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>The fonts settings for this application.</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-13"><code>css</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>CSS files included globally for all pages.</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-13"><code>js</code></td>
                                            <td><code>mandatory</code></td>
                                            <td>JS files included globally for all pages.</td>
                                        </tr>
                                        <tr>
                                            <td class=""><code>KT_THEME_VENDORS</code></td>
                                            <td><code>optional</code></td>
                                            <td>A list of vendors available in the package. The vendor can be added using an
                                                APi function. Eg. <code>helpers.addVendor('datatable')</code>. Refer to the
                                                Theme API page.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
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


