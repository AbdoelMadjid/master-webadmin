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
                            Metronic customizes the <a href="https://getbootstrap.com/docs/5.2/components/navs-tabs/#tabs"
                                class="fw-semibold">Bootstrap Tabs</a>&nbsp;
                            through the SASS variables in <code>src/sass/components/_variables.scss</code> and adds
                            additonal options in <code>src/sass/components/_nav.scss</code>.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="line-tabs" data-kt-scroll-offset="50">
                            <a href="#line-tabs"></a>

                            Line Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To use a custom Line Tabs style just add <code>.nav-line-tabs</code> class as shown
                            below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Link
                                            1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Link 3</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-line-tabs mb-5 fs-6&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_1&quot;&gt;Link 1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_2&quot;&gt;Link 2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_3&quot;&gt;Link 3&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_1&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_2&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_3&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="tine-tabs-2x" data-kt-scroll-offset="50">
                            <a href="#tine-tabs-2x"></a>

                            Line Tabs 2x
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.nav-line-tabs-2x</code> class to us a line tab with 2px border width:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_4">Link
                                            1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_6">Link 3</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_4&quot;&gt;Link 1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_5&quot;&gt;Link 2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_6&quot;&gt;Link 3&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_4&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_5&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_6&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="tabs-with-dropdowns" data-kt-scroll-offset="50">
                            <a href="#tabs-with-dropdowns"></a>

                            Tabs with Dropdowns
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To use a custom Line Tabs style just add <code>.nav-line-tabs</code> class as shown
                            below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Link 3</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)"
                                            role="button" aria-expanded="false">Dropdown</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_10">Action</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_11">Another action</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_12">Something else here</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="tab"
                                                    href="#kt_tab_pane_13">Separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_10" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_11" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_12" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_13" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-line-tabs mb-5 fs-6&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_7&quot;&gt;Link 1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_8&quot;&gt;Link 2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_9&quot;&gt;Link 3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item dropdown&quot;&gt;
        &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;nav-link dropdown-item&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_10&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_7&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_8&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_9&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_10&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_11&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_12&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_13&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="card-tabs" data-kt-scroll-offset="50">
                            <a href="#card-tabs"></a>

                            Card Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Add <code>.nav-stretch</code> class to use line tabs in card header:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">

                                <div class="card  shadow">
                                    <div class="card-header card-header-stretch">
                                        <h3 class="card-title">Title</h3>
                                        <div class="card-toolbar">
                                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#kt_tab_pane_7">Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Link
                                                        2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Link
                                                        3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                                Et et consectetur ipsum labore excepteur est proident excepteur ad
                                                velit occaecat qui minim occaecat veniam.
                                                Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est
                                                aute sit dolor anim. Velit non irure adipisicing aliqua
                                                ullamco irure incididunt irure non esse consectetur nostrud minim
                                                non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                                tempor incididunt tempor dolor ipsum in qui sit.
                                            </div>

                                            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                                                Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure
                                                officia enim reprehenderit.
                                                Magna duis labore cillum sint adipisicing exercitation ipsum.
                                                Nostrud ut anim non exercitation velit laboris fugiat cupidatat.
                                                Commodo esse dolore fugiat sint velit ullamco magna consequat
                                                voluptate minim amet aliquip ipsum aute laboris nisi.
                                                Labore labore veniam irure irure ipsum pariatur mollit magna in
                                                cupidatat dolore magna irure esse tempor ad mollit.
                                                Dolore commodo nulla minim amet ipsum officia consectetur amet
                                                ullamco voluptate nisi commodo ea sit eu.
                                            </div>

                                            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                                                Sint sit mollit irure quis est nostrud cillum consequat Lorem esse
                                                do quis dolor esse fugiat sunt do.
                                                Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse
                                                mollit dolore anim cupidatat.
                                                eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim
                                                irure amet eiusmod qui reprehenderit nostrud tempor.
                                                Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in
                                                labore cillum elit enim. Consequat aliquip incididunt
                                                ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                                adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;card &quot;&gt;
    &lt;div class=&quot;card-header card-header-stretch&quot;&gt;
        &lt;h3 class=&quot;card-title&quot;&gt;Title&lt;/h3&gt;
        &lt;div class=&quot;card-toolbar&quot;&gt;
            &lt;ul class=&quot;nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0&quot;&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_7&quot;&gt;Link 1&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_8&quot;&gt;Link 2&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class=&quot;nav-item&quot;&gt;
                    &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_9&quot;&gt;Link 3&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
            &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_7&quot; role=&quot;tabpanel&quot;&gt;
                ....
            &lt;/div&gt;

            &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_8&quot; role=&quot;tabpanel&quot;&gt;
                ...
            &lt;/div&gt;

            &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_9&quot; role=&quot;tabpanel&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="scrollable-tabs" data-kt-scroll-offset="50">
                            <a href="#scrollable-tabs"></a>

                            Scrollable Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To use a custom Line Tabs style just add <code>.nav-line-tabs</code> class as shown
                            below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-5 hover-scroll-x">
                                    <div class="d-grid">
                                        <ul class="nav nav-tabs flex-nowrap text-nowrap">
                                            <li class="nav-item">
                                                <a class="nav-link active btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_1">Long Link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_2">Long Link 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_3">Long Link 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_4">Long Link 4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_5">Long Link 5</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_6">Long Link 6</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_7">Long Link 7</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_8">Long Link 8</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_9">Long Link 9</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0"
                                                    data-bs-toggle="tab" href="#kt_tab_pane_10">Long Link 10</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;div class=&quot;mb-5 hover-scroll-x&quot;&gt;
    &lt;div class=&quot;d-grid&quot;&gt;
        &lt;ul class=&quot;nav nav-tabs flex-nowrap text-nowrap&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_1&quot;&gt;Long Link 1&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link btn btn-active-light btn-color-gray-600 btn-active-color-primary rounded-bottom-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_tab_pane_1&quot;&gt;Long Link 2&lt;/a&gt;
            &lt;/li&gt;
            ...
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;kt_tab_pane_1&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane fade&quot; id=&quot;kt_tab_pane_2&quot; role=&quot;tabpanel&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="vertical-tabs" data-kt-scroll-offset="50">
                            <a href="#vertical-tabs"></a>

                            Vertical Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            To use a custom Vertical Tabs style just add <code>.flex-column</code> class as shown
                            below:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex flex-column flex-md-row rounded border p-10">
                                <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6">
                                    <li class="nav-item w-md-200px me-0">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_vtab_pane_1">Link 1</a>
                                    </li>
                                    <li class="nav-item w-md-200px me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_2">Link
                                            2</a>
                                    </li>
                                    <li class="nav-item w-md-200px">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_3">Link
                                            3</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6&quot;&gt;
    &lt;li class=&quot;nav-item w-md-200px me-0&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_1&quot;&gt;Link 1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item w-md-200px me-0&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_2&quot;&gt;Link 2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item w-md-200px&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_3&quot;&gt;Link 3&lt;/a&gt;
    &lt;/li&gt;
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
                        <h1 class="anchor fw-bold mb-5" id="rich-content-vertical-tabs" data-kt-scroll-offset="50">
                            <a href="#rich-content-vertical-tabs"></a>

                            Rich Content Vertical Tabs
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Vertical tabs can support rich content such as icons with ease by adding
                            <code>btn</code> classes to <code>.nav-link</code>.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="d-flex flex-column flex-md-row rounded border p-10">
                                <ul
                                    class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px">
                                    <li class="nav-item w-100 me-0 mb-md-2">
                                        <a class="nav-link w-100 active btn btn-flex btn-active-light-success"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                            <i
                                                class="ki-duotone ki-icons/duotune/general/gen001.svg fs-2 text-primary me-3"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Link 1</span>
                                                <span class="fs-7">Description</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100 me-0 mb-md-2">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-info" data-bs-toggle="tab"
                                            href="#kt_vtab_pane_5">
                                            <i
                                                class="ki-duotone ki-icons/duotune/general/gen003.svg fs-2 text-primary"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Link 2</span>
                                                <span class="fs-7">Description</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-danger"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_6">
                                            <i
                                                class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Link 3</span>
                                                <span class="fs-7">Description</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_vtab_pane_4" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit
                                        occaecat qui minim occaecat veniam.
                                        Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                        dolor anim. Velit non irure adipisicing aliqua
                                        ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                        occaecat. Amet duis do nisi duis veniam non est eiusmod
                                        tempor incididunt tempor dolor ipsum in qui sit.
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                                        Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia
                                        enim reprehenderit.
                                        Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut
                                        anim non exercitation velit laboris fugiat cupidatat.
                                        Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate
                                        minim amet aliquip ipsum aute laboris nisi.
                                        Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat
                                        dolore magna irure esse tempor ad mollit.
                                        Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco
                                        voluptate nisi commodo ea sit eu.
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis
                                        dolor esse fugiat sunt do.
                                        Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit
                                        dolore anim cupidatat.
                                        eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                                        amet eiusmod qui reprehenderit nostrud tempor.
                                        Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore
                                        cillum elit enim. Consequat aliquip incididunt
                                        ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                        adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:400px"><code class="language-html">&lt;ul class=&quot;nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px&quot;&gt;
    &lt;li class=&quot;nav-item w-100 me-0 mb-md-2&quot;&gt;
        &lt;a class=&quot;nav-link w-100 active btn btn-flex btn-active-light-success&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_4&quot;&gt;
            &lt;span class=&quot;svg-icon fs-2&quot;&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;
            &lt;span class=&quot;d-flex flex-column align-items-start&quot;&gt;
                &lt;span class=&quot;fs-4 fw-bold&quot;&gt;Link 1&lt;/span&gt;
                &lt;span class=&quot;fs-7&quot;&gt;Description&lt;/span&gt;
            &lt;/span&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item w-100 me-0 mb-md-2&quot;&gt;
        &lt;a class=&quot;nav-link w-100 btn btn-flex btn-active-light-info&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_5&quot;&gt;
            &lt;span class=&quot;svg-icon fs-2&quot;&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;
            &lt;span class=&quot;d-flex flex-column align-items-start&quot;&gt;
                &lt;span class=&quot;fs-4 fw-bold&quot;&gt;Link 2&lt;/span&gt;
                &lt;span class=&quot;fs-7&quot;&gt;Description&lt;/span&gt;
            &lt;/span&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item w-100&quot;&gt;
        &lt;a class=&quot;nav-link w-100 btn btn-flex btn-active-light-danger&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#kt_vtab_pane_6&quot;&gt;
            &lt;span class=&quot;svg-icon fs-2&quot;&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/span&gt;
            &lt;span class=&quot;d-flex flex-column align-items-start&quot;&gt;
                &lt;span class=&quot;fs-4 fw-bold&quot;&gt;Link 3&lt;/span&gt;
                &lt;span class=&quot;fs-7&quot;&gt;Description&lt;/span&gt;
            &lt;/span&gt;
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
                                <a href="#line-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tine-tabs-2x" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Line Tabs 2x</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#tabs-with-dropdowns" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Tabs with Dropdowns</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#card-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Card Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#scrollable-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Scrollable Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#vertical-tabs" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Vertical Tabs</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#rich-content-vertical-tabs" data-kt-scroll-toggle="true"
                                    class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Rich Content Vertical Tabs</span>
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


