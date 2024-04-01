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
                        <input type="text" required>
                    </div>
                    <div class="infomation-email">
                        <p>Email</p>
                        <input type="email">
                    </div>
                    <div class="infomation-sdt">
                        <p>Số điện thoại*</p>
                        <input type="tel" required>
                    </div>
                </div>

                <div class="infomation-address">
                    <div class="infomation-tittle">
                        <p>Thông tin liên hệ giao hàng</p>
                    </div>
                    <div class="infomation-city">
                        <p class="name">Chọn tỉnh thành*</p>
                        <select name="" id="">
                                <option value="">---Chọn tỉnh thành---</option>
                        </select>
                    </div>
                    <div class="infomation-district">
                        <p>Chọn quận huyện*</p>
                        <select name="" id="">
                            <option value="">Bạn chưa chọn tỉnh thành</option>
                        </select>
                    </div>
                    <div class="infomation-ward">
                        <p>Tên phường/ xã*</p>
                        <input type="tel" required>
                    </div>
                    <div class="infomation-street">
                        <p>Số nhà, tên đường*</p>
                        <input type="tel" required>
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
                <div class="checkout_product-content">
                    <div class="checkout_product-img">
                        <img src="hinh.jpg" alt="s">
                    </div>
                    <div class="checkout_product-name">
                        <p>Giáo Dục Đầu Đời Cho Trẻ - Những Bài Học Tự Bảo Vệ Bản Thân - Không Được Chạm Vào Vùng Riêng Tư Của Tớ</p>
                        <div class="checkout_product-price">
                            <p class="price">29.000 đ</p>
                            <del>40.000 đ</del>
                        </div>
                    </div>
                    <div class="checkout_product-quantity">
                        <p>1</p>
                    </div>
                    <div class="checkout_product-cash">
                        <p class="price">29.000 đ</p>
                    </div>
                </div>
                <div class="checkout_product-content">
                    <div class="checkout_product-img">
                        <img src="hinh.jpg" alt="s">
                    </div>
                    <div class="checkout_product-name">
                        <p>Giáo Dục Đầu Đời Cho Trẻ - Những Bài Học Tự Bảo Vệ Bản Thân - Không Được Chạm Vào Vùng Riêng Tư Của Tớ</p>
                        <div class="checkout_product-price">
                            <p class="price">29.000 đ</p>
                            <del>40.000 đ</del>
                        </div>
                    </div>
                    <div class="checkout_product-quantity">
                        <p>1</p>
                    </div>
                    <div class="checkout_product-cash">
                        <p class="price">29.000 đ</p>
                    </div>
                </div>

                <div class="voucher">
                    <div class="voucher-content">
                        <input type="text" placeholder="Nhập mã giảm giá nếu có">
                    </div>
                    <div class="voucher-button">
                        <button>Áp dụng</button>
                    </div>
                </div>

                <div class="payment-method">
                    <label for="check-zalo" class="payment-method-zalo">
                        <div class="checkbox">
                            <input id="check-zalo" type="radio" name="check">
                        </div>
                        <div class="zalo-img">
                            <img src="hinh.jpg" alt="">
                        </div>
                        <div class="payment-method-content">
                            <p>Zalo pay</p>
                            <p class="underline">Thanh toán qua Zalo</p>
                        </div>
                    </label>
                    <label for="check-cash" class="payment-method-cash">
                        <div class="checkbox">
                            <input id="check-cash" type="radio" name="check">
                        </div>
                        <div class="cash-img">
                            <img src="hinh.jpg" alt="">
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
                        <p>90.250 đ</p>
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
                        <p class="price">100.250 đ</p>
                    </div>
                </div>
                <label for="order_success" class="payment-button">đặt hàng</label>
            </div>
        </div>
        <input hidden id="order_success" type="checkbox">
        <div class="order_success">
            <div class="order_success-box">
                <div class="order_success-title">Đặt hàng thành công</div>
                <div class="order_success-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" alt="">
                </div>
                <label for="order_success" class="order_success-next">OK</label>
            </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php' ?>