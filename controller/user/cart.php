<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'list':  
                if(isset($_POST['btn_buy_now']) && $_POST['btn_buy_now']){
                    $quantity_cart = $_POST['quantity_cart'];
                    $id = $_POST['id'];
                    $check = 0;
                    $product = product_ONE($id);
                    foreach ($_SESSION['cart'] as $item) {
                        if($id == $item['id']){
                            $check = 1;
                            if($_SESSION['cart'][$id]['quantity_cart'] + $quantity_cart <= 10){
                                $_SESSION['cart'][$id]['quantity_cart'] += $quantity_cart;
                            }
                            break;
                        }
                    }
                    if($check == 0 && $quantity_cart <= 10){
                        $product['quantity_cart'] = $quantity_cart;
                        $_SESSION['cart'][$id] = $product;
                    }
                }
                if(isset($_GET['id']) && $_GET['id']>0){
                    $id = $_GET['id'];
                    $product_cart = product_ONE($id);
                    if (isset($_SESSION['cart'][$id])) {
                        $quantity_cart = $_SESSION['cart'][$id]['quantity_cart'];
                        $new_quantity = 1;
                        if(isset($_POST['quantity_cart'])) {
                            $new_quantity = $_POST['quantity_cart'];
                        }
                        if ($quantity_cart + $new_quantity > 10) {
                            $new_quantity = 10 - $quantity_cart;
                        }
                        $_SESSION['cart'][$id]['quantity_cart'] += $new_quantity;
                    } else {
                        $quantity_cart = 1;
                        if(isset($_POST['quantity_cart'])) {
                            $quantity_cart = $_POST['quantity_cart']; 
                        }
                        if ($quantity_cart > 10) {
                            $quantity_cart = 10;
                        }
                        $product_cart['quantity_cart'] = $quantity_cart;
                        $_SESSION['cart'][$id] = $product_cart;
                    }
                }
                if (isset($_GET['del'])) {
                    $del = $_GET['del'];
                    unset($_SESSION['cart'][$del]);
                }
                include_once 'view/user/cart.php';
                break;
            case 'checkout':
                include_once 'view/user/checkout.php';
                break;
            default:
                header('location: ?mod=cart&act=list');
                break;
        }
    } else {
       header('location: ?mod=cart&act=list');
    }
    
?>