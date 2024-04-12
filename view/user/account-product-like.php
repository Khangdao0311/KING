<?php
    $html_product_like = '';
    foreach ($_SESSION['like'][$user_information] as $item) {
        $html_product_like .= '
            <div class="account_product_like-item">
                <div class="account_product_like_item-img">
                    <img src="view/'.$item['image'].'" alt="">
                </div>
                <div class="account_product_like_item-content">
                    <div class="account_product_like_item-name">'.$item['name'].'</div>
                    <div class="account_product_like_item-price_box">
                        <div class="account_product_like_item-price_sale">'.number_format($item['price_sale'],0,',','.').' đ</div>
                        <del class="account_product_like_item-price">'.number_format($item['price'],0,',','.').' đ</del>
                    </div>
                </div>
                <div class="account_product_like_item-fun">
                    <div onclick="deletelike(this)" class="account_product_like_item_fun-delete">Xóa</div>
                    <input type="text" hidden value="' . $item['id'] . '">
                </div>
            </div>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title>Sản phẩm yêu thích</title>
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
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item">theo dõi đơn hàng</a>
                <a href="?mod=user&act=account-voucher" class="accuont_nav-item">ví voucher</a>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <a href="?mod=user&act=account-comment" class="accuont_nav-item">nhận xét của tôi</a>
                <a href="?mod=user&act=account-product-like" class="accuont_nav-item accuont_nav-item_focus">Sản phẩm yêu thích</a>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-main m-1">
            <div class="account-title">Sản phẩm yêu thích</div>
            <div class="account_product_like-box">
                
                <?= $html_product_like ?>
                   
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