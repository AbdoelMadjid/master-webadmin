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
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="file-structure" data-kt-scroll-offset="50">
                            <a href="#file-structure"></a>

                            File Structure
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Metronic Laravel comes with a flexible file structure that can be easily used for small to large
                            scope projects.
                            This section will explain the entire file structure and how to adapt it to your project.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="pt-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-flush align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-400px">File/Folder</th>
                                            <th class="min-w-500px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>starterkit</code>
                                            </td>
                                            <td>
                                                The root folder that contains Metronic Laravel folder.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>_keenthemes</code>
                                            </td>
                                            <td>
                                                This is a Core folder for Keenthemes products.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-20">
                                                <code>src</code>
                                            </td>
                                            <td>
                                                The source folder which located the raw version of HTML templates. The
                                                assets will be used for assets bundling.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-20">
                                                <code>tools</code>
                                            </td>
                                            <td>
                                                The build tools for assets.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>app</code>
                                            </td>
                                            <td>
                                                It organizes your application components. It's got subdirectories that hold
                                                the view (views and helpers), controller (controllers), and the backend
                                                business logic (models).
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>bootstrap</code>
                                            </td>
                                            <td>
                                                The <code>bootstrap</code> directory contains the <code>app.php</code> file
                                                which bootstraps the framework. This directory also houses a
                                                <code>cache</code> directory which contains framework generated files for
                                                performance optimization such as the route and services cache files. You
                                                should not typically need to modify any files within this directory.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>config</code>
                                            </td>
                                            <td>
                                                The <code>config</code> directory, as the name implies, contains all of your
                                                application's configuration files. It's a great idea to read through all of
                                                these files and familiarize yourself with all of the options available to
                                                you.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>database</code>
                                            </td>
                                            <td>
                                                The <code>database</code> directory contains your database migrations, model
                                                factories, and seeds. If you wish, you may also use this directory to hold
                                                an SQLite database
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>public</code>
                                            </td>
                                            <td>
                                                Like the public directory for a web server, this directory has web files
                                                that don't change, such as JavaScript files (public/javascripts), graphics
                                                (public/images), stylesheets (public/stylesheets), and HTML files (public).
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>resources</code>
                                            </td>
                                            <td>
                                                The <code>resources</code> directory contains your <a
                                                    href="https://laravel.com/docs/8.x/views" target="_blank">views</a> as
                                                well as your raw, un-compiled assets such as CSS or JavaScript. This
                                                directory also houses all of your language files.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>routes</code>
                                            </td>
                                            <td>
                                                The <code>routes</code> directory contains all of the route definitions for
                                                your application. By default, several route files are included with Laravel:
                                                <code>web.php</code>, <code>api.php</code>, <code>console.php</code>, and
                                                <code>channels.php</code>.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>storage</code>
                                            </td>
                                            <td>
                                                <p>The <code>storage</code> directory contains your logs, compiled Blade
                                                    templates, file based sessions, file caches, and other files generated
                                                    by the framework. This directory is segregated into <code>app</code>,
                                                    <code>framework</code>, and <code>logs</code>directories. The
                                                    <code>app</code> directory may be used to store any files generated by
                                                    your application. The <code>framework</code> directory is used to store
                                                    framework generated files and caches. Finally, the <code>logs</code>
                                                    directory contains your application's log files.
                                                </p>
                                                <p>The <code>storage/app/public</code> directory may be used to store
                                                    user-generated files, such as profile avatars, that should be publicly
                                                    accessible. You should create a symbolic link at
                                                    <code>public/storage</code> which points to this directory. You may
                                                    create the link using the <code>php artisan storage:link</code> Artisan
                                                    command.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>tests</code>
                                            </td>
                                            <td>
                                                <p>The <code>tests</code> directory contains your automated tests. Example
                                                    <a href="https://phpunit.de/" target="_blank">PHPUnit</a> unit tests and
                                                    feature tests are provided out of the box. Each test class should be
                                                    suffixed with the word <code>Test</code>. You may run your tests using
                                                    the <code>phpunit</code> or <code>php vendor/bin/phpunit</code>
                                                    commands. Or, if you would like a more detailed and beautiful
                                                    representation of your test results, you may run your tests using the
                                                    <code>php artisan test</code> Artisan command.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-13">
                                                <code>vendor</code>
                                            </td>
                                            <td>
                                                <p>The <code>vendor</code> directory contains your <a
                                                        href="https://getcomposer.org/" target="_blank">Composer</a>
                                                    dependencies.</p>
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>.gitignore</code>
                                            </td>
                                            <td>
                                                A gitignore file specifies intentionally untracked files that Git should
                                                ignore. Files already tracked by Git are not affected
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>documentation.html</code>
                                            </td>
                                            <td>
                                                The documentation file.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="">
                                                <code>README.md</code>
                                            </td>
                                            <td>
                                                README file as a quick guide that gives a detailed description
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


