<?php
 include("settings.php");



// Başlığı JSON çıktısı için ayarlayın
header('Content-Type: application/json');


$stmt = $con->prepare("SELECT urun_ad, urun_no, urun_adet, urun_fiyat, image FROM urun  ORDER BY create_time DESC");
$stmt->execute();
$result = $stmt->get_result();

// Sonuçları JSON formatında döndürün
$veri = [];
while ($row = $result->fetch_assoc()) {
    $veri[] = [
        '<div class="d-flex align-items-center">
            <a href="assets/product-image/'.$row['image'].'" class="symbol symbol-50px">
                <span class="symbol-label" style="background-image:url(assets/product-image/'.$row['image'].');"></span>
            </a>
            <div class="ms-5">
                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">'.$row['urun_ad'].'</a>
            </div>
        </div>',
        '<span class="fw-bold">'.$row['urun_no'].'</span>',
        '<span class="fw-bold ms-3">'.$row['urun_adet'].'</span>',
        '<span class="fw-bold">'.$row['urun_fiyat'].' ₺</span>',
        '<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">İşlemler
            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Düzenle</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Sil</a>
                </div>
            </div>'
    ];
    
}
echo json_encode(['data' => $veri]);
?>