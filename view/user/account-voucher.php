<?php
    $html_voucher = '';
    foreach ($vouchers as $item) {
        $end_date = ($item['end_date']) ? 'đến '.date('d-m-Y', strtotime($item['end_date'])) : '' ;
        $html_voucher .= '
            <div class="col-2 col">
                <div class="account_voucher-item">
                    <div class="account_voucher_item-code">MÃ VOUCHER - '.$item['code'].'</div>
                    <div class="account_voucher_item-date">Bắt đầu từ '.date('d-m-Y', strtotime($item['start_date'])).' '.$end_date.'</div>
                    <div class="account_voucher_item-box">
                        <div class="account_voucher_item-price_quantity">
                            <div class="account_voucher_item-price">Giá trị: <b>'.number_format($item['price'],0,',','.').' đ</b></div>
                            <div class="account_voucher_item-quantity">Số lượng: '.number_format($item['quantity'],0,',','.').'</div>
                        </div>
                        <div class="account_voucher_item-btn">Áp dụng</div>
                    </div>
                </div>
            </div>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title>Ví Voucher</title>
<link rel="stylesheet" href="view/user/css/account.css">
<link rel="stylesheet" href="view/user/css/reponsive/account-voucher.css">
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
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item ">theo dõi đơn hàng</a>
                <a href="?mod=user&act=account-voucher" class="accuont_nav-item  accuont_nav-item_focus">ví voucher</a>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <a href="?mod=user&act=account-comment" class="accuont_nav-item">nhận xét của tôi</a>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-main m-1">
            <div class="account-title">Ví Voucher</div>
            <div class="account_voucher-box row">

                <?= $html_voucher ?>
                    
            </div>
        </div>
    </div>
</section>
<script src="view/user/js/account.js"></script>
<?php include_once 'footer.php' ?>