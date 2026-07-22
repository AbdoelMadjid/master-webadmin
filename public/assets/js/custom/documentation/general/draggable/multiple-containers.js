"use strict";
var KTDraggableMultiple = {
    init: function () {
        !(function () {
            var e = document.querySelectorAll(".draggable-zone");
            if (0 === e.length) return !1;
            new Draggable.Sortable(e, {
                draggable: ".draggable",
                handle: ".draggable .draggable-handle",
                mirror: { appendTo: "body", constrainDimensions: !0 },
            });
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTDraggableMultiple.init();
});
