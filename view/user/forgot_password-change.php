<?php include_once 'header.php' ?>
<title>Quên Mật Khẩu</title>
<link rel="stylesheet" href="view/user/css/forgot-password.css">
<section class="margin-header">
    <div class="container forgotpassword-container">
        <div class="setting-forgotpassword-box">
            <div class="setting-forgotpassword-head">
                <h3 class="setting-forgotpassword-title">Thiết lập mật khẩu</h3>
            </div>
            <form class="setting-forgotpassword-boxform" action="?mod=user&act=forgot_password-change" method="post">
                <div class="setting-forgotpassword-importform">
                    <input onkeyup="check()" name="new-password" class="setting-forgotpassword-form" placeholder="Nhập mật khẩu mới" type="password">
                    <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                </div>
                <div class="setting-forgotpassword-condition">
                    <p class="forgotpassword-uppercase">Ít nhất có một ký tự viết hoa.</p>
                    <p class="forgotpassword-number">Ít nhất có một ký tự số</p>
                    <p class="forgotpassword-special">Ít nhất có một ký tự đặt biệt</p>
                    <p class="forgotpassword-minlength">Trên 8 ký tự</p>
                </div>
                <input name="btn_forget_password_change" class="setting-forgotpassword-form setting-forgotpassword-buttonnext" type="text" value="Tiếp Tục" disabled>
                <!-- <button name="" >Tiếp Tục</button> -->
            </form>
        </div>
    </div>
</section>
<script src="view/user/js/fogot-password.js"></script>