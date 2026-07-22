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
                            Local JS Timezone Example
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="mb-3">
                                Fullcalendar's example with timezones with local JS logic. For more info on server side
                                logic, please visit the <a href="https://fullcalendar.io/docs/timeZone"
                                    target="_blank">official documentation</a>.
                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Localization dropdown-->
                            <div class="mb-15 w-300px">
                                <label class="fs-4 fw-bold mb-3">Select a Timezone:</label>
                                <select id='kt_docs_fullcalendar_timezone_selector' class="form-select"
                                    data-control="select2" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="-39600">(GMT-11:00) International Date Line West</option>
                                    <option value="-39600">(GMT-11:00) Midway Island</option>
                                    <option value="-39600">(GMT-11:00) Samoa</option>
                                    <option value="-36000">(GMT-10:00) Hawaii</option>
                                    <option value="-28800">(GMT-08:00) Alaska</option>
                                    <option value="-25200">(GMT-07:00) Pacific Time (US & Canada)</option>
                                    <option value="-25200">(GMT-07:00) Tijuana</option>
                                    <option value="-25200">(GMT-07:00) Arizona</option>
                                    <option value="-21600">(GMT-06:00) Mountain Time (US & Canada)</option>
                                    <option value="-21600">(GMT-06:00) Chihuahua</option>
                                    <option value="-21600">(GMT-06:00) Mazatlan</option>
                                    <option value="-21600">(GMT-06:00) Saskatchewan</option>
                                    <option value="-21600">(GMT-06:00) Central America</option>
                                    <option value="-18000">(GMT-05:00) Central Time (US & Canada)</option>
                                    <option value="-18000">(GMT-05:00) Guadalajara</option>
                                    <option value="-18000">(GMT-05:00) Mexico City</option>
                                    <option value="-18000">(GMT-05:00) Monterrey</option>
                                    <option value="-18000">(GMT-05:00) Bogota</option>
                                    <option value="-18000">(GMT-05:00) Lima</option>
                                    <option value="-18000">(GMT-05:00) Quito</option>
                                    <option value="-14400">(GMT-04:00) Eastern Time (US & Canada)</option>
                                    <option value="-14400">(GMT-04:00) Indiana (East)</option>
                                    <option value="-14400">(GMT-04:00) Caracas</option>
                                    <option value="-14400">(GMT-04:00) La Paz</option>
                                    <option value="-14400">(GMT-04:00) Georgetown</option>
                                    <option value="-10800">(GMT-03:00) Atlantic Time (Canada)</option>
                                    <option value="-10800">(GMT-03:00) Santiago</option>
                                    <option value="-10800">(GMT-03:00) Brasilia</option>
                                    <option value="-10800">(GMT-03:00) Buenos Aires</option>
                                    <option value="-9000">(GMT-02:30) Newfoundland</option>
                                    <option value="-7200">(GMT-02:00) Greenland</option>
                                    <option value="-7200">(GMT-02:00) Mid-Atlantic</option>
                                    <option value="-3600">(GMT-01:00) Cape Verde Is.</option>
                                    <option value="0">(GMT) Azores</option>
                                    <option value="0">(GMT) Monrovia</option>
                                    <option value="0">(GMT) UTC</option>
                                    <option value="3600">(GMT+01:00) Dublin</option>
                                    <option value="3600">(GMT+01:00) Edinburgh</option>
                                    <option value="3600">(GMT+01:00) Lisbon</option>
                                    <option value="3600">(GMT+01:00) London</option>
                                    <option value="3600">(GMT+01:00) Casablanca</option>
                                    <option value="3600">(GMT+01:00) West Central Africa</option>
                                    <option value="7200">(GMT+02:00) Belgrade</option>
                                    <option value="7200">(GMT+02:00) Bratislava</option>
                                    <option value="7200">(GMT+02:00) Budapest</option>
                                    <option value="7200">(GMT+02:00) Ljubljana</option>
                                    <option value="7200">(GMT+02:00) Prague</option>
                                    <option value="7200">(GMT+02:00) Sarajevo</option>
                                    <option value="7200">(GMT+02:00) Skopje</option>
                                    <option value="7200">(GMT+02:00) Warsaw</option>
                                    <option value="7200">(GMT+02:00) Zagreb</option>
                                    <option value="7200">(GMT+02:00) Brussels</option>
                                    <option value="7200">(GMT+02:00) Copenhagen</option>
                                    <option value="7200">(GMT+02:00) Madrid</option>
                                    <option value="7200">(GMT+02:00) Paris</option>
                                    <option value="7200">(GMT+02:00) Amsterdam</option>
                                    <option value="7200">(GMT+02:00) Berlin</option>
                                    <option value="7200">(GMT+02:00) Bern</option>
                                    <option value="7200">(GMT+02:00) Rome</option>
                                    <option value="7200">(GMT+02:00) Stockholm</option>
                                    <option value="7200">(GMT+02:00) Vienna</option>
                                    <option value="7200">(GMT+02:00) Cairo</option>
                                    <option value="7200">(GMT+02:00) Harare</option>
                                    <option value="7200">(GMT+02:00) Pretoria</option>
                                    <option value="10800">(GMT+03:00) Bucharest</option>
                                    <option value="10800">(GMT+03:00) Helsinki</option>
                                    <option value="10800">(GMT+03:00) Kiev</option>
                                    <option value="10800">(GMT+03:00) Kyiv</option>
                                    <option value="10800">(GMT+03:00) Riga</option>
                                    <option value="10800">(GMT+03:00) Sofia</option>
                                    <option value="10800">(GMT+03:00) Tallinn</option>
                                    <option value="10800">(GMT+03:00) Vilnius</option>
                                    <option value="10800">(GMT+03:00) Athens</option>
                                    <option value="10800">(GMT+03:00) Istanbul</option>
                                    <option value="10800">(GMT+03:00) Minsk</option>
                                    <option value="10800">(GMT+03:00) Jerusalem</option>
                                    <option value="10800">(GMT+03:00) Moscow</option>
                                    <option value="10800">(GMT+03:00) St. Petersburg</option>
                                    <option value="10800">(GMT+03:00) Volgograd</option>
                                    <option value="10800">(GMT+03:00) Kuwait</option>
                                    <option value="10800">(GMT+03:00) Riyadh</option>
                                    <option value="10800">(GMT+03:00) Nairobi</option>
                                    <option value="10800">(GMT+03:00) Baghdad</option>
                                    <option value="14400">(GMT+04:00) Abu Dhabi</option>
                                    <option value="14400">(GMT+04:00) Muscat</option>
                                    <option value="14400">(GMT+04:00) Baku</option>
                                    <option value="14400">(GMT+04:00) Tbilisi</option>
                                    <option value="14400">(GMT+04:00) Yerevan</option>
                                    <option value="16200">(GMT+04:30) Tehran</option>
                                    <option value="16200">(GMT+04:30) Kabul</option>
                                    <option value="18000">(GMT+05:00) Ekaterinburg</option>
                                    <option value="18000">(GMT+05:00) Islamabad</option>
                                    <option value="18000">(GMT+05:00) Karachi</option>
                                    <option value="18000">(GMT+05:00) Tashkent</option>
                                    <option value="19800">(GMT+05:30) Chennai</option>
                                    <option value="19800">(GMT+05:30) Kolkata</option>
                                    <option value="19800">(GMT+05:30) Mumbai</option>
                                    <option value="19800">(GMT+05:30) New Delhi</option>
                                    <option value="19800">(GMT+05:30) Sri Jayawardenepura</option>
                                    <option value="20700">(GMT+05:45) Kathmandu</option>
                                    <option value="21600">(GMT+06:00) Astana</option>
                                    <option value="21600">(GMT+06:00) Dhaka</option>
                                    <option value="21600">(GMT+06:00) Almaty</option>
                                    <option value="21600">(GMT+06:00) Urumqi</option>
                                    <option value="23400">(GMT+06:30) Rangoon</option>
                                    <option value="25200">(GMT+07:00) Novosibirsk</option>
                                    <option value="25200">(GMT+07:00) Bangkok</option>
                                    <option value="25200">(GMT+07:00) Hanoi</option>
                                    <option value="25200">(GMT+07:00) Jakarta</option>
                                    <option value="25200">(GMT+07:00) Krasnoyarsk</option>
                                    <option value="28800">(GMT+08:00) Beijing</option>
                                    <option value="28800">(GMT+08:00) Chongqing</option>
                                    <option value="28800">(GMT+08:00) Hong Kong</option>
                                    <option value="28800">(GMT+08:00) Kuala Lumpur</option>
                                    <option value="28800">(GMT+08:00) Singapore</option>
                                    <option value="28800">(GMT+08:00) Taipei</option>
                                    <option value="28800">(GMT+08:00) Perth</option>
                                    <option value="28800">(GMT+08:00) Irkutsk</option>
                                    <option value="28800">(GMT+08:00) Ulaan Bataar</option>
                                    <option value="32400">(GMT+09:00) Seoul</option>
                                    <option value="32400">(GMT+09:00) Osaka</option>
                                    <option value="32400">(GMT+09:00) Sapporo</option>
                                    <option value="32400">(GMT+09:00) Tokyo</option>
                                    <option value="32400">(GMT+09:00) Yakutsk</option>
                                    <option value="34200">(GMT+09:30) Darwin</option>
                                    <option value="34200">(GMT+09:30) Adelaide</option>
                                    <option value="36000">(GMT+10:00) Canberra</option>
                                    <option value="36000">(GMT+10:00) Melbourne</option>
                                    <option value="36000">(GMT+10:00) Sydney</option>
                                    <option value="36000">(GMT+10:00) Brisbane</option>
                                    <option value="36000">(GMT+10:00) Hobart</option>
                                    <option value="36000">(GMT+10:00) Vladivostok</option>
                                    <option value="36000">(GMT+10:00) Guam</option>
                                    <option value="36000">(GMT+10:00) Port Moresby</option>
                                    <option value="36000">(GMT+10:00) Solomon Is.</option>
                                    <option value="39600">(GMT+11:00) Magadan</option>
                                    <option value="39600">(GMT+11:00) New Caledonia</option>
                                    <option value="43200">(GMT+12:00) Fiji</option>
                                    <option value="43200">(GMT+12:00) Kamchatka</option>
                                    <option value="43200">(GMT+12:00) Marshall Is.</option>
                                    <option value="43200">(GMT+12:00) Auckland</option>
                                    <option value="43200">(GMT+12:00) Wellington</option>
                                    <option value="46800">(GMT+13:00) Nuku'alofa</option>
                                </select>
                            </div>
                            <!--end::Localization dropdown-->

                            <!--begin::Fullcalendar-->
                            <div id="kt_docs_fullcalendar_timezone"></div>
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
                                            href="#kt_highlight_68e5b9d8438aa" role="tab">JAVASCRIPT</a></li>
                                    <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                            href="#kt_highlight_68e5b9d8438b1" role="tab">HTML</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_highlight_68e5b9d8438aa"
                                        role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTGeneralFullCalendarTimezoneDemos = function () {
    // Private functions

    var exampleTimezone = function () {
        // Define variables
        var initialTimeZone = &#039;local&#039;;
        var timeZoneSelectorEl = document.getElementById(&#039;kt_docs_fullcalendar_timezone_selector&#039;);
        var calendarEl = document.getElementById(&#039;kt_docs_fullcalendar_timezone&#039;);
        var todayDate = moment().startOf(&#039;day&#039;);
        var YM = todayDate.format(&#039;YYYY-MM&#039;);
        var YESTERDAY = todayDate.clone().subtract(1, &#039;day&#039;).format(&#039;YYYY-MM-DD&#039;);
        var TODAY = todayDate.format(&#039;YYYY-MM-DD&#039;);
        var TOMORROW = todayDate.clone().add(1, &#039;day&#039;).format(&#039;YYYY-MM-DD&#039;);
        var eventsArray = [
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
        ];

        // Initialize the external events -- for more info please visit the official site: https://fullcalendar.io/demos
        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: initialTimeZone,
            headerToolbar: {
                left: &#039;prev,next today&#039;,
                center: &#039;title&#039;,
                right: &#039;dayGridMonth,timeGridWeek,timeGridDay,listWeek&#039;
            },
            initialDate: TODAY,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            selectable: true,
            dayMaxEvents: true, // allow &quot;more&quot; link when too many events

            eventTimeFormat: { hour: &#039;numeric&#039;, minute: &#039;2-digit&#039;, timeZoneName: &#039;short&#039; },
            events: eventsArray,
        });

        calendar.render();

        // when the timezone selector changes, dynamically change the calendar option -- more info on Select2 on Change event: https://select2.org/programmatic-control/events
        $(timeZoneSelectorEl).on(&#039;change&#039;, function () {
            calendar.setOption(&#039;timeZone&#039;, &#039;UTC&#039;);

            // Remove all events
            const removeEvents = calendar.getEvents();
            removeEvents.forEach(event =&gt; {
                event.remove();
            });

            // Add events with new timezone offset
            const newEvents = eventsArray;
            newEvents.forEach(event =&gt; {
                var start;
                var end;

                if(this.value &lt; 0){
                    start = moment(event.start).subtract(this.value.replace(/\D/g,&#039;&#039;), &#039;seconds&#039;).format(getFormat(event.start));
                    end = event.end ? moment(event.end).subtract(this.value.replace(/\D/g,&#039;&#039;), &#039;seconds&#039;).format(getFormat(event.end)) : start;
                } else {
                    start = moment(event.start).add(this.value, &#039;seconds&#039;).format(getFormat(event.start));
                    end = event.end ? moment(event.end).add(this.value, &#039;seconds&#039;).format(getFormat(event.end)) : start;
                }

                calendar.addEvent({
                    title: event.title,
                    start: start,
                    end: end
                });
            });

            calendar.render();
        });

        // Dynamic date format generator
        const getFormat = (d) =&gt; {
            if(d.includes(&#039;T&#039;)){
                return &#039;YYYY-MM-DDTHH:mm:ss&#039;;
            } else {
                return &#039;YYYY-MM-DD&#039;;
            }
        }
    }

    return {
        // Public Functions
        init: function () {
            exampleTimezone();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralFullCalendarTimezoneDemos.init();
});</code></pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="kt_highlight_68e5b9d8438b1" role="tabpanel">
                                        <div class="highlight-code">
                                            <pre class="language-html" style="height:400px"><code class="language-html">&lt;!--begin::Localization dropdown--&gt;
&lt;div class=&quot;mb-5&quot;&gt;
    &lt;label class=&quot;fs-4 fw-bold mb-3&quot;&gt;Select a Timezone:&lt;/label&gt;
    &lt;select id=&quot;kt_docs_fullcalendar_timezone_selector&quot; class=&quot;form-select mw-200px&quot; data-control=&quot;select2&quot; data-placeholder=&quot;Select an option&quot;&gt;
        ...
    &lt;/select&gt;
&lt;/div&gt;
&lt;!--end::Localization dropdown--&gt;

&lt;!--begin::Fullcalendar--&gt;
&lt;div id=&quot;kt_docs_fullcalendar_timezone&quot;&gt;&lt;/div&gt;
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
    <script src="{{ asset('assets/js/custom/documentation/general/fullcalendar/timezone.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection


