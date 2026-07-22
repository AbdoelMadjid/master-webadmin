"use strict";
var KTGeneralCountUp = {
    init: function () {
        document
            .querySelector("#kt_countup_update")
            .addEventListener("click", function () {
                const t = new countUp.CountUp("kt_countup_1", 15e3, {
                        prefix: "$",
                    }),
                    n = new countUp.CountUp("kt_countup_2", 200),
                    u = new countUp.CountUp("kt_countup_3", 80, {
                        prefix: "%",
                    });
                (t.start(), n.start(), u.start());
            });
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTGeneralCountUp.init();
});
