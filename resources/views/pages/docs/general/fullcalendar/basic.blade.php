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
                                Here's how a basic Fullcalendar will looks like with data populated.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div id="kt_docs_fullcalendar_basic"></div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="pt-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b72d1aaad" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b72d1aab1" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b72d1aaad" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTGeneralFullCalendarBasicDemos = function () {
    // Private functions

    var exampleBasic = function () {
        var todayDate = moment().startOf(&#039;day&#039;);
        var YM = todayDate.format(&#039;YYYY-MM&#039;);
        var YESTERDAY = todayDate.clone().subtract(1, &#039;day&#039;).format(&#039;YYYY-MM-DD&#039;);
        var TODAY = todayDate.format(&#039;YYYY-MM-DD&#039;);
        var TOMORROW = todayDate.clone().add(1, &#039;day&#039;).format(&#039;YYYY-MM-DD&#039;);

        var calendarEl = document.getElementById(&#039;kt_docs_fullcalendar_basic&#039;);
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: &#039;prev,next today&#039;,
                center: &#039;title&#039;,
                right: &#039;dayGridMonth,timeGridWeek,timeGridDay,listMonth&#039;
            },

            height: 800,
            contentHeight: 780,
            aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

            nowIndicator: true,
            now: TODAY + &#039;T09:25:00&#039;, // just for demo

            views: {
                dayGridMonth: { buttonText: &#039;month&#039; },
                timeGridWeek: { buttonText: &#039;week&#039; },
                timeGridDay: { buttonText: &#039;day&#039; }
            },

            initialView: &#039;dayGridMonth&#039;,
            initialDate: TODAY,

            editable: true,
            dayMaxEvents: true, // allow &quot;more&quot; link when too many events
            navLinks: true,
            events: [
                {
                    title: &#039;All Day Event&#039;,
                    start: YM + &#039;-01&#039;,
                    description: &#039;Toto lorem ipsum dolor sit incid idunt ut&#039;,
                    className: &quot;fc-event-danger fc-event-solid-warning&quot;
                },
                {
                    title: &#039;Reporting&#039;,
                    start: YM + &#039;-14T13:30:00&#039;,
                    description: &#039;Lorem ipsum dolor incid idunt ut labore&#039;,
                    end: YM + &#039;-14&#039;,
                    className: &quot;fc-event-success&quot;
                },
                {
                    title: &#039;Company Trip&#039;,
                    start: YM + &#039;-02&#039;,
                    description: &#039;Lorem ipsum dolor sit tempor incid&#039;,
                    end: YM + &#039;-03&#039;,
                    className: &quot;fc-event-primary&quot;
                },
                {
                    title: &#039;ICT Expo 2017 - Product Release&#039;,
                    start: YM + &#039;-03&#039;,
                    description: &#039;Lorem ipsum dolor sit tempor inci&#039;,
                    end: YM + &#039;-05&#039;,
                    className: &quot;fc-event-light fc-event-solid-primary&quot;
                },
                {
                    title: &#039;Dinner&#039;,
                    start: YM + &#039;-12&#039;,
                    description: &#039;Lorem ipsum dolor sit amet, conse ctetur&#039;,
                    end: YM + &#039;-10&#039;
                },
                {
                    id: 999,
                    title: &#039;Repeating Event&#039;,
                    start: YM + &#039;-09T16:00:00&#039;,
                    description: &#039;Lorem ipsum dolor sit ncididunt ut labore&#039;,
                    className: &quot;fc-event-danger&quot;
                },
                {
                    id: 1000,
                    title: &#039;Repeating Event&#039;,
                    description: &#039;Lorem ipsum dolor sit amet, labore&#039;,
                    start: YM + &#039;-16T16:00:00&#039;
                },
                {
                    title: &#039;Conference&#039;,
                    start: YESTERDAY,
                    end: TOMORROW,
                    description: &#039;Lorem ipsum dolor eius mod tempor labore&#039;,
                    className: &quot;fc-event-primary&quot;
                },
                {
                    title: &#039;Meeting&#039;,
                    start: TODAY + &#039;T10:30:00&#039;,
                    end: TODAY + &#039;T12:30:00&#039;,
                    description: &#039;Lorem ipsum dolor eiu idunt ut labore&#039;
                },
                {
                    title: &#039;Lunch&#039;,
                    start: TODAY + &#039;T12:00:00&#039;,
                    className: &quot;fc-event-info&quot;,
                    description: &#039;Lorem ipsum dolor sit amet, ut labore&#039;
                },
                {
                    title: &#039;Meeting&#039;,
                    start: TODAY + &#039;T14:30:00&#039;,
                    className: &quot;fc-event-warning&quot;,
                    description: &#039;Lorem ipsum conse ctetur adipi scing&#039;
                },
                {
                    title: &#039;Happy Hour&#039;,
                    start: TODAY + &#039;T17:30:00&#039;,
                    className: &quot;fc-event-info&quot;,
                    description: &#039;Lorem ipsum dolor sit amet, conse ctetur&#039;
                },
                {
                    title: &#039;Dinner&#039;,
                    start: TOMORROW + &#039;T05:00:00&#039;,
                    className: &quot;fc-event-solid-danger fc-event-light&quot;,
                    description: &#039;Lorem ipsum dolor sit ctetur adipi scing&#039;
                },
                {
                    title: &#039;Birthday Party&#039;,
                    start: TOMORROW + &#039;T07:00:00&#039;,
                    className: &quot;fc-event-primary&quot;,
                    description: &#039;Lorem ipsum dolor sit amet, scing&#039;
                },
                {
                    title: &#039;Click for Google&#039;,
                    url: &#039;http://google.com/&#039;,
                    start: YM + &#039;-28&#039;,
                    className: &quot;fc-event-solid-info fc-event-light&quot;,
                    description: &#039;Lorem ipsum dolor sit amet, labore&#039;
                }
            ],

            eventContent: function (info) {
                var element = $(info.el);

                if (info.event.extendedProps &amp;&amp; info.event.extendedProps.description) {
                    if (element.hasClass(&#039;fc-day-grid-event&#039;)) {
                        element.data(&#039;content&#039;, info.event.extendedProps.description);
                        element.data(&#039;placement&#039;, &#039;top&#039;);
                        KTApp.initPopover(element);
                    } else if (element.hasClass(&#039;fc-time-grid-event&#039;)) {
                        element.find(&#039;.fc-title&#039;).append(&#039;&lt;div class=&quot;fc-description&quot;&gt;&#039; + info.event.extendedProps.description + &#039;&lt;/div&gt;&#039;);
                    } else if (element.find(&#039;.fc-list-item-title&#039;).lenght !== 0) {
                        element.find(&#039;.fc-list-item-title&#039;).append(&#039;&lt;div class=&quot;fc-description&quot;&gt;&#039; + info.event.extendedProps.description + &#039;&lt;/div&gt;&#039;);
                    }
                }
            }
        });

        calendar.render();
    }

    return {
        // Public Functions
        init: function () {
            exampleBasic();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralFullCalendarBasicDemos.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b72d1aab1" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_fullcalendar_populated&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/fullcalendar/basic.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


