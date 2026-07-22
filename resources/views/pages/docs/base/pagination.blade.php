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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/pagination/"
                                class="fw-semibold">Bootstrap Pagination</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options in <code>src/sass/components/_pagination.scss</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic-example" data-kt-scroll-offset="50">
                            <a href="#basic-example"></a>

                            Basic Example
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use slightly customized pagination with previouse and next icon links:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <a href="javascript:void(0)" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active"><a href="javascript:void(0)" class="page-link">2</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next">
                                        <a href="javascript:void(0)" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item previous disabled&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;previous&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next&quot;&gt;&lt;a href=&quot;#&quot;  class=&quot;page-link&quot;&gt;&lt;i class=&quot;next&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="offset" data-kt-scroll-offset="50">
                            <a href="#offset"></a>

                            Offset
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use slightly customized pagination with arrows and offset:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <a href="javascript:void(0)" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active"><a href="javascript:void(0)" class="page-link">2</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item offset"><a href="javascript:void(0)" class="page-link">...</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next">
                                        <a href="javascript:void(0)" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item previous disabled&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;previous&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next&quot;&gt;&lt;a href=&quot;#&quot;  class=&quot;page-link&quot;&gt;&lt;i class=&quot;next&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="button-with-text" data-kt-scroll-offset="50">
                            <a href="#button-with-text"></a>

                            Button With Text
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Previous and next buttons with text:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <span class="page-link page-text">Previous</span>
                                    </li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active"><a href="javascript:void(0)" class="page-link">2</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next">
                                        <a class="page-link page-text" href="javascript:void(0)">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item previous disabled&quot;&gt;
        &lt;span class=&quot;page-link page-text&quot;&gt;Previous&lt;/span&gt;&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next&quot;&gt;
        &lt;a class=&quot;page-link page-text&quot; href=&quot;#&quot;&gt;Next&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="circle-style" data-kt-scroll-offset="50">
                            <a href="#circle-style"></a>

                            Circle Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Pagination with circle buttons:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination pagination-circle">
                                    <li class="page-item previous disabled">
                                        <a href="javascript:void(0)" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active"><a href="javascript:void(0)" class="page-link">2</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item "><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next">
                                        <a href="javascript:void(0)" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination pagination-circle&quot;&gt;
    &lt;li class=&quot;page-item previous disabled&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;previous&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item &quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next&quot;&gt;&lt;a href=&quot;#&quot;  class=&quot;page-link&quot;&gt;&lt;i class=&quot;next&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="outline-style" data-kt-scroll-offset="50">
                            <a href="#outline-style"></a>

                            Outline Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use slightly customized pagination with outline buttons:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="pagination pagination-outline">
                                    <li class="page-item previous disabled m-1">
                                        <a href="javascript:void(0)" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active m-1"><a href="javascript:void(0)" class="page-link">2</a>
                                    </li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next m-1">
                                        <a href="javascript:void(0)" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination pagination-outline&quot;&gt;
    &lt;li class=&quot;page-item previous disabled m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;previous&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next m-1&quot;&gt;&lt;a href=&quot;#&quot;  class=&quot;page-link&quot;&gt;&lt;i class=&quot;next&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="outline-and-circle-styles" data-kt-scroll-offset="50">
                            <a href="#outline-and-circle-styles"></a>

                            Outline & Circle Styles
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Pagination with outline and circle buttons:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class=" rounded border p-10">
                                <ul class="pagination pagination-circle pagination-outline">
                                    <li class="page-item previous disabled m-1">
                                        <a href="javascript:void(0)" class="page-link"><i class="previous"></i></a>
                                    </li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">1</a></li>
                                    <li class="page-item active m-1"><a href="javascript:void(0)" class="page-link">2</a>
                                    </li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next m-1">
                                        <a href="javascript:void(0)" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination pagination-circle pagination-outline&quot;&gt;
    &lt;li class=&quot;page-item previous disabled m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;&lt;i class=&quot;previous&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next m-1&quot;&gt;&lt;a href=&quot;#&quot;  class=&quot;page-link&quot;&gt;&lt;i class=&quot;next&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="custom-icons" data-kt-scroll-offset="50">
                            <a href="#custom-icons"></a>

                            Custom Icons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Pagination with custom icons:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class=" rounded border p-10">
                                <ul class="pagination pagination-circle pagination-outline">
                                    <li class="page-item first disabled m-1">
                                        <a href="javascript:void(0)" class="page-link px-0">
                                            <i class="ki-duotone ki-double-left fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </a>
                                    </li>
                                    <li class="page-item previous disabled m-1">
                                        <a href="javascript:void(0)" class="page-link px-0">
                                            <i class="ki-duotone ki-left fs-2"></i> </a>
                                    </li>
                                    <li class="page-item active m-1"><a href="javascript:void(0)" class="page-link">1</a>
                                    </li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">2</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">3</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">4</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">5</a></li>
                                    <li class="page-item m-1"><a href="javascript:void(0)" class="page-link">6</a></li>
                                    <li class="page-item next m-1">
                                        <a href="javascript:void(0)" class="page-link px-0">
                                            <i class="ki-duotone ki-right fs-2"></i> </a>
                                    </li>
                                    <li class="page-item last m-1">
                                        <a href="javascript:void(0)" class="page-link px-0">
                                            <i class="ki-duotone ki-double-right fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;pagination pagination-circle pagination-outline&quot;&gt;
    &lt;li class=&quot;page-item first disabled m-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link px-0&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-double-left fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item previous disabled m-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link px-0&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-left fs-2&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item m-1&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item next m-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link px-0&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-right fs-2&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item last m-1&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;page-link px-0&quot;&gt;
            &lt;i class=&quot;ki-duotone ki-double-right fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
                                <a href="#basic-example" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic Example</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#offset" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Offset</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#button-with-text" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Button With Text</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#circle-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Circle Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#outline-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Outline Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#outline-and-circle-styles" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Outline & Circle Styles</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#custom-icons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Custom Icons</span>
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


