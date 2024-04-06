<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../product.php';
    require_once '../order.php';
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



    $html_product_order = '
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
        $total = 0;
            $html_product_order .= '
                <div class="account_order_follow-order">';
        foreach ($item as $product_order) {
            $product = product_ONE($product_order['product_id']);
            $order_status = order_SELECT($_SESSION['user']['id'],0,$product_order['order_id'])[0]['order_status'];
            $total += $product['price_sale'] * $product_order['quantity'];
            $link_product_detail = '?mod=page&act=product-detail&id='.$product['id'];
            $html_product_order .= '
                    <div class="account_order_follow-product">
                        <a href="'.$link_product_detail.'" class="account_order_follow_product-img">
                            <img src="view/'.$product['image'].'" alt="'.$product['name'].'">
                        </a>
                        <div class="account_order_follow_product-main">
                            <div class="account_order_follow_product-content">
                                <a href="'.$link_product_detail.'" class="account_order_follow_product-name">'.$product['name'].'</a>
                                <div class="account_order_follow_product-price_box">
                                    <div class="account_order_follow_product-price_sale">'.number_format($product['price_sale'],0,',','.').' đ</div>
                                    <del class="account_order_follow_product-price">'.number_format($product['price'],0,',','.').' đ</del>
                                </div>
                                <div class="account_order_follow_product-quantity">x '.$product_order['quantity'].'</div>
                            </div>
                            <div class="account_order_follow_product-total">'.number_format(($product['price_sale'] * $product_order['quantity']),0,',','.').' đ</div>
                        </div>
                    </div>';
                    
        }
        $html_product_order .= '
                    <div class="account_order_follow_order-total_fun">
                        <div class="account_order_follow_order-total">Tổng '.count($item).' sản phẩm: <b>'.number_format($total,0,',','.').' đ</b></div>
                        <div class="account_order_follow_order-fun">';
                switch ($order_status) {
                case 1:
                    $html_product_order .= '
                            <div class="account_order_follow_order_fun-btn">Hủy</div>
                    ';
                    break;
                case 4:
                    $html_product_order .= '
                            <div class="account_order_follow_order_fun-btn">Đánh giá</div>
                            <div class="account_order_follow_order_fun-btn account_order_follow_order_fun-btn_red">Đặt lại</div>
                    ';
                    break;
                case 5:
                case 6:
                    $html_product_order .= '
                            <div class="account_order_follow_order_fun-btn">Mua lại</div>
                    ';
                    break;
                }
                            
                $html_product_order .= '
                        </div>
                    </div>
                </div>
        ';
    }
    $html_product_order .= '
        </div>';
    
    echo $html_product_order;


















?>