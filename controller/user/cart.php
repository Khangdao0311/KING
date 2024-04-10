<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            if (isset($_POST['btn_buy_now']) && $_POST['btn_buy_now']) {
                $quantity_cart = $_POST['quantity_cart'];
                $id = $_POST['id'];
                $check = 0;
                $product = product_ONE($id);
                foreach ($_SESSION['cart'][$user_cart] as $item) {
                    if ($id == $item['id']) {
                        $check = 1;
                        if ($_SESSION['cart'][$user_cart][$id]['quantity_cart'] + $quantity_cart <= 10) {
                            $_SESSION['cart'][$user_cart][$id]['quantity_cart'] += $quantity_cart;
                        }
                        break;
                    }
                }
                if ($check == 0 && $quantity_cart <= 10) {
                    $product['quantity_cart'] = $quantity_cart;
                    $_SESSION['cart'][$user_cart][$id] = $product;
                }
            }
            $id = ($_SESSION['user']) ? $_SESSION['user']['id'] : 0 ;
            $vouchers = voucher_SELECT($id);
            include_once 'view/user/cart.php';
            
            break;
        case 'delete':
            if (isset($_GET['del'])) {
                $del = $_GET['del'];
                unset($_SESSION['cart'][$user_cart][$del]);
            }
            include_once 'view/user/cart.php';
            break;
        case 'checkout':
            if ($_SESSION['cart'][$user_cart]) {
                $check_success = '';
                if ($_POST['voucher']) $voucher_cart =  voucher_ONE($_POST['voucher']) ;
                if (isset($_POST['payment-button']) && $_POST['payment-button']) {
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
                    foreach ($_SESSION['cart'][$user_cart] as $item) {
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
                    foreach ($_SESSION['cart'][$user_cart] as $item) {
                        order_detail_ADD($item['quantity_cart'], order_ONE($random_code,0)['id'], $item['id']);
                        product_edit($item['name'],$item['image'],$item['price'],$item['price_sale'],$item['quantity'] - $item['quantity_cart'],$item['describle'],$item['noibat'],$item['category_id'],$item['author_id'],$item['publisher_id'],$item['id']);
                    }
                    if ($_POST['voucher']) {
                        $voucher = voucher_ONE($voucher_id);
                        voucher_eidt($voucher['code'],$voucher['price'],$voucher['start_date'],$voucher['end_date'],$voucher['quantity'] - 1,$voucher['user_id'],$voucher['id']);
                    }
                    $check_success = 'checked';
                    if (isset($_POST['method'])) {
                        $payment_method = $_POST['method'];
                        if ($payment_method == 1) {
                            $payment_method = "Thanh toán qua Zalo Pay";
                        } elseif ($payment_method == 2) {
                            $payment_method = "Thanh toán thành công";
                        }
                    }
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
            unset($_SESSION['cart'][$user_cart]);
            header('location: ?mod=page&act=home');
            break;
        default:
            header('location: ?mod=cart&act=list');
            break;
    }
} else {
    header('location: ?mod=cart&act=list');
}
