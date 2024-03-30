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
                    <input onkeyup="check()" name="new-password" class="setting-forgotpassword-form" placeholder="Nhập mật khẩu mới" type="text">
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
<script>
        // str_replace(" ", "", "Hello World of PHP");
        const input = document.querySelector('.setting-forgotpassword-form')
        const p_uppercase = document.querySelector('.forgotpassword-uppercase')
        const p_number = document.querySelector('.forgotpassword-number')
        const p_special = document.querySelector('.forgotpassword-special')
        const p_minlength = document.querySelector('.forgotpassword-minlength')
        let minlength = 8;
        let uppercase = /[A-Z]/;
        let number = /[0-9]/;
        let special = /[!,@,#,$,%,^,&,*,?]/;
        function active(el) {
            el.style.color = 'blue'
            el.style.opacity = '1'
            el.style.fontWeight = 'bold'
        }
        function non_active(el) {
            el.style.color = '#000'
            el.style.opacity = '0.5'
            el.style.fontWeight = '500'
        }
        function check() {
            if (input.value.match(uppercase)) {
                check_uppercase = true;
                active(p_uppercase)
            } else {
                check_uppercase = false
                non_active(p_uppercase)
            }
            if (input.value.match(number)) {
                check_number = true;
                active(p_number)
            } else {
                check_number = false
                non_active(p_number)
            }
            if (input.value.match(special)) {
                check_special = true;
                active(p_special)
            } else {
                check_special = false
                non_active(p_special)
            }
            if(input.value.length >= minlength) {
                check_minlength = true;
                active(p_minlength)
            } else {
                check_minlength = false;
                non_active(p_minlength)
            }

            if (check_minlength && check_number && check_special && check_uppercase) {
                document.querySelector('.setting-forgotpassword-buttonnext').removeAttribute('disabled'); 
                document.querySelector('.setting-forgotpassword-buttonnext').type = 'submit'; 
                document.querySelector('.setting-forgotpassword-buttonnext').style.opacity = '1'; 
            } else {
                document.querySelector('.setting-forgotpassword-buttonnext').setAttribute('disabled',''); 
                document.querySelector('.setting-forgotpassword-buttonnext').type = 'text'; 
                document.querySelector('.setting-forgotpassword-buttonnext').style.opacity = '0.5'; 
            }
        }
</script>
<?php include_once 'footer.php' ?>