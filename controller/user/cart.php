<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            if (isset($_POST['btn_buy_now']) && $_POST['btn_buy_now']) {
                $quantity_cart = $_POST['quantity_cart'];
                $id = $_POST['id'];
                $check = 0;
                $product = product_ONE($id);
                foreach ($_SESSION['cart'] as $item) {
                    if ($id == $item['id']) {
                        $check = 1;
                        if ($_SESSION['cart'][$id]['quantity_cart'] + $quantity_cart <= 10) {
                            $_SESSION['cart'][$id]['quantity_cart'] += $quantity_cart;
                        }
                        break;
                    }
                }
                if ($check == 0 && $quantity_cart <= 10) {
                    $product['quantity_cart'] = $quantity_cart;
                    $_SESSION['cart'][$id] = $product;
                }
            }
            include_once 'view/user/cart.php';
            break;
        case 'delete': 
            if (isset($_GET['del'])) {
                $del = $_GET['del'];
                unset($_SESSION['cart'][$del]);
            }
            include_once 'view/user/cart.php';
            break;
        case 'checkout':
            $check_success = '';
            if (isset($_POST['payment-button']) && $_POST['payment-button']) {
            if (isset($_POST['check'])) {
                $payment_method = $_POST['check'];
                if ($payment_method == 1) {
                    $payment_method = "Thanh toán qua Zalo Pay";
                } elseif ($payment_method == 2) {
                    $payment_method = "Thanh toán thành công";
                }
            }
            $check_success = 'checked';
            }
            if (isset($_SESSION['user'])) {
                $name = $_SESSION['user']['name'];
                $email = $_SESSION['user']['email'];
                $phone = $_SESSION['user']['phone'];
                $address = explode('@', $_SESSION['user']['address']);
            }
            include_once 'view/user/checkout.php';
            break;
        default:
            header('location: ?mod=cart&act=list');
            break;
    }
} else {
    header('location: ?mod=cart&act=list');
}
