<?php
    session_start();
    // session_destroy();
    if (!isset($_SESSION['user'])) $_SESSION['user'] = [];
    $user_cart = ($_SESSION['user']) ? $_SESSION['user']['username'] : "IPCOMPUTER" ;
    if (!isset($_SESSION['cart'][$user_cart])) $_SESSION['cart'][$user_cart] = [];
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../category.php';
    require_once '../publisher.php';
    require_once '../author.php';
    require_once '../product.php';
    require_once '../user.php';
    require_once '../gallery.php';
    require_once '../mailer.php';
    $id = $_POST['id'];
    $product_cart = product_ONE($id);
    $quantity_new = $_POST['quantity_new'];
    if (isset($_SESSION['cart'][$user_cart][$id])) {
        $_SESSION['cart'][$user_cart][$id]['quantity_cart'] += $quantity_new;
    } else {
      $_SESSION['cart'][$user_cart][$id] = $product_cart;
      $_SESSION['cart'][$user_cart][$id]['quantity_cart'] = $quantity_new;
    }
    echo count($_SESSION['cart'][$user_cart]);
?>