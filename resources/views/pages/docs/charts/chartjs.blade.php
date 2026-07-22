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
                            <strong class="me-1">ChartJS</strong> is a simple yet flexible JavaScript charting for
                            designers & developers. For more info please visit the plugin's <a class="me-1"
                                href="https://www.chartjs.org/docs/latest/" target="_blank">Home</a> or <a
                                href="https://github.com/chartjs/Chart.js" target="_blank">Github Repo</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <strong>ChartJS</strong>'s CSS and Javascript files are bundled in the global style and scripts
                            bundles and are globally included in all pages:
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;link href=&quot;assets/plugins/global/plugins.bundle.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
&lt;script src=&quot;assets/plugins/global/plugins.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="bar_chart" data-kt-scroll-offset="50">
                            <a href="#bar_chart"></a>

                            Bar Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad47e7" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad47ec" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5071ad47e7" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var ctx = document.getElementById(&#039;kt_chartjs_1&#039;);

// Define colors
var primaryColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var dangerColor = KTUtil.getCssVariableValue(&#039;--kt-danger&#039;);
var successColor = KTUtil.getCssVariableValue(&#039;--kt-success&#039;);

// Define fonts
var fontFamily = KTUtil.getCssVariableValue(&#039;--bs-font-sans-serif&#039;);

// Chart labels
const labels = [&#039;January&#039;, &#039;February&#039;, &#039;March&#039;, &#039;April&#039;, &#039;May&#039;, &#039;June&#039;, &#039;July&#039;, &#039;August&#039;, &#039;September&#039;, &#039;October&#039;, &#039;November&#039;, &#039;December&#039;];

// Chart data
const data = {
    labels: labels,
    datasets: [
        ...
    ]
};

// Chart config
const config = {
    type: &#039;bar&#039;,
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
        interaction: {
            intersect: false,
        },
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true
            }
        }
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5071ad47ec" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;canvas id=&quot;kt_chartjs_1&quot; class=&quot;mh-400px&quot;&gt;&lt;/canvas&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="line_chart" data-kt-scroll-offset="50">
                            <a href="#line_chart"></a>

                            Line Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <canvas id="kt_chartjs_2" class="mh-400px"></canvas>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4814" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4815" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5071ad4814"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var ctx = document.getElementById(&#039;kt_chartjs_2&#039;);

// Define colors
var primaryColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var dangerColor = KTUtil.getCssVariableValue(&#039;--kt-danger&#039;);

// Define fonts
var fontFamily = KTUtil.getCssVariableValue(&#039;--bs-font-sans-serif&#039;);

// Chart labels
const labels = [&#039;January&#039;, &#039;February&#039;, &#039;March&#039;, &#039;April&#039;, &#039;May&#039;, &#039;June&#039;, &#039;July&#039;];

// Chart data
const data = {
    labels: labels,
    datasets: [
        ...
    ]
};

// Chart config
const config = {
    type: &#039;bar&#039;,
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5071ad4815" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;canvas id=&quot;kt_chartjs_2&quot; class=&quot;mh-400px&quot;&gt;&lt;/canvas&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="pie_chart" data-kt-scroll-offset="50">
                            <a href="#pie_chart"></a>

                            Pie Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <canvas id="kt_chartjs_3" class="mh-400px"></canvas>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4836" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4837" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5071ad4836"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var ctx = document.getElementById(&#039;kt_chartjs_3&#039;);

// Define colors
var primaryColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var dangerColor = KTUtil.getCssVariableValue(&#039;--kt-danger&#039;);
var successColor = KTUtil.getCssVariableValue(&#039;--kt-success&#039;);
var warningColor = KTUtil.getCssVariableValue(&#039;--kt-warning&#039;);
var infoColor = KTUtil.getCssVariableValue(&#039;--kt-info&#039;);

// Define fonts
var fontFamily = KTUtil.getCssVariableValue(&#039;--bs-font-sans-serif&#039;);

// Chart labels
const labels = [&#039;January&#039;, &#039;February&#039;, &#039;March&#039;, &#039;April&#039;, &#039;May&#039;];

// Chart data
const data = {
    labels: labels,
    datasets: [
        ...
    ]
};

// Chart config
const config = {
    type: &#039;pie&#039;,
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5071ad4837" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;canvas id=&quot;kt_chartjs_3&quot; class=&quot;mh-400px&quot;&gt;&lt;/canvas&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="stacked_bar_and_line_chart" data-kt-scroll-offset="50">
                            <a href="#stacked_bar_and_line_chart"></a>

                            Stacked Bar & Line Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <canvas id="kt_chartjs_4"></canvas>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4857" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad4858" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5071ad4857"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var ctx = document.getElementById(&#039;kt_chartjs_4&#039;);

// Define colors
var primaryColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var dangerColor = KTUtil.getCssVariableValue(&#039;--kt-danger&#039;);
var dangerLightColor = KTUtil.getCssVariableValue(&#039;--kt-danger-light&#039;);

// Define fonts
var fontFamily = KTUtil.getCssVariableValue(&#039;--bs-font-sans-serif&#039;);

// Chart labels
const labels = [&#039;January&#039;, &#039;February&#039;, &#039;March&#039;, &#039;April&#039;, &#039;May&#039;, &#039;June&#039;, &#039;July&#039;, &#039;August&#039;, &#039;September&#039;, &#039;October&#039;, &#039;November&#039;, &#039;December&#039;];

// Chart data
const data = {
    labels: labels,
    datasets: [
        ...
    ]
};

// Chart config
const config = {
    type: &#039;line&#039;,
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 15,
                        family: fontFamily
                    }
                }
            }
        },
        responsive: true,
        interaction: {
            intersect: false,
        },
        scales: {
            y: {
                stacked: true
            }
        }
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5071ad4858" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;canvas id=&quot;kt_chartjs_4&quot; class=&quot;mh-400px&quot;&gt;&lt;/canvas&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="radar_chart" data-kt-scroll-offset="50">
                            <a href="#radar_chart"></a>

                            Radar Chart
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Simply define a blank <code>div</code> with a unique <code>id</code> in your HTML markup. Then
                            initialize the chart via javascript.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-bordered">
                                <div class="card-body">
                                    <canvas id="kt_chartjs_5" class="mh-400px"></canvas>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad487b" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5071ad487c" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5071ad487b"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">var ctx = document.getElementById(&#039;kt_chartjs_5&#039;);

// Define colors
var infoColor = KTUtil.getCssVariableValue(&#039;--kt-info&#039;);
var infoLightColor = KTUtil.getCssVariableValue(&#039;--kt-info-light&#039;);
var warningColor = KTUtil.getCssVariableValue(&#039;--kt-warning&#039;);
var warningLightColor = KTUtil.getCssVariableValue(&#039;--kt-warning-light&#039;);
var primaryColor = KTUtil.getCssVariableValue(&#039;--kt-primary&#039;);
var primaryLightColor = KTUtil.getCssVariableValue(&#039;--kt-primary-light&#039;);

// Define fonts
var fontFamily = KTUtil.getCssVariableValue(&#039;--md-font-sans-serif&#039;);

// Chart labels
const labels = [&#039;January&#039;, &#039;February&#039;, &#039;March&#039;, &#039;April&#039;, &#039;May&#039;, &#039;June&#039;];

// Chart data
const data = {
    labels: labels,
    datasets: [
        ...
    ]
};

// Chart config
const config = {
    type: &#039;pie&#039;,
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 15,
                        family: fontFamily
                    }
                }
            }
        },
        responsive: true,
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5071ad487c" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html"><code class="language-html">&lt;canvas id=&quot;kt_chartjs_5&quot; class=&quot;mh-400px&quot;&gt;&lt;/canvas&gt;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
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
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#bar_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Bar Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#line_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#pie_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Pie Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#stacked_bar_and_line_chart" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Stacked Bar & Line Chart</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#radar_chart" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Radar Chart</span>
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
    <script src="{{ asset('assets/js/custom/documentation/charts/chartjs.js') }}"></script>
    <!--end::Vendors Javascript-->
@endsection


