<?php
session_start();

if (isset($_POST['themgiohang'])) {
    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
        $productDetails = $_POST['productDetails'];
       

        $fl = 0;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['id_sp'] == $productDetails['id_sp']) {
                $fl = 1;
                $newQuantity = $productDetails['quantity'] + $_SESSION['cart'][$i]['quantity'];
                $_SESSION['cart'][$i]['quantity'] = $newQuantity;
            }
        }

        if ($fl == 0) {
            $_SESSION['cart'][] = $productDetails;
        }

      
        echo json_encode(array('status' => 'success', 'message' => 'Product added to cart'));
    }
}
if(isset($_POST['themgiohangyeuthich'])) {
    if (isset($_SESSION['user']) && ($_SESSION['user'])) {
        $giohangyeuthich = $_POST['themgiohangyeuthich'];
       

        $fl = 0;
        for ($i = 0; $i < sizeof($_SESSION['like']); $i++) {
            if ($_SESSION['like'][$i]['id_sp'] == $giohangyeuthich['id_sp']) {
                $fl = 1;
                $newQuantity = $giohangyeuthich['quantity'] + $_SESSION['like'][$i]['quantity'];
                $_SESSION['like'][$i]['quantity'] = $newQuantity;
            }
        }

        if ($fl == 0) {
            $_SESSION['like'][] = $giohangyeuthich;
        }

      
        echo json_encode(array('status' => 'success', 'message' => 'Product added to cart'));
    }
}
?>
