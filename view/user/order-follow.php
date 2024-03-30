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
                <div class="accuont_nav-item">địa chỉ</div>
                <div class="accuont_nav-item accuont_nav-item_focus">theo dõi đơn hàng</div>
                <div class="accuont_nav-item">ví voucher</div>
                <div class="accuont_nav-item">sách theo bộ</div>
                <div class="accuont_nav-item">nhận séc của tôi</div>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
            </div>
        </div>
        <div class="account-information_box">
            <div class="account_information-title">Theo dõi đơn hàng</div>
            <div class="account-order_follow">
                <div class="account_order_follow-item">Xem tất cả (1)</div>
                <div class="account_order_follow-item">Chờ xác nhận</div>
                <div class="account_order_follow-item">Vận chuyển</div>
                <div class="account_order_follow-item">chờ giao hàng</div>
                <div class="account_order_follow-item">Đã giao hàng</div>
                <div class="account_order_follow-item">Đã hủy</div>
                <div class="account_order_follow-item">Trả hàng</div>
            </div>

            <div class="account_order_follow-product">
                <div class="account_order_follow_product-img"></div>
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
</section>
<?php include_once 'footer.php' ?>