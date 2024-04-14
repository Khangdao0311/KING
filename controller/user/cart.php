<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            $id = ($_SESSION['user']) ? $_SESSION['user']['id'] : 0 ;
            $vouchers = voucher_SELECT($id);
            include_once 'view/user/cart.php';
            break;
        case 'addCart':
            if (isset($_POST['btn_buy_now']) && $_POST['btn_buy_now']) {
                $id = $_POST['id'];
                $product = product_ONE($id);
                $quantity_cart = $_POST['quantity_cart'];
                $check = 0;
                foreach ($_SESSION['cart'][$user_information] as $item) {
                    if ($id == $item['id']) {
                        $check = 1;
                        if ($_SESSION['cart'][$user_information][$id]['quantity_cart'] + $quantity_cart <= $product['quantity']) {
                            $_SESSION['cart'][$user_information][$id]['quantity_cart'] += $quantity_cart;
                        }
                        break;
                    }
                }
                if ($check == 0 && $quantity_cart <= $product['quantity']) {
                    $product['quantity_cart'] = $quantity_cart;
                    $_SESSION['cart'][$user_information][$id] = $product;
                }
            }
            header('location: ?mod=cart&act=list');
            break;
        case 'buy-again':
            if (isset($_POST['btn_buy_again'])) {
                $order_details = order_detail_SELECT($_POST['order_id'],0);

                foreach ($order_details as $order_detail) {
                    $product = product_ONE($order_detail['product_id']);
                    $quantity_cart = 1;
                    $check = 0;
                    foreach ($_SESSION['cart'][$user_information] as $item) {
                        if ($product['id'] == $item['id']) {
                            $check = 1;
                            if ($_SESSION['cart'][$user_information][$product['id']]['quantity_cart'] + $quantity_cart <= $product['quantity']) {
                                $_SESSION['cart'][$user_information][$product['id']]['quantity_cart'] += $quantity_cart;
                            }
                            break;
                        }
                    }
                    if ($check == 0 && $quantity_cart <= $product['quantity']) {
                        $product['quantity_cart'] = $quantity_cart;
                        $_SESSION['cart'][$user_information][$product['id']] = $product;
                    }

                }
            }
            header('location: ?mod=cart&act=list');
            break;
        case 'delete':
            unset($_SESSION['cart'][$user_information][$_GET['id']]);
            header('location: ?mod=cart&act=list');
            break;
        case 'checkout':
            if ($_SESSION['cart'][$user_information]) {
                $check_success = '';
                if (isset($_POST['voucher']) && $_POST['voucher']) $voucher_cart =  voucher_ONE($_POST['voucher']) ;
                else $voucher_cart['price'] = 0;
                if (isset($_POST['method']) && isset($_POST['payment-button']) && $_POST['payment-button']) {
                    $method = $_POST['method'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $province = $_POST['province'];
                    $district = $_POST['district'];
                    $ward = $_POST['ward'];
                    $street = $_POST['street'];
                    $note = $_POST['note'];
                    $method = $_POST['method'];
                    $voucher_id = ($_POST['voucher']) ? $_POST['voucher'] : NULL ;
                    $address = "$province, $district, $ward, $street";
                    $text_email = ($email) ? 'Email: <b>' . $email . '</b> <br>' : '';
                    $content = '
                        Tên khách hàng: <b>' . $name . '</b> <br>
                        ' . $text_email . ' 
                        Số điện thoại: <b>' . $phone . '</b> <br>
                        Địa chỉ giao hàng: <b>' . $address . '</b> <br>
                        Ghi chú: <b>' . $note . '</b> <br> <br>
                        <table border="1">
                            <tr>
                                <td>STT</td>
                                <td>id sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Số lượng</td>
                            </tr>';
                    $count = 1;
                    foreach ($_SESSION['cart'][$user_information] as $item) {
                        $content .= '
                            <tr>
                                <td>' . $count++ . '</td>
                                <td>' . $item['id'] . '</td>
                                <td>' . $item['name'] . '</td>
                                <td>' . $item['quantity_cart'] . '</td>
                            </tr>
                        ';
                    }
                    $content .= '      
                        </table>
                    ';
                    $mail = [
                        [
                            "email" => 'duan1.kingstore@gmail.com',
                            "name" => "KING STORE",
                        ]
                    ];
                    // mailer($mail,'ORDER PRODUCT',$content);
                    $orders = order_SELECT(0, 0, 0);
                    do {
                        $check_code = FALSE;
                        $random_code = rand(10000, 99999);
                        foreach($orders as $item){
                            if ($random_code == $item['code']) $check_code = TRUE;
                        }
                    } while ($check_code);

                    $user_id = ($_SESSION['user'] != []) ? $_SESSION['user']['id'] : 0;
                    order_ADD($random_code, $method, $voucher_id, $user_id);
                    $order = order_ONE($random_code,0);
                    $_SESSION['checkout']['code'] = $order['code'];
                    foreach ($_SESSION['cart'][$user_information] as $item) {
                        order_detail_ADD($item['quantity_cart'], $order['id'], $item['id']);
                        product_edit($item['name'],$item['image'],$item['price'],$item['price_sale'],$item['quantity'] - $item['quantity_cart'],$item['describle'],$item['noibat'],$item['category_id'],$item['author_id'],$item['publisher_id'],$item['id']);
                    }
                    
                    if ($_POST['voucher']) {
                        $voucher = voucher_ONE($voucher_id);
                        voucher_eidt($voucher['code'],$voucher['price'],$voucher['start_date'],$voucher['end_date'],$voucher['quantity'] - 1,$voucher['user_id'],$voucher['id']);
                    }
                    if ($method == 1) {
                        header('location: model/vnpay_php/vnpay_pay.php');
                    } elseif ($method == 2) {
                        $check_success = 'checked';
                    }
                }
                if (isset($_GET['pay']) || $check_success ) {
                    $method = 1;
                    $check_success = 'checked';
                    $payment_method = "Thanh toán thành công";

                }


                if (isset($_SESSION['user'])) {
                    $name = ($_SESSION['user'] != []) ? $_SESSION['user']['name'] : '';
                    $email = ($_SESSION['user'] != []) ? $_SESSION['user']['email'] : '';
                    $phone = ($_SESSION['user'] != []) ? $_SESSION['user']['phone'] : '';
                    $address = ($_SESSION['user'] != []) ? explode('@', $_SESSION['user']['address']) : ['', '', '', '', ''];
                } else {
                    $address = ['', '', '', '', ''];
                }
                include_once 'view/user/checkout.php';
            } else {
                header('location: ?mod=page&act=home');
            }
            break;
        case 'checkout_success':
            unset($_SESSION['cart'][$user_information]);
            header('location: ?mod=page&act=home');
            break;
        default:
            header('location: ?mod=cart&act=list');
            break;
    }
} else {
    header('location: ?mod=cart&act=list');
}
