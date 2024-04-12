<?php
    $html_product_order = '';
    foreach ($order_detail as $item) {
        $total = 0;
       
        $html_product_order .= '
            <div class="account_order_follow-order">';
        foreach ($item as $product_order) {
            $order = order_ONE(0,$item[0]['order_id']);
            $voucher = ($order['voucher_id']) ? voucher_ONE($order['voucher_id']) : 0 ;
            $product = product_ONE($product_order['product_id']);
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
                        <div class="account_order_follow_order-total">';
                        if ($voucher) {
                            $html_product_order .= '
                            <div class="account_order_follow_order_total-voucher">Đã áp dụng Voucher - '.$voucher['code'].' </div>
                            <div class="account_order_follow_order_total-price">Tổng '.count($item).' sản phẩm: <b>'.number_format($total - $voucher['price'],0,',','.').' đ</b></div>';
                        } else {
                            $html_product_order .= '
                            <div class="account_order_follow_order_total-price">Tổng '.count($item).' sản phẩm: <b>'.number_format($total ,0,',','.').' đ</b></div>';
                        }
                        $html_product_order .= '
                        </div>';
                switch ($order['order_status']) {
                case 1:
                    $html_product_order .= '
                        <div class="account_order_follow_order-fun">
                            <input hidden type="text" value="0">
                            <div onclick="cancel(this)" class="account_order_follow_order_fun-btn">Hủy</div>
                            <input hidden type="text" value="'.$order['id'].'">
                        </div>';
                    break;
                case 4:
                    $html_product_order .= '
                        <div class="account_order_follow_order-fun">
                            <div class="account_order_follow_order_fun-btn">Đánh giá</div>
                            <div class="account_order_follow_order_fun-btn account_order_follow_order_fun-btn_red">Đặt lại</div>
                        </div>';
                    break;
                case 5:
                case 6:
                    $html_product_order .= '
                        <div class="account_order_follow_order-fun">
                            <div class="account_order_follow_order_fun-btn">Mua lại</div>
                        </div>';
                    break;
                }
                            
                $html_product_order .= '
                        
                    </div>
                </div>
        ';
    }
?>    
<?php include_once 'header.php' ?>
<title>Theo dõi đơn hàng</title>
<link rel="stylesheet" href="view/user/css/account.css">
<link rel="stylesheet" href="view/user/css/reponsive/account-order_follow.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Tài khoản</div>
    </div>
</section>
<section>
    <div class="container">
        <label class="pc-0 t-0" for="check_nav_account"><span class="material-symbols-outlined account-nav-menu">menu</span></label>
    </div>
</section>
<section>
    <div class="container account-container">
    <input hidden id="check_nav_account" type="checkbox">
    <label for="check_nav_account" class="account_layout_dark"></label>
    <div class="account-nav_box">
            <div class="account_nav-title">tài khoản</div>
            <div class="account_nav-box">
                <a href="?mod=user&act=information" class="accuont_nav-item">Thông tin tài khoản</a>
                <a href="?mod=user&act=account-address" class="accuont_nav-item">Địa chỉ giao hàng</a>
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item accuont_nav-item_focus">theo dõi đơn hàng</a>
                <a href="?mod=user&act=account-voucher" class="accuont_nav-item">ví voucher</a>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <a href="?mod=user&act=account-comment" class="accuont_nav-item">nhận xét của tôi</a>
                <a href="?mod=user&act=account-product-like" class="accuont_nav-item">Sản phẩm yêu thích</a>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-main m-1">
            <div class="account-title">Theo dõi đơn hàng</div>
            <div class="account-order_follow">
                <div onclick="order_status(0)" class="account_order_follow-item account_order_follow-item-active">Xem tất cả (<?= count($order_detail) ?>)</div>
                <div onclick="order_status(1)" class="account_order_follow-item">Chờ xác nhận</div>
                <div onclick="order_status(2)" class="account_order_follow-item">Vận chuyển</div>
                <div onclick="order_status(3)" class="account_order_follow-item">chờ giao hàng</div>
                <div onclick="order_status(4)" class="account_order_follow-item">Đã giao hàng</div>
                <div onclick="order_status(5)" class="account_order_follow-item">Đã hủy</div>
                <div onclick="order_status(6)" class="account_order_follow-item">Trả hàng</div>
            </div>
            <div class="account_order_follow-product_box">
                
                <?= $html_product_order ?>
                

            </div>
        </div>
    </div>
</section>
<script src="view/user/js/account.js"></script>
<?php include_once 'footer.php' ?>
<!-- <div class="account_order_follow_product-fun">
    <div class="account_order_follow_product-button_box">';
        <div class="account_order_follow_product-button_item">Đánh giá</div>
        <div class="account_order_follow_product-button_item follow_product-button_red">Đặt lại</div>
    </div>
</div>  -->