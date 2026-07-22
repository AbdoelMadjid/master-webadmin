"use strict";
var KTBasePageLoadingDemos = {
    init: function (t) {
        (document
            .querySelector("#kt_page_loading_basic")
            .addEventListener("click", function () {
                const t = document.createElement("div");
                (document.body.prepend(t),
                    t.classList.add("page-loader"),
                    (t.innerHTML =
                        '\n\t\t\t\t<span class="spinner-border text-primary" role="status">\n\t\t\t\t\t<span class="visually-hidden">Loading...</span>\n\t\t\t\t</span>\n\t\t\t'),
                    KTApp.showPageLoading(),
                    setTimeout(function () {
                        (KTApp.hidePageLoading(), t.remove());
                    }, 3e3));
            }),
            document
                .querySelector("#kt_page_loading_message")
                .addEventListener("click", function () {
                    const t = document.createElement("div");
                    (document.body.prepend(t),
                        t.classList.add("page-loader"),
                        t.classList.add("flex-column"),
                        (t.innerHTML =
                            '\n\t\t\t\t<span class="spinner-border text-primary" role="status"></span>\n\t\t\t\t<span class="text-muted fs-6 fw-semibold mt-5">Loading...</span>\n\t\t\t'),
                        KTApp.showPageLoading(),
                        setTimeout(function () {
                            (KTApp.hidePageLoading(), t.remove());
                        }, 3e3));
                }),
            document
                .querySelector("#kt_page_loading_overlay")
                .addEventListener("click", function () {
                    const t = document.createElement("div");
                    (document.body.prepend(t),
                        t.classList.add("page-loader"),
                        t.classList.add("flex-column"),
                        t.classList.add("bg-dark"),
                        t.classList.add("bg-opacity-25"),
                        (t.innerHTML =
                            '\n\t\t\t\t<span class="spinner-border text-primary" role="status"></span>\n\t\t\t\t<span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>\n\t\t\t'),
                        KTApp.showPageLoading(),
                        setTimeout(function () {
                            (KTApp.hidePageLoading(), t.remove());
                        }, 3e3));
                }));
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTBasePageLoadingDemos.init();
});
