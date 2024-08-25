"use strict";
var KTAuthResetPassword = function() {
    var t, e, r;
    return {
        init: function() {
            t = document.querySelector("#kt_password_reset_form");
            e = document.querySelector("#kt_password_reset_submit");
            r = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "Geçerli bir e-posta adresi giriniz"
                            },
                            notEmpty: {
                                message: "E-posta adresi gereklidir"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            });

            var handleSubmit = function(i) {
                i.preventDefault();
                r.validate().then(function(status) {
                    if (status == 'Valid') {
                        e.setAttribute("data-kt-indicator", "on");
                        e.disabled = true;
                        axios.post(t.getAttribute("action"), new FormData(t))
                            .then(function(response) {
                                if (response.data.status === 1) {
                                    Swal.fire({
                                        text: "Parola sıfırlama bağlantısını e-posta adresinize gönderdik.",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Tamam, anladım!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                    var redirectUrl = t.getAttribute("data-kt-redirect-url");
                                    if (redirectUrl) {
                                        location.href = redirectUrl;
                                    }
                                } else {
                                    Swal.fire({
                                        text: response.data.message,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Tamam, anladım!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            })
                            .catch(function(error) {
                                Swal.fire({
                                    text: "Üzgünüz, bir hata oluştu. Lütfen tekrar deneyin.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Tamam, anladım!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            })
                            .then(function() {
                                e.removeAttribute("data-kt-indicator");
                                e.disabled = false;
                            });
                    } else {
                        Swal.fire({
                            text: "Üzgünüz, formunuzda bazı hatalar var. Lütfen tekrar deneyin.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Tamam, anladım!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            };

            e.addEventListener("click", handleSubmit);
            t.addEventListener("submit", handleSubmit);
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTAuthResetPassword.init();
});
