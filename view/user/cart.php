<?php
    $total_price = 0;
    $html_product_cart = "";
    foreach ($_SESSION['cart'][$user_cart] as $item) {
        $link_product_detail = '?mod=page&act=product-detail&id='.$item['id'];
        $link_del = 'index.php?mod=cart&act=delete&id='.$item['id'];
        $into_price = $item['quantity_cart'] * $item['price_sale'];
        $total_price += $into_price;
        $html_product_cart .= '  
        <div class="cart-product">
        <div class="product-total"> 
            <a href="'.$link_product_detail.'" class="cart-product-img">
                <img src="view/'.$item['image'].'" alt="">
            </a>
            <div class="product-info">
                <a href="'.$link_product_detail.'">'.$item['name'].'</a>
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
                    <input hidden id="voucher_id" type="text" value="0">
                </div>
            </div>
            <div class="prodcut-cash">
                <p class="red-color prodcut-price">'.number_format($into_price,0,',','.').' đ</p>
            </div>
            <div class="prodcut-trash">';
            if (count($_SESSION['cart'][$user_cart]) == 1) {
                $html_product_cart .= '  
                    <a href="'.$link_del.'" class="trash"><span class="material-symbols-outlined">delete</span></a>
                ';
            } else {
                $html_product_cart .= '  
                    <div onclick="delete_cart(this)" class="trash"><span class="material-symbols-outlined">delete</span></div>
                    <input hidden type="text" value="'.$item['id'].'">
                    <input hidden id="voucher_id" type="text" value="0">
                ';
            }
        $html_product_cart .= '  
            </div>
        </div>
    </div>

        ';
    }
    $count = 1;
    $html_voucher = '';
    foreach ($vouchers as $item) {
        $end_date = ($item['end_date']) ? ' đến '.date('d-m-Y', strtotime($item['end_date'])) : '';
        $html_voucher .= '
            <label for="check_voucher'.$count.'" class="cart_vouche-item">
                <input onchange="voucher_show(this)" hidden class="cart_vouche_item-checkbox" id="check_voucher'.$count.'" type="radio" name="voucher" value="'.$item['id'].'">
                <label for="check_voucher'.$count++.'" class="cart_vouche_item-content">
                    <div class="cart_vouche_item-code">VOUCHER - '.$item['code'].'</div>
                    <div class="cart_vouche_item-date">Bắt đầu từ ngày '.date('d-m-Y', strtotime($item['start_date'])).$end_date.'</div>
                    <div class="cart_vouche_item-price">Giá trị: <b>'.number_format($item['price'],0,',','.').' đ</b></div>
                    <div class="cart_vouche_item-quantity">số lượng: '.number_format($item['quantity'],0,',','.').'</div>
                </label>
            </label>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title >Giỏ Hàng</title>
<link rel="stylesheet" href="view/user/css/cart.css">
<link rel="stylesheet" href="view/user/css/reponsive/cart.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Giỏ hàng</div>
    </div>
</section>
<section>
    <div class="container cart-container">
        <?php if($_SESSION['cart'][$user_cart] != []):?>
            <div class="box_cart">
                <div class="box_cart-product m1">
                    <div class="cart_product-tittle">
                        <!-- <div class="check">
                            <input type="checkbox">
                        </div> -->
                        <div class="product-total">
                            <p>Tất Cả Sản Phẩm</p>
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
                <form action="?mod=cart&act=checkout" method="post" class="box_cart-prmotion">
                    <div class="cart_product-promotion">
                        <div class="promotion">
                        <span class="material-symbols-outlined">sell</span>
                            <p>Khuyến Mãi</p>
                        </div>
                        
                    </div>

                    <div class="cart_voucher-container">

                        <?= $html_voucher ?>

                    </div>
                    <div class="cart-payment">
                        <div class="cart-payment-cash">
                            <p>Tổng <?= count($_SESSION['cart'][$user_cart]) ?> sản phẩm:</p>
                            <p><?= number_format($total_price,0,',','.')?> đ</p>
                        </div>
                        <div class="cart-payment-cash">
                            <p id="voucher-name">Voucher</p>
                            <p id="voucher-price">0 đ</p>
                        </div>
                        <div class="cart-payment-total">
                            <span>Tổng Số Tiền:</span>
                            <p><?= number_format($total_price,0,',','.')?> đ</p>
                        </div>
                        <button class="payment-button" name="btn_checkout">THANH TOÁN</button>
                    </div>
                </form>
            </div>
        <?php else:  ?>
            <div class="non-cart">GIỎ HÀNG TRỐNG</div>;
        <?php endif;?>
    </div>
</section>
<?php include_once 'footer.php' ?>
<script src="view/user/js/cart.js"></script>