"use strict";
var KTJSTreeCheckable = {
    init: function () {
        $("#kt_docs_jstree_checkable").jstree({
            plugins: ["wholerow", "checkbox", "types"],
            core: {
                themes: { responsive: !1 },
                data: [
                    {
                        text: "Same but with checkboxes",
                        children: [
                            {
                                text: "initially selected",
                                state: { selected: !0 },
                            },
                            {
                                text: "custom icon",
                                icon: "ki-solid ki-timer text-danger",
                            },
                            {
                                text: "initially open",
                                icon: "ki-solid ki-folder text-default",
                                state: { opened: !0 },
                                children: ["Another node"],
                            },
                            {
                                text: "custom icon",
                                icon: "ki-solid ki-timer text-waring",
                            },
                            {
                                text: "disabled node",
                                icon: "ki-solid ki-check text-success",
                                state: { disabled: !0 },
                            },
                        ],
                    },
                    "And wholerow selection",
                ],
            },
            types: {
                default: { icon: "ki-solid ki-folder text-warning" },
                file: { icon: "ki-solid ki-file  text-warning" },
            },
        });
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTJSTreeCheckable.init();
});
