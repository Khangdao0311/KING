<?php
$html_product_checkout = "";
$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $into_price = $item['quantity_cart'] * $item['price_sale'];
    $transport_fee = 10000;
    $total_price += $into_price;
    $html_product_checkout .= '
        <div class="checkout_product-content">
            <div class="checkout_product-img">
                <img src="view/'.$item['image'].'" alt="s">
            </div>
            <div class="checkout_product-name">
                <p>'.$item['name'].'</p>
                <div class="checkout_product-price">
                    <p class="price">'.number_format($item['price_sale'],0,',','.').' đ</p>
                    <del>'.number_format($item['price'],0,',','.').' đ</del>
                </div>
            </div>
            <div class="checkout_product-quantity">
                <p>'.$item['quantity_cart'].'</p>
            </div>
            <div class="checkout_product-cash">
                <p class="price">'.number_format($into_price,0,',','.').' đ</p>
            </div>
        </div>
        ';
}
?>
<?php include_once 'header.php' ?>
<title>Thanh Toán</title>
<link rel="stylesheet" href="view/user/css/checkout.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Giỏ hàng / Thanh toán</div>
    </div>
</section>
<section>
    <div class="container contact-container">
        <div class="cart-cash">
            <div class="ship-infomation">
                <div class="infomation-user">
                    <div class="infomation-tittle">
                        <p>Thông tin liên hệ giao hàng</p>
                    </div>
                    <div class="infomation-name">
                        <p class="name">Họ và Tên*</p>
                        <input value="<?=$name?>" type="text" required>
                    </div>
                    <div class="infomation-email">
                        <p>Email</p>
                        <input value="<?=$email?>" type="email">
                    </div>
                    <div class="infomation-sdt">
                        <p>Số điện thoại*</p>
                        <input value="<?=$phone?>" type="tel" required>
                    </div>
                </div>

                <div class="infomation-address">
                    <div class="infomation-tittle">
                        <p>Thông tin liên hệ giao hàng</p>
                    </div>
                    <div class="infomation-city">
                        <p class="name">Chọn tỉnh thành*</p>
                        <input type="text">
                    </div>
                    <div class="infomation-district">
                        <p>Chọn quận huyện*</p>
                        <input name="" id=""></input>
                    </div>
                    <div class="infomation-ward">
                        <p>Tên phường/ xã*</p>
                        <input value="<?$payment_method?>" type="tel" required>
                    </div>
                    <div class="infomation-street">
                        <p>Số nhà, tên đường*</p>
                        <input value="<?=$address?>" type="tel" required>
                    </div>
                    <div class="infomation-note">
                        <p>Ghi chú</p>
                        <input type="tel" required>
                    </div>
                </div>
            </div>

            <div class="payment-infomation">
                <div class="infomation-tittle">
                    <p>Thông tin thanh toán</p>
                </div>
                <div class="checkout_product-tittle">
                    <div class="checkout_product-img">
                        <p>Hình</p>
                    </div>
                    <div class="checkout_product-name">
                        <p>Tên Sản Phẩm</p>
                    </div>
                    <div class="checkout_product-quantity">
                        <p>Số Lượng</p>
                    </div>
                    <div class="checkout_product-cash">
                        <p>Thành Tiền</p>
                    </div>
                </div>
                <?= $html_product_checkout ?>
                <div class="voucher">
                    <div class="voucher-content">
                        <input type="text" placeholder="Nhập mã giảm giá nếu có">
                    </div>
                    <div class="voucher-button">
                        <button>Áp dụng</button>
                    </div>
                </div>
                <form action="index.php?mod=cart&act=checkout" method="post">
                <div class="payment-method">
                    <label for="check-zalo" class="payment-method-zalo">
                        <div class="checkbox">
                            <input value="1" id="check-zalo" type="radio" name="check">
                        </div>  
                        <div class="zalo-img">
                            <img src="data:image/png;base64,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" alt="">
                        </div>
                        <div class="payment-method-content">
                            <p>Zalo pay</p>
                            <p class="underline">Thanh toán qua Zalo</p>
                        </div>
                    </label>
                    <label for="check-cash" class="payment-method-cash">
                        <div class="checkbox">
                            <input value="2" id="check-cash" type="radio" name="check">
                        </div>
                        <div class="cash-img">
                            <img src="https://cdn-icons-png.flaticon.com/512/2331/2331941.png" alt="">
                        </div>
                        <div class="payment-method-content">
                            <p>Tiền mặt</p>
                            <p class="underline">Thanh toán bằng tiền mặt</p>
                        </div>
                    </label>
                </div>
                <div class="payment-total">
                    <div class="payment_total-titlle">
                        <p>Tổng</p>
                    </div>
                    <div class="payment_total-info">
                        <p>Số tiền mua sản phẩm</p>
                        <p><?php echo number_format($into_price,0,',','.') ?> đ</p>
                    </div>
                    <div class="payment_total-promotion">
                        <p>Khuyến mãi</p>
                        <p>0 đ</p>
                    </div>
                    <div class="payment_total-ship">
                        <p>Phí vận chuyện</p>
                        <p>10.000 đ</p>
                    </div>
                    <div class="payment_total-sum">
                        <p>Tổng tiền thanh toán</p>
                        <p class="price"><?php echo (number_format($into_price,0,',','.')) ?> đ</p>
                    </div>
                </div>
                <button name="payment-button" type="submit" for="order_success" class="payment-button">đặt hàng</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="view/user/js/checkout.js"></script>
<?php include_once 'footer.php' ?>