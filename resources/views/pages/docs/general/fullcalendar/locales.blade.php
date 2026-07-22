@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                            Fullcalendar is the most popular Javascript Calendar. It's powerful and lightweight and suitable
                            for just about anything. For more info see <a href="https://fullcalendar.io/docs"
                                class="fw-bold me-1">the official site</a>and <a class="fw-bold"
                                href="https://github.com/fullcalendar/fullcalendar">the Github repository</a>.
                        </div> <!--end::Description-->
                    </div><!--end::Notice-->
                    <!--begin::Section-->
                    <div class="pt-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" data-kt-scroll-offset="85" id="basic">
                            <a href="#basic" data-kt-scroll-toggle></a>
                            Basic Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Fullcalendar localization demo. For more info, please visit the <a
                                    href="https://fullcalendar.io/docs/localization" target="_blank">official
                                    documentation</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Localization dropdown-->
                            <div class="mb-15 w-300px">
                                <label class="fs-4 fw-bold mb-3">Select a Localization:</label>
                                <select id='kt_docs_fullcalendar_locale_selector' class="form-select" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option></option>
                                </select>
                            </div>
                            <!--end::Localization dropdown-->

                            <!--begin::Fullcalendar-->
                            <div id="kt_docs_fullcalendar_locales"></div>
                            <!--end::Fullcalendar-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b9904bda6" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b9904bdb6" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b9904bda6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTGeneralFullCalendarLocalesDemos = function () {
    // Private functions

    var examplelocales = function () {
        // Define variables
        var initialLocaleCode = &#039;en&#039;;
        var localeSelectorEl = document.getElementById(&#039;kt_docs_fullcalendar_locale_selector&#039;);
        var calendarEl = document.getElementById(&#039;kt_docs_fullcalendar_locales&#039;);

        // initialize the calendar -- for more info please visit the official site: https://fullcalendar.io/demos
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: &#039;prev,next today&#039;,
                center: &#039;title&#039;,
                right: &#039;dayGridMonth,timeGridWeek,timeGridDay,listMonth&#039;
            },
            initialDate: &#039;2020-09-12&#039;,
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            dayMaxEvents: true, // allow &quot;more&quot; link when too many events
            events: [
                {
                    title: &#039;All Day Event&#039;,
                    start: &#039;2020-09-01&#039;
                },
                {
                    title: &#039;Long Event&#039;,
                    start: &#039;2020-09-07&#039;,
                    end: &#039;2020-09-10&#039;
                },
                {
                    groupId: 999,
                    title: &#039;Repeating Event&#039;,
                    start: &#039;2020-09-09T16:00:00&#039;
                },
                {
                    groupId: 999,
                    title: &#039;Repeating Event&#039;,
                    start: &#039;2020-09-16T16:00:00&#039;
                },
                {
                    title: &#039;Conference&#039;,
                    start: &#039;2020-09-11&#039;,
                    end: &#039;2020-09-13&#039;
                },
                {
                    title: &#039;Meeting&#039;,
                    start: &#039;2020-09-12T10:30:00&#039;,
                    end: &#039;2020-09-12T12:30:00&#039;
                },
                {
                    title: &#039;Lunch&#039;,
                    start: &#039;2020-09-12T12:00:00&#039;
                },
                {
                    title: &#039;Meeting&#039;,
                    start: &#039;2020-09-12T14:30:00&#039;
                },
                {
                    title: &#039;Happy Hour&#039;,
                    start: &#039;2020-09-12T17:30:00&#039;
                },
                {
                    title: &#039;Dinner&#039;,
                    start: &#039;2020-09-12T20:00:00&#039;
                },
                {
                    title: &#039;Birthday Party&#039;,
                    start: &#039;2020-09-13T07:00:00&#039;
                },
                {
                    title: &#039;Click for Google&#039;,
                    url: &#039;http://google.com/&#039;,
                    start: &#039;2020-09-28&#039;
                }
            ]
        });

        calendar.render();

        // build the locale selector&#039;s options
        calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
            var optionEl = document.createElement(&#039;option&#039;);
            optionEl.value = localeCode;
            optionEl.selected = localeCode == initialLocaleCode;
            optionEl.innerText = localeCode;
            localeSelectorEl.appendChild(optionEl);
        });

        // when the selected option changes, dynamically change the calendar option -- more info on Select2 on Change event: https://select2.org/programmatic-control/events
        $(localeSelectorEl).on(&#039;change&#039;, function () {
            if (this.value) {
                calendar.setOption(&#039;locale&#039;, this.value);
            }
        });

        calendar.render();
    }

    return {
        // Public Functions
        init: function () {
            examplelocales();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralFullCalendarLocalesDemos.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b9904bdb6" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Localization dropdown--&gt;
&lt;div class=&quot;mb-5&quot;&gt;
    &lt;label class=&quot;fs-4 fw-bold mb-3&quot;&gt;Select a Localization:&lt;/label&gt;
    &lt;select id=&quot;kt_docs_fullcalendar_locale_selector&quot; class=&quot;form-select mw-200px&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
        &lt;option&gt;&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;
&lt;!--end::Localization dropdown--&gt;

&lt;!--begin::Fullcalendar--&gt;
&lt;div id=&quot;kt_docs_fullcalendar_locales&quot;&gt;&lt;/div&gt;
&lt;!--end::Fullcalendar--&gt;</code></pre>
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
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/fullcalendar/locales.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


