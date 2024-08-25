"use strict";
var KTAuthNewPassword = function() {
    var t, e, r, o, n = function() {
        return o.getScore() > 50;
    };
    return {
        init: function() {
            t = document.querySelector("#kt_new_password_form");
            e = document.querySelector("#kt_new_password_submit");
            o = KTPasswordMeter.getInstance(t.querySelector('[data-kt-password-meter="true"]'));
            r = FormValidation.formValidation(t, {
                fields: {
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            },
                            stringLength: {
                                min: 3,
                                message: "The password must be at least 3 characters long"
                            },
                            callback: {
                                message: "Please enter a valid password",
                                callback: function(input) {
                                    return n();
                                }
                            }
                        }
                    },
                    "confirm-password": {
                        validators: {
                            notEmpty: {
                                message: "The password confirmation is required"
                            },
                            identical: {
                                compare: function() {
                                    return t.querySelector('[name="password"]').value;
                                },
                                message: "The password and its confirm are not the same"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: !1
                        }
                    }),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            });

            e.addEventListener("click", function(o) {
                o.preventDefault();
                r.revalidateField("password");
                r.validate().then(function(status) {
                    if (status == 'Valid') {
                        e.setAttribute("data-kt-indicator", "on");
                        e.disabled = true;

                        // Mevcut sayfanın GET parametrelerini al
                        const currentUrl = new URL(window.location.href);
                        const params = new URLSearchParams(currentUrl.search);
                        const actionUrl = new URL(t.getAttribute("action"));

                        // GET parametrelerini action URL'ye ekle
                        params.forEach((value, key) => {
                            actionUrl.searchParams.append(key, value);
                        });

                        axios.post(actionUrl.toString(), new FormData(t))
                            .then(function(response) {
                                if (response.data.status === 1) {
                                    Swal.fire({
                                        text: response.data.message,
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function() {
                                        var redirectUrl = t.getAttribute("data-kt-redirect-url");
                                        if (redirectUrl) {
                                            location.href = redirectUrl;
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        text: response.data.message,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            })
                            .catch(function(error) {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
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
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTAuthNewPassword.init();
});
