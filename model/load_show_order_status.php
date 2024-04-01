<?php
    require_once 'global.php';
    require_once 'pdo.php';
    require_once 'order.php';
    $status = $_POST['status'];
    // $order = order_SELECT($_POST['status']);
    $status0 = ($status == 0) ? 'account_order_follow-item-active' : '';
    $status1 = ($status == 1) ? 'account_order_follow-item-active' : '';
    $status2 = ($status == 2) ? 'account_order_follow-item-active' : '';
    $status3 = ($status == 3) ? 'account_order_follow-item-active' : '';
    $status4 = ($status == 4) ? 'account_order_follow-item-active' : '';
    $status5 = ($status == 5) ? 'account_order_follow-item-active' : '';
    $status6 = ($status == 6) ? 'account_order_follow-item-active' : '';
    $html_order_status = '
        <div class="account-title">Theo dõi đơn hàng</div>
        <div class="account-order_follow">
            <div onclick="order_status(0)" class="account_order_follow-item '.$status0.'">Xem tất cả (1)</div>
            <div onclick="order_status(1)" class="account_order_follow-item '.$status1.'">Chờ xác nhận</div>
            <div onclick="order_status(2)" class="account_order_follow-item '.$status2.'">Vận chuyển</div>
            <div onclick="order_status(3)" class="account_order_follow-item '.$status3.'">chờ giao hàng</div>
            <div onclick="order_status(4)" class="account_order_follow-item '.$status4.'">Đã giao hàng</div>
            <div onclick="order_status(5)" class="account_order_follow-item '.$status5.'">Đã hủy</div>
            <div onclick="order_status(6)" class="account_order_follow-item '.$status6.'">Trả hàng</div>
        </div>
        <div class="account_order_follow-product_box">
            <div class="account_order_follow-product">
                <div class="account_order_follow_product-img">
                    <img src="" alt="">
                </div>
                <div class="account_order_follow_product-content">
                    <div class="account_order_follow_product-name">Frieren - Pháp Sư Tiễn Táng - Tập 2 - Tặng Kèm Pop–Up Card</div>
                    <div class="account_order_follow_product-price_box">
                        <div class="account_order_follow_product-price_sale">42.7500 đ</div>
                        <del class="account_order_follow_product-price">49.000 đ</del>
                    </div>
                    <div class="account_order_follow_product-quantity">x1</div>
                </div>
                <div class="account_order_follow_product-total">42.7500 đ</div>
                <div class="account_order_follow_product-button_box">
                    <div class="account_order_follow_product-button_item">Hủy</div>
                    <div class="account_order_follow_product-button_item follow_product-button_red">Hủy</div>
                </div>
            </div>
        </div>
    ';
    echo $html_order_status;


















?>