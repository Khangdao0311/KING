<?php
    session_start();
    require_once 'global.php';
    require_once 'pdo.php';
    require_once 'product.php';
    require_once 'order.php';
    $status = $_POST['status'];

    $orders = order_SELECT($_SESSION['user']['id'],$status,0);
    $order_detail = [];
    foreach ($orders as $item) {
        array_push($order_detail, order_detail_SELECT($item['id'],0));
    }
   

    $orders_all = order_SELECT($_SESSION['user']['id'],0,0);
    $order_detail_all = [];
    foreach ($orders_all as $item) {
        array_push($order_detail_all, order_detail_SELECT($item['id'],0));
    }
    $products_all = [];
    foreach ($order_detail_all as $box) {
        foreach ($box as $item) {
            array_push($products_all, product_ONE($item['product_id']));
        }
    }

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
            <div onclick="order_status(0)" class="account_order_follow-item '.$status0.'">Xem tất cả ('.count($products_all).')</div>
            <div onclick="order_status(1)" class="account_order_follow-item '.$status1.'">Chờ xác nhận</div>
            <div onclick="order_status(2)" class="account_order_follow-item '.$status2.'">Vận chuyển</div>
            <div onclick="order_status(3)" class="account_order_follow-item '.$status3.'">chờ giao hàng</div>
            <div onclick="order_status(4)" class="account_order_follow-item '.$status4.'">Đã giao hàng</div>
            <div onclick="order_status(5)" class="account_order_follow-item '.$status5.'">Đã hủy</div>
            <div onclick="order_status(6)" class="account_order_follow-item '.$status6.'">Trả hàng</div>
        </div>
        <div class="account_order_follow-product_box">';

                
    foreach ($order_detail as $item) {
        foreach ($item as $products) {
            $product = product_ONE($products['product_id']);
            $order_status = order_SELECT($_SESSION['user']['id'],0,$products['order_id'])[0]['order_status'];
            $html_order_status .= '
                <div class="account_order_follow-product">
                    <div class="account_order_follow_product-img">
                        <img src="view/'.$product['image'].'" alt="'.$product['name'].'">
                    </div>
                    <div class="account_order_follow_product-main">
                        <div class="account_order_follow_product-content">
                            <div class="account_order_follow_product-name">'.$product['name'].'</div>
                            <div class="account_order_follow_product-price_box">
                                <div class="account_order_follow_product-price_sale">'.number_format($product['price_sale'],0,',','.').' đ</div>
                                <del class="account_order_follow_product-price">'.number_format($product['price'],0,',','.').' đ</del>
                            </div>
                            <div class="account_order_follow_product-quantity">x'.order_detail_SELECT(0,$product['id'])[0]['quantity'].'</div>
                        </div>
                        <div class="account_order_follow_product-fun">
                            <div class="account_order_follow_product-total">'.number_format(($product['price_sale']*$products['quantity']),0,',','.').' đ</div>
                            <div class="account_order_follow_product-button_box">';
            switch ($order_status) {
                case 1:
                    $html_order_status .= '
                                <div class="account_order_follow_product-button_item">Hủy</div>
                    ';
                    break;
                case 4:
                    $html_order_status .= '
                                <div class="account_order_follow_product-button_item">Đánh giá</div>
                                <div class="account_order_follow_product-button_item follow_product-button_red">Đặt lại</div>
                    ';
                    break;
                case 5:
                case 6:
                    $html_order_status .= '
                                <div class="account_order_follow_product-button_item">Mua Lại</div>
                    ';
                    break;
            }
           $html_order_status .= '             
                            </div>
                        </div> 
                    </div>
                </div>
            ';
        }
    }
    $html_order_status .= '
        </div>';
    
    echo $html_order_status;


















?>