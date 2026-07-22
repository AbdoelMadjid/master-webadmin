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
                            Drag n Drop Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Here's an example of draggable events from basic HTML components. For more info, please
                                visit the <a href="https://fullcalendar.io/docs/external-dragging" target="_blank">official
                                    documentation</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Draggable heading-->
                            <h4 class="mb-5">Draggable Events</h4>
                            <!--end::Draggable heading-->

                            <!--begin::Events listing-->
                            <div class="card card-bordered mb-10">
                                <div class="card-body fc">
                                    <div class="mb-5 "id='kt_docs_fullcalendar_events_list'>
                                        <div
                                            class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1'>
                                            <div class='fc-event-main'>Event 1</div>
                                        </div>
                                        <div
                                            class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1'>
                                            <div class='fc-event-main'>Event 2</div>
                                        </div>
                                        <div
                                            class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1'>
                                            <div class='fc-event-main'>Event 3</div>
                                        </div>
                                        <div
                                            class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1'>
                                            <div class='fc-event-main'>Event 4</div>
                                        </div>
                                        <div
                                            class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1'>
                                            <div class='fc-event-main'>Event 5</div>
                                        </div>
                                    </div>

                                    <!--begin::Checkbox-->
                                    <div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="drop-remove" />
                                            <label class="form-check-label" for="drop-remove">
                                                Remove event after drop
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Checkbox-->
                                </div>
                            </div>
                            <!--end::Events listing-->

                            <!--begin::Fullcalendar-->
                            <div id="kt_docs_fullcalendar_drag"></div>
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
                                            href="#kt_highlight_68e5b80c7f5df" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b80c7f5e3" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b80c7f5df" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTGeneralFullCalendarDragDemos = function () {
    // Private functions

    var exampleDrag = function () {
        // Initialize the external events -- for more info please visit the official site: https://fullcalendar.io/demos
        var containerEl = document.getElementById(&#039;kt_docs_fullcalendar_events_list&#039;);
        new FullCalendar.Draggable(containerEl, {
          itemSelector: &#039;.fc-event&#039;,
          eventData: function(eventEl) {
            return {
              title: eventEl.innerText.trim()
            }
          }
        });

        // initialize the calendar -- for more info please visit the official site: https://fullcalendar.io/demos
        var calendarEl = document.getElementById(&#039;kt_docs_fullcalendar_drag&#039;);
        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: &#039;prev,next today&#039;,
            center: &#039;title&#039;,
            right: &#039;dayGridMonth,timeGridWeek,timeGridDay,listWeek&#039;
          },
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar
          drop: function(arg) {
            // is the &quot;remove after drop&quot; checkbox checked?
            if (document.getElementById(&#039;drop-remove&#039;).checked) {
              // if so, remove the element from the &quot;Draggable Events&quot; list
              arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
          }
        });

        calendar.render();
    }

    return {
        // Public Functions
        init: function () {
            exampleDrag();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralFullCalendarDragDemos.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b80c7f5e3" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Draggable heading--&gt;
&lt;h4 class=&quot;mb-3&quot;&gt;Draggable Events&lt;/h4&gt;
&lt;!--end::Draggable heading--&gt;

&lt;!--begin::Events listing--&gt;
&lt;div id=&quot;external-events-list&quot; class=&quot;d-flex flex-wrap&quot;&gt;
    &lt;div class=&quot;fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1&quot;&gt;
        &lt;div class=&quot;fc-event-main&quot;&gt;Event 1&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1&quot;&gt;
        &lt;div class=&quot;fc-event-main&quot;&gt;Event 2&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1&quot;&gt;
        &lt;div class=&quot;fc-event-main&quot;&gt;Event 3&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1&quot;&gt;
        &lt;div class=&quot;fc-event-main&quot;&gt;Event 4&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1&quot;&gt;
        &lt;div class=&quot;fc-event-main&quot;&gt;Event 5&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Events listing--&gt;

&lt;!--begin::Checkbox--&gt;
&lt;div class=&quot;mt-2 my-5&quot;&gt;
    &lt;div class=&quot;form-check form-check-custom form-check-solid&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;drop-remove&quot; /&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;drop-remove&quot;&gt;
            Remove event after drop
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!--end::Checkbox--&gt;

&lt;!--begin::Fullcalendar--&gt;
&lt;div id=&quot;kt_docs_fullcalendar_drag&quot;&gt;&lt;/div&gt;
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
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/documentation/general/fullcalendar/drag-n-drop.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


