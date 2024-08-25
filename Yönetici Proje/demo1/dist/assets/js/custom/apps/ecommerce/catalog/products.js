"use strict";
var KTAppEcommerceProducts = function() {
	var t, e, n = () => {
		t.querySelectorAll('[data-kt-ecommerce-product-filter="delete_row"]').forEach((t => {
			t.addEventListener("click", (function(t) {
				t.preventDefault();
				const n = t.target.closest("tr"),
					r = n.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText,
					deleteId = t.target.getAttribute('data-id');
				Swal.fire({
					text: "Are you sure you want to delete " + r + "?",
					icon: "warning",
					showCancelButton: !0,
					buttonsStyling: !1,
					confirmButtonText: "Yes, delete!",
					cancelButtonText: "No, cancel",
					customClass: {
						confirmButton: "btn fw-bold btn-danger",
						cancelButton: "btn fw-bold btn-active-light-primary"
					}
				}).then((result) => {
                    if (result.value) {
                     
                            $.ajax({
                                url: 'http://localhost/demo1/dist/php/product-delete.php',
                                type: 'GET',
                                data: { id: deleteId }, // data-id değerini gönder
                                success: function(response) {
                                    if (response == 1) {
                                        $(n).css('background', '#E4E6EF');
                                        $(n).fadeOut(800, function() {
                                            $(this).remove();
                                        });
                                        Swal.fire({
                                            text: r + " başarıyla silindi!",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Tamam",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary"
                                            }
                                        });
                                    } else {
                                        Swal.fire({
                                            text: "Bir hata oluştu.",
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Tamam",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary"
                                            }
                                        });
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Hata durumunda kullanıcıya hata mesajı göster
                                    alert("Bir hata oluştu: " + error);
                                }
                            });
                        
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire({
                            text: r + " silinmedi.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Tamam",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        });
                    }
                });
			}))
		}))
	};
	return {
		init: function() {
			(t = document.querySelector("#kt_ecommerce_products_table")) && ((e = $(t).DataTable({
				
				info: !1,
				order: [],
				pageLength: 10,
				columnDefs: [{
						render: DataTable.render.number(",", ".", 2),
						targets: 2
					},{
					render: DataTable.render.number(",", ".", 2),
					targets: 3
				}, {
					orderable: !1,
					targets: 4
				}],
			})).on("draw", (function() {
				n()
			})), document.querySelector('[data-kt-ecommerce-product-filter="search"]').addEventListener("keyup", (function(t) {
				e.search(t.target.value).draw()
			})),
              // Arama kutularını eklemek için ikinci bir tr ekleyin
        $('#kt_ecommerce_products_table').append('<tr class="search-row"></tr>'),

        // Her sütun için bir th ekleyin ve belirli sütunlara arama kutusu eklemeyin
        $('#kt_ecommerce_products_table th').each(function(index) {
            var title = $(this).text();
            if (index !== 1 && index !== 4) { // 1 ve 2 sütunlarına arama eklenmez
                $('.search-row').append('<th><input type="text" class="form-control form-control-solid w-75	 ps-5" placeholder="Search " /></th>');
            } else {
                $('.search-row').append('<th></th>'); // Boş th ekleyin
            }
        }),
             n())
		}
	}
}();
KTUtil.onDOMContentLoaded((function() {
	KTAppEcommerceProducts.init()
}));