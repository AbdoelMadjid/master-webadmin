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
                            Metronic customizes the
                            <a href="https://getbootstrap.com/docs/5.2/forms/input-group/" class="fw-semibold">Bootstrap
                                Input Group</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code>
                            and adds additonal options for the form elements in
                            <code>src/sass/components/forms/</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="basic" data-kt-scroll-offset="50">
                            <a href="#basic"></a>

                            Basic
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Place one add-on or button on either side of an input. You may also place one on both
                            sides of an input. Remember to place <code>&lt;label&gt;</code> outside the input group.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group has-validation mb-5">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control is-invalid" required />
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" />
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Server" aria-label="Server" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&#039;s username&quot; aria-label=&quot;Recipient&#039;s username&quot; aria-describedby=&quot;basic-addon2&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;label for=&quot;basic-url&quot; class=&quot;form-label&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
    &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="solid-style" data-kt-scroll-offset="50">
                            <a href="#solid-style"></a>

                            Solid Style
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.input-group-solid</code> custom class to use solid style input group:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group input-group-solid mb-5">
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" />
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Server"
                                        aria-label="Server" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-solid mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-solid mb-5&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&#039;s username&quot; aria-label=&quot;Recipient&#039;s username&quot; aria-describedby=&quot;basic-addon2&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;label for=&quot;basic-url&quot; class=&quot;form-label&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group input-group-solid mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-solid mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-solid mb-5&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-solid&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
    &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sizing" data-kt-scroll-offset="50">
                            <a href="#sizing"></a>

                            Sizing
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add the relative form sizing classes to the <code>.input-group</code> itself and
                            contents within will automatically resize—no need for repeating the form control size
                            classes on each element.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group input-group-sm mb-5">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg" />
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-sm mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group input-group-lg&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-lg&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="icons" data-kt-scroll-offset="50">
                            <a href="#icons"></a>

                            Icons
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use <a href="/html/metronic/docs/icons/keenicons" class="fw-semibold">Keenicons</a>,
                            <a href="/html/metronic/docs/icons/bootstrap-icons" class="fw-semibold">Bootstrap
                                Icons</a>,
                            <a href="/html/metronic/docs/icons/font-awesome" class="fw-semibold">Font Awesome
                                Icons</a>,
                            <a href="/html/metronic/docs/icons/line-awesome" class="fw-semibold">Line Awesome
                                Icons</a>&nbsp;
                            with Input Group's <code>.input-group-text</code> element as shown below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ki-duotone ki-profile-circle fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text" id="basic-addon3">
                                        <i class="ki-duotone ki-wallet fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i> </span>
                                    <input type="text" class="form-control" id="basic-url" placeholder="Website URL"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="input-group mb-5">
                                    <span class="input-group-text">
                                        <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <input type="text" class="form-control"
                                        placeholder="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-profile-circle fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&#039;s username&quot; aria-label=&quot;Recipient&#039;s username&quot; aria-describedby=&quot;basic-addon2&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-sms fs-4&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;
    &lt;i class=&quot;ki-duotone ki-wallet fs-1&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot;  placeholder=&quot;Website URL&quot; aria-describedby=&quot;basic-addon3&quot;/&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;

&lt;!--begin::Input group--&gt;
&lt;div class=&quot;input-group mb-5&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;
        &lt;i class=&quot;ki-duotone ki-calendar fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount (to the nearest dollar)&quot;/&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;!--end::Input group--&gt;</code></pre>
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
                                <a href="#basic" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Basic</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#solid-style" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Solid Style</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sizing" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Sizing</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#icons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Icons</span>
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


