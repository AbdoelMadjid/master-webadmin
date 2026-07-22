"use strict";
var KTFlotDemoPie = {
    init: function () {
        var a;
        ((a = [
            {
                label: "CSS",
                data: 10,
                color: KTUtil.getCssVariableValue("--bs-primary"),
            },
            {
                label: "HTML5",
                data: 40,
                color: KTUtil.getCssVariableValue("--bs-success"),
            },
            {
                label: "PHP",
                data: 30,
                color: KTUtil.getCssVariableValue("--bs-danger"),
            },
            {
                label: "Angular",
                data: 20,
                color: KTUtil.getCssVariableValue("--bs-warning"),
            },
        ]),
            $.plot($("#kt_docs_flot_pie"), a, {
                series: { pie: { show: !0 } },
            }));
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTFlotDemoPie.init();
});
