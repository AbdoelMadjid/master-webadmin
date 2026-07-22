"use strict";
var KTCropperDemo = {
    init: function () {
        !(function () {
            var e = document.getElementById("image");
            function t() {
                var t = {
                        crop: function (e) {
                            ((document.getElementById("dataX").value =
                                Math.round(e.detail.x)),
                                (document.getElementById("dataY").value =
                                    Math.round(e.detail.y)),
                                (document.getElementById("dataWidth").value =
                                    Math.round(e.detail.width)),
                                (document.getElementById("dataHeight").value =
                                    Math.round(e.detail.height)),
                                (document.getElementById("dataRotate").value =
                                    e.detail.rotate),
                                (document.getElementById("dataScaleX").value =
                                    e.detail.scaleX),
                                (document.getElementById("dataScaleY").value =
                                    e.detail.scaleY));
                            var t =
                                document.getElementById("cropper-preview-lg");
                            ((t.innerHTML = ""),
                                t.appendChild(
                                    n.getCroppedCanvas({
                                        width: 256,
                                        height: 160,
                                    }),
                                ));
                            var a =
                                document.getElementById("cropper-preview-md");
                            ((a.innerHTML = ""),
                                a.appendChild(
                                    n.getCroppedCanvas({
                                        width: 128,
                                        height: 80,
                                    }),
                                ));
                            var o =
                                document.getElementById("cropper-preview-sm");
                            ((o.innerHTML = ""),
                                o.appendChild(
                                    n.getCroppedCanvas({
                                        width: 64,
                                        height: 40,
                                    }),
                                ));
                            var d =
                                document.getElementById("cropper-preview-xs");
                            ((d.innerHTML = ""),
                                d.appendChild(
                                    n.getCroppedCanvas({
                                        width: 32,
                                        height: 20,
                                    }),
                                ));
                        },
                    },
                    n = new Cropper(e, t);
                (document
                    .getElementById("cropper-buttons")
                    .querySelectorAll("[data-method]")
                    .forEach(function (e) {
                        e.addEventListener("click", function (t) {
                            var a,
                                o = e.getAttribute("data-method"),
                                d = e.getAttribute("data-option"),
                                r = e.getAttribute("data-second-option");
                            try {
                                d = JSON.parse(d);
                            } catch (t) {}
                            if (
                                ((a = r ? (d ? n[o](d) : n[o]()) : n[o](d, r)),
                                "getCroppedCanvas" === o)
                            ) {
                                var i = document
                                    .getElementById("getCroppedCanvasModal")
                                    .querySelector(".modal-body");
                                ((i.innerHTML = ""), i.appendChild(a));
                            }
                            var c = document.querySelector("#putData");
                            try {
                                c.value = JSON.stringify(a);
                            } catch (t) {
                                a || (c.value = a);
                            }
                        });
                    }),
                    document
                        .getElementById("setAspectRatio")
                        .querySelectorAll('[name="aspectRatio"]')
                        .forEach(function (e) {
                            e.addEventListener("click", function (e) {
                                n.setAspectRatio(parseFloat(e.target.value));
                            });
                        }),
                    document
                        .getElementById("viewMode")
                        .querySelectorAll('[name="viewMode"]')
                        .forEach(function (a) {
                            a.addEventListener("click", function (a) {
                                (n.destroy(),
                                    (n = new Cropper(
                                        e,
                                        Object.assign({}, t, {
                                            viewMode: parseInt(a.target.value),
                                        }),
                                    )));
                            });
                        }),
                    document
                        .getElementById("toggleOptionButtons")
                        .querySelectorAll('[type="checkbox"]')
                        .forEach(function (a) {
                            a.addEventListener("click", function (a) {
                                var o = {};
                                ((o[a.target.getAttribute("name")] =
                                    a.target.checked),
                                    (t = Object.assign({}, t, o)),
                                    n.destroy(),
                                    (n = new Cropper(e, t)));
                            });
                        }));
                var a = document.getElementById("inputImage");
                a &&
                    a.addEventListener("change", function (a) {
                        var o = a.target.files;
                        if (o && o.length) {
                            var d = o[0];
                            if (/^image\/\w+/.test(d.type)) {
                                var r = URL.createObjectURL(d);
                                (n.destroy(),
                                    (e.src = r),
                                    (n = new Cropper(e, t)),
                                    (e.onload = function () {
                                        URL.revokeObjectURL(r);
                                    }));
                            } else window.alert("Please choose an image file.");
                        }
                    });
            }
            e
                ? e.complete
                    ? t()
                    : (e.onload = function () {
                          t();
                      })
                : console.error("Image element not found");
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTCropperDemo.init();
});
