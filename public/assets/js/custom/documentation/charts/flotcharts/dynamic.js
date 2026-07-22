"use strict";
var KTFlotDemoDynamic = {
    init: function () {
        !(function () {
            var t = [],
                i = 250;
            function a() {
                for (t.length > 0 && (t = t.slice(1)); t.length < i; ) {
                    var a =
                        (t.length > 0 ? t[t.length - 1] : 50) +
                        10 * Math.random() -
                        5;
                    (a < 0 && (a = 0), a > 100 && (a = 100), t.push(a));
                }
                for (var e = [], o = 0; o < t.length; ++o) e.push([o, t[o]]);
                return e;
            }
            var e = {
                    colors: [
                        KTUtil.getCssVariableValue("--bs-danger"),
                        KTUtil.getCssVariableValue("--bs-primary"),
                    ],
                    series: { shadowSize: 1 },
                    lines: {
                        show: !0,
                        lineWidth: 0.5,
                        fill: !0,
                        fillColor: {
                            colors: [{ opacity: 0.1 }, { opacity: 1 }],
                        },
                    },
                    yaxis: {
                        min: 0,
                        max: 100,
                        tickColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                        tickFormatter: function (t) {
                            return t + "%";
                        },
                    },
                    xaxis: { show: !1 },
                    colors: [KTUtil.getCssVariableValue("--bs-primary")],
                    grid: {
                        tickColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                        borderWidth: 0,
                    },
                },
                o = $.plot($("#kt_docs_flot_dynamic"), [a()], e);
            !(function t() {
                (o.setData([a()]), o.draw(), setTimeout(t, 30));
            })();
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFlotDemoDynamic.init();
});
