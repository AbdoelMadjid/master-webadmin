"use strict";
var KTFlotDemoStack = {
    init: function () {
        !(function () {
            for (var t = [], a = 0; a <= 10; a += 1)
                t.push([a, parseInt(30 * Math.random())]);
            var i = [];
            for (a = 0; a <= 10; a += 1)
                i.push([a, parseInt(30 * Math.random())]);
            var e = [];
            for (a = 0; a <= 10; a += 1)
                e.push([a, parseInt(30 * Math.random())]);
            var s = 0,
                l = !0,
                n = !1,
                r = !1;
            function o() {
                $.plot(
                    $("#kt_docs_flot_stack"),
                    [
                        {
                            label: "sales",
                            data: t,
                            lines: { lineWidth: 1 },
                            shadowSize: 0,
                        },
                        {
                            label: "tax",
                            data: i,
                            lines: { lineWidth: 1 },
                            shadowSize: 0,
                        },
                        {
                            label: "profit",
                            data: e,
                            lines: { lineWidth: 1 },
                            shadowSize: 0,
                        },
                    ],
                    {
                        colors: [
                            KTUtil.getCssVariableValue("--bs-danger"),
                            KTUtil.getCssVariableValue("--bs-primary"),
                        ],
                        series: {
                            stack: s,
                            lines: {
                                show: n,
                                fill: !0,
                                steps: r,
                                lineWidth: 0,
                            },
                            bars: {
                                show: l,
                                barWidth: 0.5,
                                lineWidth: 0,
                                shadowSize: 0,
                                align: "center",
                            },
                        },
                        grid: {
                            tickColor:
                                KTUtil.getCssVariableValue("--bs-gray-300"),
                            borderColor:
                                KTUtil.getCssVariableValue("--bs-gray-300"),
                            borderWidth: 1,
                        },
                    },
                );
            }
            ($(".stackControls input").click(function (t) {
                (t.preventDefault(),
                    (s = "With stacking" == $(this).val() || null),
                    o());
            }),
                $(".graphControls input").click(function (t) {
                    (t.preventDefault(),
                        (l = -1 != $(this).val().indexOf("Bars")),
                        (n = -1 != $(this).val().indexOf("Lines")),
                        (r = -1 != $(this).val().indexOf("steps")),
                        o());
                }),
                o());
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFlotDemoStack.init();
});
