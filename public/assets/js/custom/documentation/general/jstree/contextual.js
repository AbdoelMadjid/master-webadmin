"use strict";
var KTJSTreeContextual = {
    init: function () {
        $("#kt_docs_jstree_contextual").jstree({
            core: {
                themes: { responsive: !1 },
                check_callback: !0,
                data: [
                    {
                        text: "Parent Node",
                        children: [
                            {
                                text: "Initially selected",
                                state: { selected: !0 },
                            },
                            {
                                text: "Custom Icon",
                                icon: "ki-solid ki-calendar text-danger fs-4",
                            },
                            {
                                text: "Initially open",
                                icon: "ki-solid ki-folder text-success",
                                state: { opened: !0 },
                                children: [
                                    {
                                        text: "Another node",
                                        icon: "ki-solid ki-file text-waring",
                                    },
                                ],
                            },
                            {
                                text: "Another Custom Icon",
                                icon: "ki-solid ki-user text-warning fs-4",
                            },
                            {
                                text: "Disabled Node",
                                icon: "ki-solid ki-check text-success",
                                state: { disabled: !0 },
                            },
                            {
                                text: "Sub Nodes",
                                icon: "ki-solid ki-folder text-danger",
                                children: [
                                    {
                                        text: "Item 1",
                                        icon: "ki-solid ki-file text-waring",
                                    },
                                    {
                                        text: "Item 2",
                                        icon: "ki-solid ki-file text-success",
                                    },
                                    {
                                        text: "Item 3",
                                        icon: "ki-solid ki-file text-default",
                                    },
                                    {
                                        text: "Item 4",
                                        icon: "ki-solid ki-file text-danger",
                                    },
                                    {
                                        text: "Item 5",
                                        icon: "ki-solid ki-file text-info",
                                    },
                                ],
                            },
                        ],
                    },
                    "Another Node",
                ],
            },
            types: {
                default: { icon: "ki-solid ki-folder text-primary" },
                file: { icon: "ki-solid ki-file text-primary" },
            },
            state: { key: "demo2" },
            plugins: ["contextmenu", "state", "types"],
        });
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTJSTreeContextual.init();
});
