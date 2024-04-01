<?= include_once 'header.php' ?>
<title>Đăng nhập</title>
<link rel="stylesheet" href="view/user/css/login-register.css">
<section class="margin-header">
    <div class="container login_register-container">
        <div class="box">
            <div class="link-box">
                <div class="link-item check">Đăng nhập</div>
                <a href="?mod=user&act=register" class="link-item">Đăng ký</a>
            </div>
            <form class="form-login_register" action="" method="post">
                <div class="form-item">
                    <div class="form_item-text">Username / Email</div>
                    <input name="account" class="form_item-input" type="text" placeholder="Nhập username hoặc email">
                </div>
                <div class="form-item">
                    <div class="form_item-text">Mật khẩu</div>
                    <div class="form_item-input_box">
                        <input name="password" class="form_item-input" type="password" placeholder="Nhập mật khẩu">
                        <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                    </div>
                </div>
                <div class="form-item">
                    <a class="forget_password" href="?mod=user&act=forgot_password-email">Quên mật khẩu ?</a>
                </div>
                <div class="form-item">
                    <input name="btn_login" class="form_item-submit" type="submit" value="Đăng nhập">
                </div>
            </form>
        </div>
        <input hidden id="login_error" type="checkbox" <?= $checked ?>>
        <div class="login_error">
            <div class="login_error-box">
                <div class="login_error-title">Đăng nhập thất bại</div>
                <div class="login_error-icon">
                    <span class="material-symbols-outlined">error</span>
                </div>
                <label for="login_error" class="login_error-next">Thử lại</label>
            </div>
        </div>
    </div>
</section>
<script src="view/user/js/login-register.js"></script>