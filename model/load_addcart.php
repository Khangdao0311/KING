<?php
    session_start();
    // session_destroy();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    if (!isset($_SESSION['user'])) $_SESSION['user'] = []; 
    require_once 'global.php';
    require_once 'pdo.php';
    require_once 'category.php';
    require_once 'publisher.php';
    require_once 'author.php';
    require_once 'product.php';
    require_once 'user.php';
    require_once 'gallery.php';
    require_once 'mailer.php';
    $id = $_POST['id'];
    $product_cart = product_ONE($id);
    if (isset($_SESSION['cart'][$id])) {
        $quantity_cart = $_SESSION['cart'][$id]['quantity_cart'];
        $new_quantity = 1;
        if (isset($_POST['quantity_cart'])) {
            $new_quantity = $_POST['quantity_cart'];
        }
        if ($quantity_cart + $new_quantity > 10) {
            $new_quantity = 10 - $quantity_cart;
        }
        $_SESSION['cart'][$id]['quantity_cart'] += $new_quantity;
    } else {
        $quantity_cart = 1;
        if (isset($_POST['quantity_cart'])) {
            $quantity_cart = $_POST['quantity_cart'];
        }
        if ($quantity_cart > 10) {
            $quantity_cart = 10;
        }
        $product_cart['quantity_cart'] = $quantity_cart;
        $_SESSION['cart'][$id] = $product_cart;
    }
    echo count($_SESSION['cart']);

?>