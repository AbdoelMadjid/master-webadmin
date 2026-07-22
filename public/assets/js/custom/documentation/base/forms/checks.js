"use strict";
var KTDocsChecksForms = {
    init: function () {
        ((document.querySelector("#kt_check_indeterminate_1").indeterminate =
            !0),
            (document.querySelector("#kt_check_indeterminate_2").indeterminate =
                !0));
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTDocsChecksForms.init();
});
