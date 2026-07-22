"use strict";
var KTJSTreeDragDrop = {
    init: function () {
        $("#kt_docs_jstree_dragdrop").jstree({
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
                                icon: "ki-solid ki-map text-danger fs-5",
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
                                icon: "ki-solid ki-book text-warning fs-6",
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
                                        icon: "ki-solid ki-ile text-info",
                                    },
                                ],
                            },
                        ],
                    },
                    "Another Node",
                ],
            },
            types: {
                default: { icon: "ki-solid ki-folder text-success" },
                file: { icon: "ki-solid ki-file  text-success" },
            },
            state: { key: "demo2" },
            plugins: ["dnd", "state", "types"],
        });
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTJSTreeDragDrop.init();
});
