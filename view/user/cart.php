
<?php include_once 'header.php' ?>
<title>Giỏ Hàng</title>
<link rel="stylesheet" href="view/user/css/cart.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Giỏ hàng</div>
    </div>
</section>
<section>
    <div class="container cart-container">
        <div class="box_cart">
            <div class="box_cart-product">
                <div class="cart_product-tittle">
                    <div class="check">
                        <input type="checkbox">
                    </div>
                    <div class="product-total">
                        <p>Chọn Tất Cả Sản Phẩm</p>
                    </div>
                        <div class="product-pay">
                            <div class="product-quantity">
                                <p>Số Lượng</p>
                            </div>
                            <div class="prodcut-cash">
                                <p>Thành Tiền</p>
                            </div>
                            <div class="prodcut-trash">
                                <p class="trash"></p>
                            </div>
                        </div>
                </div>  

                <div class="cart-product">
                    <div class="check">
                        <input type="checkbox">
                    </div>
                    <div class="product-total"> 
                        <div class="cart-product-img">
                            <img src="" alt="Tên sản phẩm">
                        </div>
                        <div class="product-info">
                            <p>Tên sản phẩm</p>
                            <div class="product-price">
                                <span class="red-color">100.000 đ</span>
                                <del>200.000 đ</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-pay">
                        <div class="product-quantity">
                            <div class="quantity">
                                <button>-</button>
                                <p>1</p>
                                <button>+</button>
                            </div>
                        </div>
                        <div class="prodcut-cash">
                            <p class="red-color">100.000 đ</p>
                        </div>
                        <div class="prodcut-trash">
                            <a href="'.$link_delete.'" class="trash">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  viewBox="0 0 24 24"><path d="M 10 2 L 9 3 L 5 3 C 4.4 3 4 3.4 4 4 C 4 4.6 4.4 5 5 5 L 7 5 L 17 5 L 19 5 C 19.6 5 20 4.6 20 4 C 20 3.4 19.6 3 19 3 L 15 3 L 14 2 L 10 2 z M 5 7 L 5 20 C 5 21.1 5.9 22 7 22 L 17 22 C 18.1 22 19 21.1 19 20 L 19 7 L 5 7 z M 9 9 C 9.6 9 10 9.4 10 10 L 10 19 C 10 19.6 9.6 20 9 20 C 8.4 20 8 19.6 8 19 L 8 10 C 8 9.4 8.4 9 9 9 z M 15 9 C 15.6 9 16 9.4 16 10 L 16 19 C 16 19.6 15.6 20 15 20 C 14.4 20 14 19.6 14 19 L 14 10 C 14 9.4 14.4 9 15 9 z"></path></svg>                            </a>
                        </div>
                    </div>
                </div>  
               
               
            </div>
            <div class="box_cart-prmotion">
                <div class="cart_product-promotion">
                    <div class="promotion">
                        <span></span>
                        <p>Khuyến Mãi</p>
                    </div>
                    <div class="readmore">
                        <p>Xem thêm </p>
                        <span> > </span>
                    </div>
                </div>

                <div class="promotion-content">
                    <div class="promotion-name">
                        <p>MÃ GIẢM 10K - ĐƠN HÀNG TỪ 150K</p>
                        <a>chi tiết</a>
                    </div>
                    <div class="promotion-detail">
                      <p>Không Áp Dụng Cho Sách Giáo Khoa</p>
                    </div>
                    <div class="promotion-quantity">
                        <div class="promotion-quantity-content">
                            <div class="promotion-quantity-bar"></div>
                            <div class="promotion-quantity-name">
                                <p>Mua thêm 150.000đ để nhận mã</p>
                                <p>150.000đ</p>
                            </div>
                        </div>
                        <div class="product-quantity-button">
                            <button>Mua Thêm</button>
                        </div>
                    </div>
                </div>

                <div class="cart-payment">
                    <div class="cart-payment-describle">
                        <p>Có thể áp dụng đồng thời nhiều mã</p>
                        <div>!</div>
                    </div>
                    <!-- <div class="cart-payment-cash">
                        <p>Thành tiền</p>
                        <p>90.250 đ</p>
                    </div> -->
                    <div class="cart-payment-total">
                        <span>Tổng Số Tiền:</span>
                        <p>90.250 đ</p>
                    </div>
                    <div class="payment-button">
                        <button>THANH TOÁN</button>
                    </div>
                    <!-- <div class="payment-notice">
                        <p>(Giảm giá trên web chỉ áp dụng cho bán lẻ)</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="non-cart">GIỎ HÀNG TRỐNG</div>
    </div>
</section>

<?php include_once 'footer.php' ?>