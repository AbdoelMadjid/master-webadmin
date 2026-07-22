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
                            Selectable Dates Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Click and drag your pointer over some dates. You will be asked to create an event via the
                                API.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Fullcalendar-->
                            <div id="kt_docs_fullcalendar_selectable"></div>
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
                                            href="#kt_highlight_68e5b8d84bd91" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b8d84bd95" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b8d84bd91" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTGeneralFullCalendarSelectDemos = function () {
    // Private functions

    var exampleSelect = function () {
        // Define variables
        var calendarEl = document.getElementById(&#039;kt_docs_fullcalendar_selectable&#039;);

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: &#039;prev,next today&#039;,
                center: &#039;title&#039;,
                right: &#039;dayGridMonth,timeGridWeek,timeGridDay&#039;
            },
            initialDate: &#039;2020-09-12&#039;,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,

            // Create new event
            select: function (arg) {
                Swal.fire({
                    html: &#039;&lt;div class=&quot;mb-7&quot;&gt;Create new event?&lt;/div&gt;&lt;div class=&quot;fw-bolder mb-5&quot;&gt;Event Name:&lt;/div&gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;event_name&quot; /&gt;&#039;,
                    icon: &quot;info&quot;,
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: &quot;Yes, create it!&quot;,
                    cancelButtonText: &quot;No, return&quot;,
                    customClass: {
                        confirmButton: &quot;btn btn-primary&quot;,
                        cancelButton: &quot;btn btn-active-light&quot;
                    }
                }).then(function (result) {
                    if (result.value) {
                        var title = document.querySelector(&#039;input[name=&quot;event_name&quot;]&#039;).value;
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                allDay: arg.allDay
                            })
                        }
                        calendar.unselect()
                    } else if (result.dismiss === &#039;cancel&#039;) {
                        Swal.fire({
                            text: &quot;Event creation was declined!.&quot;,
                            icon: &quot;error&quot;,
                            buttonsStyling: false,
                            confirmButtonText: &quot;Ok, got it!&quot;,
                            customClass: {
                                confirmButton: &quot;btn btn-primary&quot;,
                            }
                        });
                    }
                });
            },

            // Delete event
            eventClick: function (arg) {
                Swal.fire({
                    text: &#039;Are you sure you want to delete this event?&#039;,
                    icon: &quot;warning&quot;,
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: &quot;Yes, delete it!&quot;,
                    cancelButtonText: &quot;No, return&quot;,
                    customClass: {
                        confirmButton: &quot;btn btn-primary&quot;,
                        cancelButton: &quot;btn btn-active-light&quot;
                    }
                }).then(function (result) {
                    if (result.value) {
                        arg.event.remove()
                    } else if (result.dismiss === &#039;cancel&#039;) {
                        Swal.fire({
                            text: &quot;Event was not deleted!.&quot;,
                            icon: &quot;error&quot;,
                            buttonsStyling: false,
                            confirmButtonText: &quot;Ok, got it!&quot;,
                            customClass: {
                                confirmButton: &quot;btn btn-primary&quot;,
                            }
                        });
                    }
                });
            },
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
    }

    return {
        // Public Functions
        init: function () {
            exampleSelect();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralFullCalendarSelectDemos.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b8d84bd95" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;div id=&quot;kt_docs_fullcalendar_selectable&quot;&gt;&lt;/div&gt;</code></pre>
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
    <script src="{{ asset('assets/js/custom/documentation/general/fullcalendar/selectable-dates.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


