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
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item">theo dõi đơn hàng</a>
                <div class="accuont_nav-item">ví voucher</div>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item accuont_nav-item_focus">Đổi mật khẩu</a>
                <div class="accuont_nav-item">nhận xét của tôi</div>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <form action="?mod=user&act=account-address" method="post" class="account-main">
            <div class="account-title">Đổi Mật Khẩu</div>
            <div class="account-box">
                <div class="account_address-item">
                    <div class="account_address-item_box">
                        <div class="account_address_item-text">Họ Và Tên</div>
                        <input class="account_address_item-input" name="name" type="text" value="<?= $_SESSION['user']['name'] ?>">
                    </div>
                </div>
                <div class="account_address-item">
                    <div class="account_address-item_box">
                        <div class="account_address_item-text">Tỉnh thành</div>
                        <input class="account_address_item-input" name="province" type="text" placeholder="Nhập tỉnh thành" value="<?= $address[0] ?>">
                    </div>
                </div>
                <div class="account_address-item">
                    <div class="account_address-item_box">
                        <div class="account_address_item-text">Phường / Xã</div>
                        <input class="account_address_item-input" name="ward" type="text" placeholder="Nhập phường / xã" value="<?= $address[2] ?>">
                    </div>
                </div>
            </div>
            
            <button name="btn_address" class="account-submit">lưu thông tin</button>
        </form>
    </div>
</section>
<?php include_once 'footer.php' ?>