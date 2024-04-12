<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../product.php';

    if (!isset($_SESSION['user'])) $_SESSION['user'] = [];
    $user_information = ($_SESSION['user']) ? $_SESSION['user']['username'] : "IPCOMPUTER" ;
    if (!isset($_SESSION['cart'][$user_information])) $_SESSION['cart'][$user_information] = [];
    $id = $_POST['id'];
    $product_cart = product_ONE($id);
    $quantity_new = $_POST['quantity_new'];
    if (isset($_SESSION['cart'][$user_information][$id])) {
        $_SESSION['cart'][$user_information][$id]['quantity_cart'] += $quantity_new;
    } else {
      $_SESSION['cart'][$user_information][$id] = $product_cart;
      $_SESSION['cart'][$user_information][$id]['quantity_cart'] = $quantity_new;
    }
    echo count($_SESSION['cart'][$user_information]);
?>