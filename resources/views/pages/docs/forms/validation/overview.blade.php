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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="overview">
                            <a href="#overview" data-kt-scroll-toggle></a>
                            Overview
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            FormValidation is one of the best validation library for JavaScript. For more info see
                            <a href="https://formvalidation.io/" class="fw-bold me-1">the official site</a>and
                            <a class="fw-bold" href="https://github.com/form-validation/formvalidation.io">the Github
                                repository</a>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="usage">
                            <a href="#usage" data-kt-scroll-toggle></a>
                            Usage
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            FormValidation's Javascript bundles are globally included in all pages.
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
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="initialization">
                            <a href="#initialization" data-kt-scroll-toggle></a>
                            Initialization
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <ul class="py-0">
                                <li class="py-2">
                                    FormValidation is primarily initialized via Javascript by adding a unique
                                    <code>id</code> to the <code>form</code> element.
                                </li>
                                <li class="py-2">
                                    <span class="badge badge-danger fw-semibold">Important</span>&nbsp; Add
                                    <code>fv-row</code> CSS class to the input group to identify the input field that
                                    requires FormValidation.
                                </li>
                                <li class="pt-2">
                                    Please refer to the <a href="https://formvalidation.io/guide/getting-started"
                                        target="_blank" class="me-1">official documentation</a> for all validation options
                                    available.
                                </li>
                            </ul>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="aspnet">
                            <a href="#aspnet" data-kt-scroll-toggle></a>
                            Integrating with ASP.Net
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Since ASP.Net changes the field name when rendering the controls, you have to use
                            <code><%= control.UniqueID %></code> as the name of fields. For more information, please refer
                            to the <a href="https://old.formvalidation.io/examples/integrating-asp-net/"
                                target="_blank">official documentation</a>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;%@ Page
Title=&quot;&quot;
Language=&quot;C#&quot;
MasterPageFile=&quot;~/Master.Master&quot;
AutoEventWireup=&quot;true&quot;
CodeBehind=&quot;...&quot;
Inherits=&quot;...&quot; %&gt;

&lt;asp:Content ID=&quot;Content1&quot; ContentPlaceHolderID=&quot;ContentPlaceHolder1&quot; runat=&quot;server&quot;&gt;

&lt;!-- Fields --&gt;
&lt;asp:TextBox runat=&quot;server&quot; CssClass=&quot;form-control&quot; ID=&quot;userNameTextBox&quot; /&gt;

&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function() {
    $(&#039;#form1&#039;).formValidation({
        framework: &#039;bootstrap&#039;,
        icon: {
            valid: &#039;glyphicon glyphicon-ok&#039;,
            invalid: &#039;glyphicon glyphicon-remove&#039;,
            validating: &#039;glyphicon glyphicon-refresh&#039;
        },
        fields: {
            // There is no single quote
            &lt;%=userNameTextBox.UniqueID%&gt;: {
                validators: {
                    notEmpty: {
                        message: &#039;The username is required and cannot be empty&#039;
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: &#039;The username must be more than 6 and less than 30 characters long&#039;
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: &#039;The username can only consist of alphabetical and number&#039;
                    },
                    different: {
                        field: &#039;password&#039;,
                        message: &#039;The username and password cannot be the same as each other&#039;
                    }
                }
            }
        }
    });
});
&lt;/script&gt;
&lt;/asp:Content&gt;</code></pre>
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


