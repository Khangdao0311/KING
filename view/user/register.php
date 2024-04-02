<?php include_once 'header.php' ?>
<title title>Đăng lý</title>
<link rel="stylesheet" href="view/user/css/login-register.css">
<section class="margin-header">
    <div class="container login_register-container">
        <div class="box">
            <div class="link-box">
                <a href="?mod=user&act=login" class="link-item ">Đăng nhập</a>
                <div class="link-item check">Đăng ký</div>
            </div>
            <form class="form-login_register" action="?mod=user&act=register" method="post">
                <div class="form-item">
                    <div class="form_item-text">Họ và Tên</div>
                    <input name="name" class="form_item-input" type="text" required placeholder="Nhập">
                </div>
                <div class="form-item">
                    <div class="form_item-text">Email</div>
                    <input name="email" class="form_item-input" type="email" required placeholder="Nhập">
                </div>
                <div class="form-item">
                    <div class="form_item-text">User name</div>
                    <input name="username" class="form_item-input" type="text" required placeholder="Nhập">
                </div>
                <div class="form-item">
                    <div class="form_item-text">Mật khẩu</div>
                    <div class="form_item-input_box">
                        <input name="pass" class="form_item-input" type="password" required placeholder="Nhập">
                        <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                    </div>
                </div>
                <div class="form-item">
                    <div class="form_item-text">Nhập lại mật khẩu</div>
                    <div class="form_item-input_box">
                        <input name="confirmpass" class="form_item-input" type="password" required placeholder="Nhập">
                        <div onclick="show_hidden(this)" class="hide-pass">Hiện</div>
                    </div>
                </div>
                <div class="form-item">
                    <input name="btn_register" class="form_item-submit" type="submit" value="Đăng Ký">
                </div>
            </form>
        </div>
    </div>
   
    <input hidden id="error" type="checkbox" <?= $check_error ?>>
    <div class="error">
        <div class="error-box">
            <div class="error-title">Đăng Ký thất bại</div>
            <div class="error-icon">
                <span class="material-symbols-outlined">error</span>
            </div>
            <label for="error" class="error-next">Thử lại</label>
        </div>
    </div>
    <input hidden id="success" type="checkbox" <?= $check_success ?>>
    <div class="success">
        <div class="success-box">
            <div class="success-title">Đăng Ký thành công</div>
            <div class="success-icon">
                <span class="material-symbols-outlined">check_circle</span>
            </div>
            <a href="?mod=user&act=login" class="register_success-next">Đăng nhập</a>
        </div>
    </div>



</section>
<script src="view/user/js/login-register.js"></script>