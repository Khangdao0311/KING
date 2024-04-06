<?php include_once 'header.php' ?>
<title>Liên Hệ</title>
<link rel="stylesheet" href="view/user/css/contact.css">
<link rel="stylesheet" href="view/user/css/reponsive/contact.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Liên hệ</div>
    </div>
</section>
<section>
    <div class="container contact-container">
        <div class="contact-information m-1">
            <div class="contact_information-title">Thông Tin</div>
            <div class="contact_information-item">
                <span class="material-symbols-outlined">phone</span>
                <div class="contact_information_item-text">Số Điện Thoại: 0999999999</div>
            </div>
            <div class="contact_information-item">
                <span class="material-symbols-outlined">mail</span>
                <div class="contact_information_item-text">Email: King@gmail.com</div>
            </div>
            <div class="contact_information-item">
                <span class="material-symbols-outlined">location_on</span>
                <div class="contact_information_item-text">Địa chỉ: HCM</div>
            </div>
            <div class="contact_information-img"></div>
        </div>
        <form action="?mod=page&act=contact" method="post" class="contact-form m-1">
            <div class="contact_form-two">
                <div class="contact_form_two-item">
                    <div class="contact_form-text">Email</div>
                    <input name="email" class="contact_form-input" type="email" required placeholder="Nhập email của bạn">
                </div>
                <div class="contact_form_two-item">
                    <div class="contact_form-text">Họ và Tên</div>
                    <input name="name" class="contact_form-input" type="text" required placeholder="Nhập họ tên đầy đủ của bạn">
                </div>
            </div>
            <div class="contact_form-one">
                <div class="contact_form-text">Tiêu Đề</div>
                <input name="title" class="contact_form-input" type="text" required placeholder="Nhập tiêu đề">
            </div>
            <div class="contact_form-one">
                <div class="contact_form-text">Nội Dung</div>
                <textarea name="content" class="contact_form-input" required id="" cols="30" rows="10" placeholder="Nhập nội dung vào đây ..."></textarea>
            </div>
            <input name="btn_contact" class="contact_form-submit" type="submit">
        </form>
    </div>
    <input hidden id="success" type="checkbox" <?= $check_success ?>>
    <div class="success">
        <div class="success-box">
            <div class="success-title">Gửi mail thành công</div>
            <div class="success-icon">
                <span class="material-symbols-outlined">check_circle</span>
            </div>
            <label for="success" class="success-next">OK</label>
        </div>
    </div>
</section>
<section>
    <div class="container map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.6386866712653!2d106.68620679839478!3d10.790055200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cd4fd2ea21%3A0x88f5b452a8d876a8!2zTmjDoCBzw6FjaCBGQUhBU0EgVMOibiDEkOG7i25o!5e0!3m2!1svi!2s!4v1711810054431!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</section>
<?php include_once 'footer.php' ?>