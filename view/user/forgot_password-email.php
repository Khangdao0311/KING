
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
</section>
<?php include_once 'footer.php' ?>