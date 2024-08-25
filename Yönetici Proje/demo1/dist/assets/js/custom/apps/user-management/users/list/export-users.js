"use strict";
var KTModalExportUsers = function() {
	const t = document.getElementById("kt_modal_export_users"),
		e = t.querySelector("#kt_modal_export_users_form"),
		n = new bootstrap.Modal(t);
	return {
		init: function() {
			! function() {
				var o = FormValidation.formValidation(e, {
					fields: {
						format: {
							validators: {
								notEmpty: {
									message: "File format is required"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						bootstrap: new FormValidation.plugins.Bootstrap5({
							rowSelector: ".fv-row",
							eleInvalidClass: "",
							eleValidClass: ""
						})
					}
				});
			
				 t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (function(t) {
					t.preventDefault(), Swal.fire({
						text: "Are you sure you would like to cancel?",
						icon: "warning",
						showCancelButton: !0,
						buttonsStyling: !1,
						confirmButtonText: "Yes, cancel it!",
						cancelButtonText: "No, return",
						customClass: {
							confirmButton: "btn btn-primary",
							cancelButton: "btn btn-active-light"
						}
					}).then((function(t) {
						t.value ? (e.reset(), n.hide()) :Swal.fire({
							text: "Your form has not been cancelled!.",
							icon: "error",
							buttonsStyling: !1,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						})
					}))
				}))
			}()
		}
	}
}();
KTUtil.onDOMContentLoaded((function() {
	KTModalExportUsers.init()
}));