<?php
    $html_product_cart = "";
    foreach ($_SESSION['cart'] as $item) {
        $link_del = 'index.php?mod=cart&act=list&del='.$item['id'];
        $html_product_cart .= '  
        <div class="cart-product">
        <div class="check">
            <input type="checkbox">
        </div>
        <div class="product-total"> 
            <div class="cart-product-img">
                <img src="view/'.$item['image'].'" alt="">
            </div>
            <div class="product-info">
                <p>'.$item['name'].'</p>
                <div class="product-price">
                    <span class="red-color">'.number_format($item['price_sale'],0,',','.').' đ</span>
                    <span>'.number_format($item['price'],0,',','.').' đ</span>
                </div>
            </div>
        </div>
        <div class="product-pay">
            <div class="product-quantity">
                <div class="quantity">
                    <button>-</button>
                    <p>'.$item['quantity_cart'].'</p>
                    <button>+</button>
                </div>
            </div>
            <div class="prodcut-cash">
                <p class="red-color">'.number_format($item['price'],0,',','.').' đ</p>
            </div>
            <div class="prodcut-trash">
                <a href="'.$link_del.'" class="trash">&#9746;</a>
            </div>
        </div>
    </div>

        ';
    }
?>
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

                <?=$html_product_cart?>
               
               
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
        <!-- <div class="non-cart">GIỎ HÀNG TRỐNG</div> -->
    </div>
</section>

<?php include_once 'footer.php' ?>