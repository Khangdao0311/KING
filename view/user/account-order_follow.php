<?php include_once 'header.php' ?>
<title>Document</title>
<link rel="stylesheet" href="view/user/css/account.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Tài khoản</div>
    </div>
</section>
<section>
    <div class="container account-container">
    <div class="account-nav_box">
            <div class="account_nav-title">tài khoản</div>
            <div class="account_nav-box">
                <a href="?mod=user&act=information" class="accuont_nav-item">Thông tin tài khoản</a>
                <a href="?mod=user&act=account-address" class="accuont_nav-item">Địa chỉ giao hàng</a>
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item accuont_nav-item_focus">theo dõi đơn hàng</a>
                <div class="accuont_nav-item">ví voucher</div>
                <div class="accuont_nav-item">Đổi mật khẩu</div>
                <div class="accuont_nav-item">nhận xét của tôi</div>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-main">
            <div class="account-title">Theo dõi đơn hàng</div>
            <div class="account-order_follow">
                <div onclick="order_status(0)" class="account_order_follow-item account_order_follow-item-active">Xem tất cả (1)</div>
                <div onclick="order_status(1)" class="account_order_follow-item">Chờ xác nhận</div>
                <div onclick="order_status(2)" class="account_order_follow-item">Vận chuyển</div>
                <div onclick="order_status(3)" class="account_order_follow-item">chờ giao hàng</div>
                <div onclick="order_status(4)" class="account_order_follow-item">Đã giao hàng</div>
                <div onclick="order_status(5)" class="account_order_follow-item">Đã hủy</div>
                <div onclick="order_status(6)" class="account_order_follow-item">Trả hàng</div>
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
        </div>
    </div>
</section>

<script src="view/user/js/acount.js"></script>
<?php include_once 'footer.php' ?>