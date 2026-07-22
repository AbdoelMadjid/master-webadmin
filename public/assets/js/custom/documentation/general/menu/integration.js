"use strict";
var KTGeneralMenuIntegration = {
    init: function (n) {
        !(function (n) {
            const e = new tempusDominus.TempusDominus(
                    document.getElementById("kt_td_picker_basic"),
                    {},
                ),
                t = document.querySelector(
                    "#kt_menu_tempus_dominus_datepicker",
                );
            if (t) {
                var i = KTMenu.getInstance(t);
                i &&
                    i.on("kt.menu.dropdown.hide", function (n) {
                        if (!0 === e.display.isVisible) return !1;
                    });
            }
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTGeneralMenuIntegration.init();
});
