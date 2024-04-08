<?php
    $total_price = 0;
    $html_product_cart = "";
    foreach ($_SESSION['cart'] as $item) {
        $link_del = 'index.php?mod=cart&act=delete&del='.$item['id'];
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
                    <span class="id_jq" hidden>'.$item['id'].'</span>
                </div>
            </div>
            <div class="prodcut-cash">
                <p class="red-color prodcut-price">'.number_format($into_price,0,',','.').' đ</p>
            </div>
            <div class="prodcut-trash">
                <a href="'.$link_del.'" class="trash">
                    <span class="material-symbols-outlined">delete</span>
                </a>
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
                        <span class="material-symbols-outlined">sell</span>
                            <p>Khuyến Mãi</p>
                        </div>
                        <div class="readmore">
                            <p>Xem thêm </p>
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </div>
                    </div>

                    <div class="cart_voucher-container">
                        <div class="cart_vouche-item">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="cart-payment">
                        <div class="cart-payment-cash">
                            <p>Thành tiền</p>
                            <p>90.250 đ</p>
                        </div>
                        <div class="cart-payment-cash">
                            <p>Thành tiền</p>
                            <p>90.250 đ</p>
                        </div>
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
<?php include_once 'footer.php' ?>
<script src="view/user/js/cart.js"></script>