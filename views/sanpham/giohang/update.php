<?php
// Xác định xem form đã được submit hay chưa
if (isset($_POST['capnhatgiohang'])) {
    $productIds = $_POST['product_id']; // Mảng chứa các product_id từ form
    $newQuantities = $_POST['quantity']; // Mảng chứa các quantity từ form

    for ($i = 0; $i < count($productIds); $i++) {
        $currentProductId = $productIds[$i];
        $newQuantity = $newQuantities[$i];

        for ($j = 0; $j < sizeof($_SESSION['cart']); $j++) {
            if ($_SESSION['cart'][$j]['id_sp'] == $currentProductId) {
                $_SESSION['cart'][$j]['quantity'] = $newQuantity;
                break; // Thoát vòng lặp sau khi cập nhật
            }
        }
    }
}

// Tiếp tục với mã xử lý khác nếu cần thiết

include "views/sanpham/giohang.php";
?>
