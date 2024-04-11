<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../voucher.php';
    $user_id = ($_SESSION['user']) ? $_SESSION['user']['id'] : 0 ;
    $vouchers = voucher_SELECT($user_id);
    $id = $_POST['id']; 
    $user_cart = ($_SESSION['user']) ? $_SESSION['user']['username'] : "IPCOMPUTER" ;
    unset($_SESSION['cart'][$user_cart][$id]);

    $voucher_id = $_POST['voucher_id'];
    if ($voucher_id) {
        $voucher = voucher_ONE($voucher_id);
    }

    $html_change = '
            <div class="box_cart">
                <div class="box_cart-product">
                    <div class="cart_product-tittle">
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
                    </div>  ';



    $total_price = 0;
    foreach ($_SESSION['cart'][$user_cart] as $item) {
        $link_del = 'index.php?mod=cart&act=delete&id='.$item['id'];
        $into_price = $item['quantity_cart'] * $item['price_sale'];
        $total_price += $into_price;
        $html_change .= '  
            <div class="cart-product">
                <div class="product-total"> 
                    <div class="cart-product-img">
                        <img src="view/'.$item['image'].'" alt="">
                    </div>
                    <div class="product-info">
                        <p>'.$item['name'].'</p>
                        <div class="product-price">
                            <span class="red-color">'.number_format($item['price_sale'],0,',','.').' đ</span>
                            <del>'.number_format($item['price'],0,',','.').' đ</del>
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
                            <input hidden id="voucher_id" type="text" value="'.$voucher_id.'">
                        </div>
                    </div>
                    <div class="prodcut-cash">
                        <p class="red-color prodcut-price">'.number_format($into_price,0,',','.').' đ</p>
                    </div>
                    <div class="prodcut-trash">';
                    if (count($_SESSION['cart'][$user_cart]) == 1) {
                        $html_change .= '  
                            <a href="'.$link_del.'" class="trash"><span class="material-symbols-outlined">delete</span></a>
                        ';
                    } else {
                        $html_change .= '  
                            <div onclick="delete_cart(this)" class="trash"><span class="material-symbols-outlined">delete</span></div>
                            <input hidden type="text" value="'.$item['id'].'">
                            <input hidden id="voucher_id" type="text" value="'.$voucher_id.'">
                        ';
                    }
                $html_change .='
                    </div>
                </div>
            </div>

        ';
    }

    $html_change .= '            
                    </div>
                    <form action="?mod=cart&act=checkout" method="post" class="box_cart-prmotion">
                        <div class="cart_product-promotion">
                            <div class="promotion">
                            <span class="material-symbols-outlined">sell</span>
                                <p>Khuyến Mãi</p>
                            </div>
                        </div>

                        <div class="cart_voucher-container">';

                        $count = 1;
                        $html_voucher = '';
                        foreach ($vouchers as $item) {
                            $acctive = ($item['id'] == $voucher_id) ? "checked" : "";
                            $end_date = ($item['end_date']) ? ' đến '.date('d-m-Y', strtotime($item['end_date'])) : '';
                            $html_change .= '
                                <label for="check_voucher'.$count.'" class="cart_vouche-item">
                                    <input '.$acctive.' onchange="voucher_show(this)" hidden class="cart_vouche_item-checkbox" id="check_voucher'.$count.'" type="radio" name="voucher" value="'.$item['id'].'">
                                    <label for="check_voucher'.$count++.'" class="cart_vouche_item-content">
                                        <div class="cart_vouche_item-code">VOUCHER - '.$item['code'].'</div>
                                        <div class="cart_vouche_item-date">Bắt đầu từ ngày '.date('d-m-Y', strtotime($item['start_date'])).$end_date.'</div>
                                        <div class="cart_vouche_item-price">Giá trị: <b>'.number_format($item['price'],0,',','.').' đ</b></div>
                                        <div class="cart_vouche_item-quantity">số lượng '.number_format($item['quantity'],0,',','.').'</div>
                                    </label>
                                </label>
                            ';
                        }

    $html_change .= '     
                        </div>
                        <div class="cart-payment">';
                        
                        if ($voucher_id) {
    $html_change .= '
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
    ';
                        } else {
    $html_change .= '
                            <div class="cart-payment-cash">
                                <p>Tổng '. count($_SESSION['cart'][$user_cart]) .' sản phẩm:</p>
                                <p>'. number_format($total_price,0,',','.').' đ</p>
                            </div>
                            <div class="cart-payment-cash">
                                <p id="voucher-name">Voucher</p>
                                <p id="voucher-price">0 đ</p>
                            </div>
                            <div class="cart-payment-total">
                                <span>Tổng Số Tiền:</span>
                                <p>'. number_format($total_price,0,',','.').' đ</p>
                            </div>
    ';
                        }
                            

    $html_change .= '   
                            <button class="payment-button" name="btn_checkout">THANH TOÁN</button>
                            
                        </div>
                    </form>
                </div>';
 
    echo $html_change;
?>