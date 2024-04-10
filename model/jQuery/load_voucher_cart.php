<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../voucher.php';
    $voucher = voucher_ONE($_POST['voucher_id']);
    $total_price = 0;
    $html_product_cart = "";
    $user_cart = ($_SESSION['user']) ? $_SESSION['user']['username'] : "IPCOMPUTER" ;
    foreach ($_SESSION['cart'][$user_cart] as $item) {
        $total_price +=  $item['quantity_cart'] * $item['price_sale'];
    }
    echo '
        <div class="cart-payment-cash">
            <p>Tổng '.count($_SESSION['cart'][$user_cart]).' sản phẩm:</p>
            <p>'. number_format($total_price,0,',','.') .' đ</p>
        </div>
        <div class="cart-payment-cash">
            <p id="voucher-name">Voucher - '.$voucher['code'].'</p>
            <p id="voucher-price">'.number_format($voucher['price'],0,',','.').' đ</p>
        </div>
        <div class="cart-payment-total">
            <span>Tổng Số Tiền:</span>
            <p>'. number_format($total_price - $voucher['price'],0,',','.') .' đ</p>
        </div>
        <button class="payment-button" name="btn_checkout">THANH TOÁN</button>
    ';
?>