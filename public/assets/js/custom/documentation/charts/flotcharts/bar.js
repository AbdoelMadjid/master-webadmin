"use strict";
var KTFlotDemoBar = {
    init: function () {
        var r;
        ((r = {
            colors: [KTUtil.getCssVariableValue("--bs-primary")],
            series: { bars: { show: !0 } },
            bars: {
                horizontal: !0,
                barWidth: 6,
                lineWidth: 0,
                shadowSize: 0,
                align: "left",
            },
            grid: {
                tickColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                borderColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                borderWidth: 1,
            },
        }),
            $.plot(
                $("#kt_docs_flot_bar"),
                [
                    [
                        [10, 10],
                        [20, 20],
                        [30, 30],
                        [40, 40],
                        [50, 50],
                        [60, 60],
                        [70, 70],
                        [80, 80],
                        [90, 90],
                        [100, 100],
                    ],
                ],
                r,
            ));
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFlotDemoBar.init();
});
