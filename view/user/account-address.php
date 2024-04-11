<?php include_once 'header.php' ?>
<title>Địa chỉ giao hàng</title>
<link rel="stylesheet" href="view/user/css/account.css">
<link rel="stylesheet" href="view/user/css/reponsive/account-address.css">
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
                <a href="?mod=user&act=account-address" class="accuont_nav-item  accuont_nav-item_focus">Địa chỉ giao hàng</a>
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item">theo dõi đơn hàng</a>
                <a href="?mod=user&act=account-voucher" class="accuont_nav-item">ví voucher</a>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <a href="?mod=user&act=account-comment" class="accuont_nav-item">nhận xét của tôi</a>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <form action="?mod=user&act=account-address" method="post" class="account-main m-1">
            <div class="account-title">Địa chỉ giao hàng</div>
            <div class="account-box">
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Họ Và Tên</div>
                        <input class="account_form_item-input" name="name" type="text" value="<?= $_SESSION['user']['name'] ?>">
                    </div>
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Số Điện Thoại</div>
                        <input class="account_form_item-input" name="phone" type="text" placeholder="Nhập số điện thoại" value="<?= $_SESSION['user']['phone'] ?>">

                    </div>
                </div>
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Tỉnh thành</div>
                        <input class="account_form_item-input" name="province" type="text" placeholder="Nhập tỉnh thành" value="<?= $address[0] ?>">
                    </div>
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Quận huyện</div>
                        <input class="account_form_item-input" name="district" type="text" placeholder="Nhập quận huyện" value="<?= $address[1] ?>">
                    </div>
                </div>
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Phường / Xã</div>
                        <input class="account_form_item-input" name="ward" type="text" placeholder="Nhập phường / xã" value="<?= $address[2] ?>">
                    </div>
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Số nhà, Tên đường</div>
                        <input class="account_form_item-input" name="street" type="text" placeholder="Nhập số nhà, tên đường" value="<?= $address[3] ?>">
                    </div>
                </div>
                <div class="account_form-item flex-column">
                    <div class="account_form_item-text">Ghi chú</div>
                    <textarea class="account_form_item-input" name="note" cols="30" rows="10" placeholder="Nhập ghi chú....." ><?= $address[4] ?></textarea>
                </div>
            </div>
            
            <button name="btn_address" class="account-submit">lưu thông tin</button>
        </form>
    </div>
    <input hidden id="success" type="checkbox" <?= $check_success ?>>
    <div class="success">
        <div class="success-box">
            <div class="success-title">Cập nhật địa chỉ thành công</div>
            <div class="success-icon">
                <span class="material-symbols-outlined">check_circle</span>
            </div>
            <label for="success" class="success-next">OK</label>
        </div>
    </div>
</section>
<?php include_once 'footer.php' ?>