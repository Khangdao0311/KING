<?php include_once 'header.php' ?>
<title>Quên Mật Khẩu</title>
<link rel="stylesheet" href="view/user/css/forgot-password.css">
<section class="margin-header">
    <div class="container forgotpassword-container">
        <div class="insert-forgotpassword-box">
            <div class="insert-forgotpassword-head">
                <h3 class="insert-forgotpassword-title">Nhập mã xác nhận</h3>
            </div>
            <p class="insert-forgotpassword-notitication">Mã xác minh của bạn sẽ được gửi bằng tin nhắn đến Email
            </p>
            <form class="insert-forgotpassword-boxform" action="?mod=user&act=forgot_password-OTP-check" method="post">
                <div class="insert-forgotpassword-fill row">
                    <div class="col-5 col"><input name="number1" maxlength="1" type="text"></div>
                    <div class="col-5 col"><input name="number2" maxlength="1" type="text"></div>
                    <div class="col-5 col"><input name="number3" maxlength="1" type="text"></div>
                    <div class="col-5 col"><input name="number4" maxlength="1" type="text"></div>
                    <div class="col-5 col"><input name="number5" maxlength="1" type="text"></div>
                </div>
                <input hidden name="OTP" value="<?= $OTP ?>" type="text">
                <!-- <p class="insert-forgotpassword-timesend">Vui lòng chờ 44 giây để gửi lại.</p> -->
                <button name="btn_forgot_password-OTP" class="insert-forgotpassword-form insert-forgotpassword-buttonnext">Tiếp Tục</button>
            </form>
        </div>
</section>
<?php include_once 'footer.php' ?>