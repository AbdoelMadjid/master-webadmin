"use strict";
var KTFormsTempusDominusDatepickerDemos = {
    init: function (e) {
        (new tempusDominus.TempusDominus(
            document.getElementById("kt_td_picker_basic"),
            {},
        ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_button"),
                {},
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_localization"),
                {
                    localization: {
                        locale: "de",
                        startOfTheWeek: 1,
                        format: "dd/MM/yyyy",
                    },
                },
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_date_only"),
                {
                    display: {
                        viewMode: "calendar",
                        components: {
                            decades: !0,
                            year: !0,
                            month: !0,
                            date: !0,
                            hours: !1,
                            minutes: !1,
                            seconds: !1,
                        },
                    },
                },
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_time_only"),
                {
                    display: {
                        viewMode: "clock",
                        components: {
                            decades: !1,
                            year: !1,
                            month: !1,
                            date: !1,
                            hours: !0,
                            minutes: !0,
                            seconds: !1,
                        },
                    },
                },
            ),
            (function () {
                const e = document.getElementById("kt_td_picker_linked_1"),
                    t = new tempusDominus.TempusDominus(e),
                    s = new tempusDominus.TempusDominus(
                        document.getElementById("kt_td_picker_linked_2"),
                        { useCurrent: !1 },
                    );
                (e.addEventListener(
                    tempusDominus.Namespace.events.change,
                    (e) => {
                        s.updateOptions({
                            restrictions: { minDate: e.detail.date },
                        });
                    },
                ),
                    s.subscribe(tempusDominus.Namespace.events.change, (e) => {
                        t.updateOptions({ restrictions: { maxDate: e.date } });
                    }));
            })(),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_custom_icons"),
                {
                    display: {
                        icons: {
                            time: "ki-solid ki-time fs-3",
                            date: "ki-solid ki-calendar fs-3",
                            up: "ki-solid ki-up fs-3",
                            down: "ki-solid ki-down fs-3",
                            previous: "ki-solid ki-left fs-3",
                            next: "ki-solid ki-right fs-3",
                            today: "ki-solid ki-calendar-tick fs-3",
                            clear: "ki-solid ki-trash fs-3",
                            close: "ki-solid ki-cross fs-2",
                        },
                        buttons: { today: !0, clear: !0, close: !0 },
                    },
                },
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_inline"),
                { display: { inline: !0 } },
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_multiple_dates"),
                { multipleDates: !0 },
            ),
            new tempusDominus.TempusDominus(
                document.getElementById("kt_td_picker_modal"),
                {},
            ));
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFormsTempusDominusDatepickerDemos.init();
});
