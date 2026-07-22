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
                            Webpack is a module bundler primarily for JavaScript, but it can transform front-end assets like
                            HTML, CSS, and images if the corresponding plugins are included.
                            Webpack takes modules with dependencies and generates static assets representing those modules.
                            More information can be found in the
                            <a href="https://webpack.js.org/" class="fw-semibold">official Webpack site</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="gulp-quick-start" data-kt-scroll-offset="50">
                            <a href="#gulp-quick-start"></a>

                            Webpack Quick Start
                        </h1>
                        <!--end::Heading-->


                        <!--begin::List-->
                        <ol class="py-5">
                            <li class="pt-0 pb-3">Download the latest theme source from the <a
                                    href="https://1.envato.market/EA4JP" class="fw-semibold">Marketplace</a>.</li>

                            <li class="py-3">Download and install Node.js from <a href="https://nodejs.org/en/download/"
                                    class="fw-semibold">Nodejs</a>. The suggested version to install is <code>14.16.x
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
                                            dependencies setup. <code>Yarn</code> supports nested dependencies resolutions
                                            in <code>package.json</code> where spesific version of
                                            sub dependacies are required such as <code>resolutions: { "gulp-dart-sass/sass":
                                                "1.32.13" }</code>.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>
                            </li>

                            <li class="py-3">
                                Run the build taks to build the theme assets default build using Webpack:.

                                The below command will compile all the assets(sass, js, media) to <code>assets/</code>
                                folder:
                                State which demo to compile and append at the end of the command. Eg. <code>--demo1</code>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-danger "><i
                                            class="ki-duotone ki-information-5 fs-3x text-danger me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            Note on the <code>package.json</code> file. This step is very important for
                                            Webpack in Metronic template. The default <code>package.json</code> works for
                                            Gulp. To make it work for Webpack, you have to modify
                                            <code>tools/package.json</code> and remove <code>"type": "module"</code>.
                                            Otherwise, it will cause compilation error when running the next command.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm run build</code></pre>
                                        </div>
                                    </div><!--end::Highlight-->
                                </div>
                            </li>

                            <li class="py-3">
                                Start the localhost server:

                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                            title="Copy code">copy</button>
                                        <div class="highlight-code">
                                            <pre class="language-bash"><code class="language-bash">npm run localhost</code></pre>
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
                                            Keep the console open. Open this link to run <a href="http://localhost:8080/"
                                                target="_blank"><code>http://localhost:8080/</code></a>. It will take a few
                                            seconds for the build to finish. To stop a localhost environment, press
                                            <code>Ctrl+C</code>.
                                        </div> <!--end::Description-->
                                    </div><!--end::Information-->
                                </div>

                                <div class="pt-2 pb-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-info "><i
                                            class="ki-duotone ki-information-5 fs-3x text-info me-5"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">
                                            If you are getting this error <code>ReferenceError: require is not
                                                defined</code>. Check on the "Note on the <code>package.json</code> file"
                                            above.
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
                            The main webpack build config file is located in <code>tools/webpack.config.js</code> and you
                            can fully customize the build settings to meet your project requirements.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            This command use to start the Webpack real-time watcher. This task watches the <code>SASS</code
                                and <code>JavaScript</code> files and automatically recompile whenever the source files are
                            changed.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run watch</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Webpack use <a href="https://webpack.js.org/configuration/dev-server/" target="_blank"
                                class="fw-semibold">webpack-dev-server</a> to quickly develop an application. Use below
                            command to start the Webpack in localhost.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run localhost --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>--rtl</code> parameter to generate RTL version of required <code>CSS</code> files.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run build --rtl --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>--prod</code> to build assets for production with minified <code>CSS</code> and
                            <code>JavaScript</code> files.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run build --prod --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>--css</code> to build only <code>CSS</code> files.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run build --css --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Use <code>--js</code> to build only <code>JavaScript</code> files.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-bash"><code class="language-bash">npm run build --js --demo1</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="adding-new-plugins" data-kt-scroll-offset="50">
                            <a href="#adding-new-plugins"></a>

                            Adding New Plugins
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The new plugins from npm can be added into existing main
                            <code>tools/webpack/plugins/plugins.js</code> bundle or in separate bundle.
                            To create a separate bundle, check on these existing samples in
                            <code>tools/webpack/plugins/custom/*</code>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Follow the below steps to add a new plugin into the main bundle or as a separate bundle:

                            <!--begin::List-->
                            <ol class="py-5">
                                <li class="pt-0 pb-3">
                                    Get the new plugin package from yarn site <a href="https://yarnpkg.com/en/"
                                        class="fw-semibold me-1" target="_blank">Yarn Package Manager's site</a> and learn
                                    about
                                    install the new plugin using yarn referring to <a
                                        href="https://yarnpkg.com/en/docs/usage" class="fw-semibold" target="_blank">Yarn
                                        Usage Docs</a>.
                                </li>
                                <li class="py-3">
                                    This is the example command to add a new npm plugin. After running this command, the new
                                    plugin name will be added into <code>packages.json</code>

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">yarn add [package name]</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>
                                <li class="py-3">
                                    This is the example command to add a new npm plugin. After running this command, the new
                                    plugin name will be added into <code>packages.json</code>

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">yarn add [package name]</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>
                                <li class="py-3">
                                    Use below sample code to include the new plugin. The Webpack will first look for the
                                    plugins in the <code>node_modules</code> folder.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-js"><code class="language-js">require(&quot;[package]&quot;);
require(&quot;path/to/dist/package.js&quot;);</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>
                                <li class="py-3">
                                    For some case, the included plugin that need to be initialized within your custom codes
                                    by pass it to the global window. Then can be used globally within your custom codes. For
                                    example as below.
                                    This is to fix the browser to recognize the plugin when need to use it as <code>new
                                        Dropzone()</code>.

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">window.Dropzone = require(&quot;dropzone/dist/min/dropzone.min.js&quot;);</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>
                                <li class="py-3">
                                    To include CSS file from the plugin, use the below code:

                                    <div class="py-5">
                                        <!--begin::Highlight-->
                                        <div class="highlight"> <button class="highlight-copy btn"
                                                data-bs-toggle="tooltip" title="Copy code">copy</button>
                                            <div class="highlight-code">
                                                <pre class="language-bash"><code class="language-bash">require(&quot;path/to/dist/package.css&quot;);</code></pre>
                                            </div>
                                        </div><!--end::Highlight-->
                                    </div>
                                </li>
                            </ol>
                            <!--end::List-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="configuration" data-kt-scroll-offset="50">
                            <a href="#configuration"></a>

                            Configuration
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Below is a file structure inside the default Metronic's Webpack config. The Webpack config is
                            located in <code>tools/webpack</code> folder.
                        </div>
                        <!--end::Block-->

                        <!--begin::Table-->
                        <div class="py-5">
                            <div class="table-responsive border rounded">
                                <table class="table table-striped table-flush align-middle mb-0">
                                    <!--begin::Block-->
                                    <thead>
                                        <tr class="fs-4 fw-bold text-gray-900 p-6">
                                            <th class="min-w-200px">Path</th>
                                            <th class="min-w-400px">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="p-6">
                                            <td>
                                                <code>plugins</code>
                                            </td>
                                            <td>
                                                3rd party vendor's plugins from <code>node_modules</code>.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-10">
                                                <code>custom</code>
                                            </td>
                                            <td>
                                                This folder contains separate vendor's bundles.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-10">
                                                <code>plugins.js</code>
                                            </td>
                                            <td>
                                                This is the global vendor includes which required for all pages.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td class="ps-10">
                                                <code>plugins.scss</code>
                                            </td>
                                            <td>
                                                This is the global vendor includes which required for all pages.
                                            </td>
                                        </tr>
                                        <tr class="p-6">
                                            <td>
                                                <code>custom</code>
                                            </td>
                                            <td>
                                                The theme's core plugins and scripts.
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
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="integration" data-kt-scroll-offset="50">
                            <a href="#integration"></a>

                            Integration
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            These are the general steps for Webpack integration with other frameworks. Take a look on the
                            example of Webpack config file <code>theme/tools/webpack.config.js</code> for more details.

                            <div class="pt-2 pb-5">
                                <!--begin::Information-->
                                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning "><i
                                        class="ki-duotone ki-information-5 fs-3x text-warning me-5"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--begin::Description-->
                                    <div class="text-gray-700 fw-bold fs-6">
                                        The information below does not completely works as it is. A basic knowledge of
                                        Webpack is required for custom integration with other frameworks' Webpack.
                                    </div> <!--end::Description-->
                                </div><!--end::Information-->
                            </div>

                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Copy the folder of <code>tools/webpack/</code> into your application. This folder contains the
                            asset paths and plugin JS definition.

                            For example, this file is for plugin CSS <code>tools/webpack/plugins/plugins.scss</code>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-scss"><code class="language-scss">// tools/webpack/plugins/plugins.scss
@import &quot;~apexcharts/dist/apexcharts.css&quot;;
@import &quot;~@/src/plugins/formvalidation/dist/css/formValidation.css&quot;;
@import &quot;~bootstrap-daterangepicker/daterangepicker.css&quot;;
// ....</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>

                            This is the example for JS plugins <code>tools/webpack/plugins/plugins.js</code>.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-js"><code class="language-js">// tools/webpack/plugins/plugins.js
window.jQuery = window.$ = require(&#039;jquery&#039;);
window.bootstrap = require(&#039;bootstrap&#039;);
window.Popper = require(&#039;@popperjs/core&#039;);
// ....</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>

                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Get and copy the function to grab all the required asset files from this file.

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-js"><code class="language-js">function getEntryFiles() {
    const entries = {
        // 3rd party plugins css/js
        &#039;plugins/global/plugins.bundle&#039;: [&#039;./webpack/plugins/plugins.js&#039;, &#039;./webpack/plugins/plugins.scss&#039;],
        // Theme css/js
        &#039;css/style.bundle&#039;: [&#039;./&#039; + path.relative(&#039;./&#039;, srcPath) + &#039;/sass/style.scss&#039;, &#039;./&#039; + path.relative(&#039;./&#039;, srcPath) + &#039;/sass/plugins.scss&#039;],
        &#039;js/scripts.bundle&#039;: &#039;./webpack/scripts.&#039; + demo + &#039;.js&#039;,
    };

    // Custom 3rd party plugins
    (glob.sync(&#039;./webpack/{plugins,js}/custom/**/*.+(js)&#039;) || []).forEach(file =&gt; {
        let loc = file.replace(&#039;webpack/&#039;, &#039;&#039;).replace(&#039;./&#039;, &#039;&#039;);
        loc = loc.replace(&#039;.js&#039;, &#039;.bundle&#039;);
        entries[loc] = file;
    });

    // Custom JS files from src folder
    (glob.sync(path.relative(&#039;./&#039;, srcPath) + &#039;/js/custom/**/!(_)*.js&#039;) || []).forEach(file =&gt; {
        entries[file.replace(/.*js\/(.*?)\.js$/ig, &#039;js/$1&#039;)] = &#039;./&#039; + file;
    });

    return entries;
}</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>

                            <p><code>srcPath</code> is an absolute path to your <code>src</code> folder. Eg.
                                <code>C:\wamp64\www\keenthemes\_releases\metronic_html_v8.3.2\theme\demo1\src</code>
                            </p>

                            <p>These are the example output entry file paths to be passed into the Webpack
                                <code>entry</code> configuration. The array <code>key</code> is the destination output and
                                the <code>value</code> is the source file paths.
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-json"><code class="language-json">{
  &#039;plugins/global/plugins.bundle&#039;: [ &#039;./webpack/plugins/plugins.js&#039;, &#039;./webpack/plugins/plugins.scss&#039; ],
  &#039;css/style.bundle&#039;: &#039;./..\demo1\src/sass/style.scss&#039;,
  &#039;js/scripts.bundle&#039;: &#039;./webpack/scripts.demo1.js&#039;,
  &#039;js/custom/modals/create-project.bundle&#039;: &#039;./webpack/js/custom/modals/create-project.js&#039;,
  &#039;js/custom/modals/offer-a-deal.bundle&#039;: &#039;./webpack/js/custom/modals/offer-a-deal.js&#039;,
  &#039;plugins/custom/ckeditor/ckeditor-balloon-block.bundle&#039;: &#039;./webpack/plugins/custom/ckeditor/ckeditor-balloon-block.js&#039;,
  &#039;plugins/custom/ckeditor/ckeditor-balloon.bundle&#039;: &#039;./webpack/plugins/custom/ckeditor/ckeditor-balloon.js&#039;,
  // ....
}</code></pre>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                        </div>
                        <!--end::Block-->


                        <!--begin::Block-->
                        <div class="pt-5">
                            <p>Call the function above, to get the list of asset files. It should pass into the
                                <code>entry</code> option in the <code>webpack.config.js</code> along with other Webpack
                                configurations.
                            </p>

                            <p><code>resolve.alias</code> is required for alias symbol <code>@</code> to point to the demo
                                <code>src</code> folder. It's been used in the <code>theme/tools/webpack/</code>.
                            </p>

                            <p>Read more information about the <code>resolve.alias</code> on the Webpack documentation <a
                                    href="https://webpack.js.org/configuration/resolve/#resolvealias">https://webpack.js.org/configuration/resolve/#resolvealias</a>
                            </p>

                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <div class="highlight-code">
                                        <pre class="language-js"><code class="language-js">{
    // ....
    entry: getEntryFiles(),
    resolve: {
        alias: {
            jquery: path.join(__dirname, &#039;node_modules/jquery/src/jquery&#039;),
            $: path.join(__dirname, &#039;node_modules/jquery/src/jquery&#039;),
            &#039;@&#039;: demoPath,
        },
        extensions: [&#039;.js&#039;, &#039;.scss&#039;],
        fallback: {
            util: false,
        },
    },
    // ....
}</code></pre>
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
                                    <span class="menu-title">Webpack Quick Start</span>
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
                                <a href="#adding-new-plugins" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Adding New Plugins</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#configuration" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Configuration</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#integration" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Integration</span>
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


