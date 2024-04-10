<?php
$html_product_checkout = "";
$total_price = 0;
foreach ($_SESSION['cart'][$user_cart] as $item) {
    $into_price = $item['quantity_cart'] * $item['price_sale'];
    $transport_fee = 10000;
    $total_price += $into_price;
    $html_product_checkout .= '
        <div class="checkout_product-content">
            <div class="checkout_product-img">
                <img src="view/' . $item['image'] . '" alt="s">
            </div>
            <div class="checkout_product-name">
                <p>' . $item['name'] . '</p>
                <div class="checkout_product-price">
                    <p class="price">' . number_format($item['price_sale'], 0, ',', '.') . ' đ</p>
                    <del>' . number_format($item['price'], 0, ',', '.') . ' đ</del>
                </div>
            </div>
            <div class="checkout_product-quantity">
                <p>' . $item['quantity_cart'] . '</p>
            </div>
            <div class="checkout_product-cash">
                <p class="price">' . number_format($into_price, 0, ',', '.') . ' đ</p>
            </div>
        </div>
        ';
}
?>
<?php include_once 'header.php' ?>
<title>Thanh Toán</title>
<link rel="stylesheet" href="view/user/css/checkout.css">
<link rel="stylesheet" href="view/user/css/reponsive/checkout.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Giỏ hàng / Thanh toán</div>
    </div>
</section>
<section>
    <div class="container contact-container">
        <form action="?mod=cart&act=checkout" method="post" class="cart-cash">
            <div class="ship-infomation m-1">
                <div class="infomation-user">
                    <div class="infomation-tittle">
                        <p>Thông tin liên hệ giao hàng</p>
                    </div>
                    <div class="infomation-name">
                        <p class="name">Họ và Tên*</p>
                        <input name="name" value="<?= $name ?>" type="text" required placeholder="Nhập họ và tên">
                    </div>
                    <div class="infomation-email">
                        <p>Email</p>
                        <input name="email" value="<?= $email ?>" type="email">
                    </div>
                    <div class="infomation-sdt">
                        <p>Số điện thoại*</p>
                        <input name="phone" value="<?= $phone ?>" type="tel" required placeholder="Nhập số điện thoại">
                    </div>
                </div>
                <div class="infomation-address">
                    <div class="infomation-tittle">
                        <p>Thông tin liên hệ giao hàng</p>
                    </div>
                    <div class="infomation-city">
                        <p class="name">Chọn tỉnh thành*</p>
                        <input name="province" type="text" value="<?= $address[0] ?>" placeholder="Nhập tỉnh thành">
                    </div>
                    <div class="infomation-district">
                        <p>Chọn quận huyện*</p>
                        <input name="district" id="" value="<?= $address[1] ?>" placeholder="Nhập quận huyện"></input>
                    </div>
                    <div class="infomation-ward">
                        <p>Tên phường/ xã*</p>
                        <input name="ward" value="<?= $address[2] ?>" type="tel" required placeholder="Nhập phường xã">
                    </div>
                    <div class="infomation-street">
                        <p>Số nhà, tên đường*</p>
                        <input name="street" value="<?= $address[3] ?>" type="tel" required placeholder="Nhập số nhà / tên đường">
                    </div>
                    <div class="infomation-note">
                        <p>Ghi chú</p>
                        <textarea name="note" id="" cols="30" rows="3"><?= $address[4] ?></textarea>
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
                    <!-- <div class="voucher-content">
                        <input type="text" placeholder="Nhập mã giảm giá nếu có">
                    </div>
                    <div class="voucher-button">
                        <button>Áp dụng</button>
                    </div> -->
                </div>
                <div>
                    <div class="payment-method">
                        <label for="check-zalo" class="payment-method-zalo">
                            <div class="checkbox">
                                <input value="1" id="check-zalo" type="radio" name="method">
                            </div>
                            <div class="zalo-img">
                                <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-ZaloPay-Square.png" alt="">
                            </div>
                            <div class="payment-method-content">
                                <p>Zalo pay</p>
                                <p class="underline">Thanh toán qua Zalo</p>
                            </div>
                        </label>
                        <label for="check-cash" class="payment-method-cash">
                            <div class="checkbox">
                                <input value="2" id="check-cash" type="radio" name="method">
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
                            <p><?= number_format($into_price, 0, ',', '.') ?> đ</p>
                        </div>
                        <div class="payment_total-promotion">
                            <p>Khuyến mãi</p>
                            <p><?php if (isset($_POST['voucher']))echo number_format($voucher_cart['price'],0,',','.');else echo '0'; ?> đ</p>
                        </div>
                        <div class="payment_total-sum">
                            <p>Tổng tiền thanh toán</p>
                            <?php if(isset($_POST['voucher'])): ?>
                            <p class="price"><?= (number_format($into_price - $voucher_cart['price'], 0, ',', '.')) ?> đ</p>
                            <?php else: ?>
                            <p class="price"><?= (number_format($into_price, 0, ',', '.')) ?> đ</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <input name="voucher" hidden type="text" value='<?php if (isset($_POST['voucher'])) echo $voucher_cart['id'] ?>'>
                    <input name="payment-button" value="đặt hàng" type="submit" class="payment-button">
                </div>
            </div>
        </form>
    </div>
    <input hidden id="success" type="checkbox" <?= $check_success ?>>
    <div class="success">
        <div class="success-box">
            <?php if (isset($_POST['method']) != 1 && isset($_POST['check']) != 2) : ?>
                <div class="success-title">Vui lòng chọn phương thức thanh toán</div>
                <label for="success" class="success-next">Thử lại</label>
            <?php else : ?>
                <div class="success-title"><?= $payment_method ?></div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=cart&act=checkout_success" class="success-next">OK</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<script src="view/user/js/checkout.js"></script>
<?php include_once 'footer.php' ?>

