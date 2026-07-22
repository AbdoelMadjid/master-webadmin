"use strict";
var KTFlotDemoBasic = {
    init: function () {
        !(function () {
            for (var a = [], i = 0; i < 2 * Math.PI; i += 0.25)
                a.push([i, Math.sin(i)]);
            var s = [];
            for (i = 0; i < 2 * Math.PI; i += 0.25) s.push([i, Math.cos(i)]);
            var t = [];
            for (i = 0; i < 2 * Math.PI; i += 0.1) t.push([i, Math.tan(i)]);
            $.plot(
                $("#kt_docs_flot_basic"),
                [
                    {
                        label: "sin(x)",
                        data: a,
                        lines: { lineWidth: 1 },
                        shadowSize: 0,
                    },
                    {
                        label: "cos(x)",
                        data: s,
                        lines: { lineWidth: 1 },
                        shadowSize: 0,
                    },
                    {
                        label: "tan(x)",
                        data: t,
                        lines: { lineWidth: 1 },
                        shadowSize: 0,
                    },
                ],
                {
                    colors: [
                        KTUtil.getCssVariableValue("--bs-success"),
                        KTUtil.getCssVariableValue("--bs-primary"),
                        KTUtil.getCssVariableValue("--bs-danger"),
                    ],
                    series: {
                        lines: { show: !0 },
                        points: { show: !0, fill: !0, radius: 3, lineWidth: 1 },
                    },
                    xaxis: {
                        tickColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                        ticks: [
                            0,
                            [Math.PI / 2, "π/2"],
                            [Math.PI, "π"],
                            [(3 * Math.PI) / 2, "3π/2"],
                            [2 * Math.PI, "2π"],
                        ],
                    },
                    yaxis: {
                        tickColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                        ticks: 10,
                        min: -2,
                        max: 2,
                    },
                    grid: {
                        borderColor:
                            KTUtil.getCssVariableValue("--bs-gray-300"),
                        borderWidth: 1,
                    },
                },
            );
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFlotDemoBasic.init();
});
