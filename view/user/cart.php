<?php
    $total_price = 0;
    $html_product_cart = "";
    foreach ($_SESSION['cart'] as $item) {
        $link_del = 'index.php?mod=cart&act=list&del='.$item['id'];
        $into_price = $item['quantity_cart'] * $item['price_sale'];
        $total_price += $into_price;
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
                    <button onclick="minus_cart(this)" class = "btn-minus">-</button>
                    <input value = "'.$item['quantity_cart'].'" class = "quantity_cart_number">
                    <button onclick="plus_cart(this)" class = "btn-plus">+</button>
                </div>
            </div>
            <div class="prodcut-cash">
                <p class="red-color prodcut-price">'.number_format($into_price,0,',','.').' đ</p>
            </div>
            <div class="prodcut-trash">
                <a href="'.$link_del.'" class="trash"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg></a>
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
    <?php if($_SESSION['cart'] != []):?>
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
                <?= $html_product_cart ?>
            </div>
            <div class="box_cart-prmotion">
                <div class="cart_product-promotion">
                    <div class="promotion">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFD43B" d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
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
                        <p><?php
                            if (isset($total_price)) {
                                echo number_format($total_price,0,',','.');
                            }else{
                                echo '0';
                            }
                        ?>đ</p>
                    </div>
                    <a href="index.php?mod=cart&act=checkout" class="payment-button">
                        <button>THANH TOÁN</button>
                    </a>
                    <!-- <div class="payment-notice">
                        <p>(Giảm giá trên web chỉ áp dụng cho bán lẻ)</p>
                    </div> -->
                </div>
            </div>
        </div>
    <?php else:  ?>
        <div class="non-cart">GIỎ HÀNG TRỐNG</div>;
    <?php endif;?>
    </div>
</section>
<script src="view/user/js/cart.js"></script>
<?php include_once 'footer.php' ?>