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
                        <h1 class="anchor fw-bold mb-5" id="getting-started" data-kt-scroll-offset="50">
                            <a href="#getting-started"></a>

                            Getting Started
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            This document is aimed to create and run your Metronic based <a class="fw-semibold"
                                href="https://guides.rubyonrails.org/" target="_blank">Laravel</a>&nbsp;project in just 5
                            minutes.
                            It's assumed that you already purchased <a class="fw-semibold"
                                href="https://1.envato.market/EA4JP" target="_blank">Metronic</a>

                            &nbsp;and downloaded from <a class="fw-semibold"
                                href="https://devs.keenthemes.com/metronic/laravel" target="_blank">Metronic Downloads</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="pre-requirements" data-kt-scroll-offset="50">
                            <a href="#pre-requirements"></a>

                            Pre Requirements
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <p>Before you install Laravel, you should check to make sure that your system has the proper
                                prerequisites installed. These include:</p>

                            <ul class="py-3 fw-semibold">
                                <li class="py-3">
                                    <a href="https://www.php.net/releases/8.0/en.php" target="_blank">PHP 8</a>
                                </li>
                                <li class="py-3">
                                    <a href="https://getcomposer.org/" target="_blank">Composer</a>
                                </li>
                                <li class="py-3">
                                    <a href="https://laravel.com/" target="_blank">Laravel 9</a>
                                </li>
                            </ul>

                            <p>Laravel 10 installation requires the most up-to-date form of PHP 8 and a number of other
                                prerequisites specified within the future. Laravel, as a framework, depends on several
                                community-driven and Symfony 9 libraries.</p>

                            <p>The default assets compiler is using Webpack Mix. Assets compile require the build tools.
                                These libraries are required as below.</p>

                            <ul class="py-3 fw-semibold">
                                <li class="py-3">
                                    <a href="https://nodejs.org/" target="_blank">Node.js 16.15.0+</a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-5 pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="html-features" data-kt-scroll-offset="50">
                            <a href="#html-features"></a>

                            HTML Features
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            The Starter Kit includes only the theme source code(sass, js, media, fonts and icons) from the
                            HTML version, build tools(Gulp, Webpack),
                            layout views and general pages(index, authentication, error) integration.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="pt-5">
                            To use any feature shown in the HTML version just copy & paste the HTML code and include
                            required assets(css, js) using the Theme Api.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="install-laravel" data-kt-scroll-offset="50">
                            <a href="#install-laravel"></a>

                            Install Laravel
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <ol class="py-3 fw-semibold">
                                <li class="py-3">
                                    Composer is an application-level package manager for the PHP programming language that
                                    provides a standard format for managing dependencies of PHP software and required
                                    libraries.
                                    To install Composer globally, download the installer from <a
                                        href="https://getcomposer.org/download/">https://getcomposer.org/download/</a>

                                    Verify that Composer in successfully installed, and version of installed Composer will
                                    appear:

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">composer --version</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Navigate your prompt to <code>starterkit</code> folder.
                                    <div class="pt-3 pb-3">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">cd starterkit</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Install Composer dependencies.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">composer install</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Copy <code>.env.example</code> file and create duplicate. Use <code>cp</code> command
                                    for Linux or Mac user.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">cp .env.example .env</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>

                                    If you are using <code>Windows</code>, use <code>copy</code> instead of <code>cp</code>.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">copy .env.example .env</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Create a table in MySQL database and fill the database details <code>DB_DATABASE</code>
                                    in <code>.env</code> file.
                                </li>

                                <li class="py-3">
                                    The below command will create tables into database using Laravel <code>migration</code>
                                    and <code>seeder</code>.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">php artisan migrate:fresh --seed</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Generate your application encryption key.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">php artisan key:generate</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                            </ol>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="build-assets" data-kt-scroll-offset="50">
                            <a href="#build-assets"></a>

                            Build assets
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            Before running the application we need to build theme assets:

                            <ol class="py-3 fw-semibold">
                                <li class="py-3">
                                    Navigate your prompt to <code>starterkit</code> folder.
                                    <div class="pt-3 pb-3">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">cd starterkit</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    Install node modules dependencies using NPM.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">npm install</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    The below command will compile all the assets(sass, js, media) to <code>public</code>
                                    folder:

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">npm run dev</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                            </ol>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="run-laravel" data-kt-scroll-offset="50">
                            <a href="#run-laravel"></a>

                            Run Laravel
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            To run the Laravel application navigate your prompt to <code>starterkit</code> folder and run
                            the following command. This command will listen for changes and hot reload them.

                            <ol class="py-3 fw-semibold">
                                <li class="py-3">
                                    Navigate your prompt to <code>starterkit</code> folder.
                                    <div class="pt-3 pb-3">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">cd starterkit</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>

                                <li class="py-3">
                                    <div class="pt-3 pb-3">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">php artisan serve</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                    Keep your prompt running by default application is served on <a
                                        href="http://127.0.0.1:8000/">http://127.0.0.1:8000</a>
                                </li>
                            </ol>
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
                                <a href="#getting-started" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Getting Started</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#pre-requirements" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Pre Requirements</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#html-features" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">HTML Features</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#install-laravel" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Install Laravel</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#build-assets" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Build assets</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#run-laravel" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Run Laravel</span>
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


