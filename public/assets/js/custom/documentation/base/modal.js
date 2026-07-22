"use strict";
var KTDocsModal = (function () {
    var o;
    return {
        init: function () {
            (o = document.querySelector("#kt_modal_3")) &&
                (function (o) {
                    var e = 0,
                        n = 0,
                        t = 0,
                        u = 0;
                    function c(o) {
                        ((o = o || window.event),
                            (t = o.clientX),
                            (u = o.clientY),
                            (document.onmouseup = i),
                            (document.onmousemove = l));
                    }
                    function l(c) {
                        ((c = c || window.event),
                            (e = t - c.clientX),
                            (n = u - c.clientY),
                            (t = c.clientX),
                            (u = c.clientY),
                            (o.style.top = o.offsetTop - n + "px"),
                            (o.style.left = o.offsetLeft - e + "px"));
                    }
                    function i() {
                        ((document.onmouseup = null),
                            (document.onmousemove = null));
                    }
                    o.querySelector(".modal-header")
                        ? (o.querySelector(".modal-header").onmousedown = c)
                        : (o.onmousedown = c);
                })(o);
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTDocsModal.init();
});
