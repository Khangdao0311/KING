
<?php include_once 'header.php' ?>
<title>Quên Mật Khẩu</title>
<link rel="stylesheet" href="view/user/css/forgot-password.css">
<section class="margin-header">
    <div class="container forgotpassword-container">
        <div class="reset-forgotpassword-box">
            <div class="reset-forgotpassword-head">
                <h3 class="reset-forgotpassword-title">Đặt lại mật khẩu</h3>
            </div>
            <form class="reset-forgotpassword-boxform" action="?mod=user&act=forgot_password-email" method="post">
                <div class="reset-forgotpassword-importform">
                    <input name="email" class="reset-forgotpassword-form" placeholder="Nhập Email của bạn" type="email">
                </div>
                <button name="btn_forgot_password-email" class="reset-forgotpassword-form reset-forgotpassword-buttonnext">Tiếp Tục</button>
            </form>
        </div>
    </div>
    <input hidden id="email_error" type="checkbox" <?= $check ?>>
        <div class="email_error">
            <div class="email_error-box">
            <div class="email_error-title">Mail không tồn tại !!</div>
            <div class="email_error-icon">
                <span class="material-symbols-outlined">error</span>
            </div>
            <label for="email_error" class="email_error-next">Thử lại</label>
        </div>
    </div>
</section>