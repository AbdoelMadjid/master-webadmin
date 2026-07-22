"use strict";
var KTJSTreeBasic = {
    init: function () {
        $("#kt_docs_jstree_basic").jstree({
            core: { themes: { responsive: !1 } },
            types: {
                default: { icon: "ki-outline ki-folder" },
                file: { icon: "ki-outline ki-file" },
            },
            plugins: ["types"],
        });
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTJSTreeBasic.init();
});
