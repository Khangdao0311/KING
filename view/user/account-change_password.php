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
        <form action="?mod=user&act=account-change_password" method="post" class="account-main">
            <div class="account-title">Đổi Mật Khẩu</div>
            <div class="account-box">
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Mật khẩu cũ</div>
                        <div class="account_form_item-input_box">
                            <input class="account_form_item-input" name="password_old" type="password" required placeholder="Nhập mật khẩu cũ">
                            <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                        </div>
                    </div>
                </div>
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Mật khẩu mới</div>
                        <div class="account_form_item-input_box">
                            <input onkeyup="check()" id="password" class="account_form_item-input" name="password_new" type="password" required placeholder="Nhập mật khẩu mới">
                            <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                        </div>
                        <div class="account_form_check_passworld">
                            <p class="uppercase">Ít nhất có một ký tự viết hoa.</p>
                            <p class="number">Ít nhất có một ký tự số</p>
                            <p class="special">Ít nhất có một ký tự đặt biệt</p>
                            <p class="minlength">Trên 8 ký tự</p>
                        </div>
                    </div>
                </div>
                <div class="account_form-item">
                    <div class="account_form-item_box">
                        <div class="account_form_item-text">Nhập lại mật khẩu</div>
                        <div class="account_form_item-input_box">
                            <input class="account_form_item-input" name="confirm_password" type="password" required placeholder="Nhập lại mật khẩu">
                            <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                        </div>
                    </div>
                </div>
            </div>
            <input style="opacity: 0.5;" name="btn_change_password" type="text" class="account-submit" disabled value="Đổi mật khẩu">
        </form>
    </div>
    <input hidden id="error" type="checkbox" <?= $check_error ?>>
    <div class="error">
        <div class="error-box">
        <div class="error-title">đổi mật khẩu thất bại</div>
        <div class="error-icon">
            <span class="material-symbols-outlined">error</span>
        </div>
        <label for="error" class="error-next">Thử lại</label></div>
    </div>
    <input hidden id="success" type="checkbox" <?= $check_success ?>>
    <div class="success">
        <div class="success-box">
        <div class="success-title">đổi mật khẩu thành công</div>
        <div class="success-icon">
            <span class="material-symbols-outlined">check_circle</span>
        </div>
        <label for="success" class="success-next">OK</label></div>
    </div>
</section>
<script src="view/user/js/account.js"></script>
<?php include_once 'footer.php' ?>