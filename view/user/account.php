<?php include_once 'header.php' ?>
<title>Tài khoản</title>
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
                <div class="accuont_nav-item accuont_nav-item_focus">Thông tin tài khoản</div>
                <div class="accuont_nav-item">địa chỉ</div>
                <a href="?mod=user&act=order-follow" class="accuont_nav-item">theo dõi đơn hàng</a>
                <div class="accuont_nav-item">ví voucher</div>
                <div class="accuont_nav-item">sách theo bộ</div>
                <div class="accuont_nav-item">nhận xét của tôi</div>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-information_box">
            <div class="account_information-title">Thông Tin Tài Khoản</div>
            <div class="account_information-box">
                <div class="account_information-item">
                    <div class="account_information_item-name">Tên đăng nhập</div>
                    <div class="account_information_item-content"><?= $_SESSION['user']['username'] ?></div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">Họ và tên</div>
                    <div class="account_information_item-content"><?= $_SESSION['user']['name'] ?></div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">Email</div>
                    <div class="account_information_item-content"><?= $_SESSION['user']['email'] ?></div>
                    <div class="account_information_item-change">Thay đổi</div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">số điện thoại</div>
                    <div class="account_information_item-content"><?= $_SESSION['user']['phone'] ?></div>
                    <div class="account_information_item-change">Thay đổi</div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">mật khẩu</div>
                    <div class="account_information_item-content">********</div>
                    <div class="account_information_item-change">Thay đổi</div>
                </div>
                <!-- <div class="account_information-item">
                    <div class="account_information_item-name">giới tính</div>
                    <div class="account_information_item-content">
                        <label for="gender-man" class="account_information_item-gender">
                            <input id="gender-man" class="account_information_item_gender-radio" type="radio" name="gender">
                            <label for="gender-man" class="account_information_item_gender-content">Nam</label>
                        </label>
                        <label for="gender-girl" class="account_information_item-gender">
                            <input id="gender-girl" class="account_information_item_gender-radio" type="radio" name="gender">
                            <label for="gender-girl" class="account_information_item_gender-content">Nữ</label>
                        </label>
                    </div>
                </div> -->
                <!-- <div class="account_information-item">
                    <div class="account_information_item-name">ngày sinh</div>
                    <div class="account_information_item-content">
                        <div class="account_information_item-born">
                            <div class="account_information_item-born_text">Ngày</div>
                            <div class="account_information_item-born_icon"></div>
                        </div>
                        <div class="account_information_item-born">
                            <div class="account_information_item-born_text">Tháng</div>
                            <div class="account_information_item-born_icon"></div>
                        </div>
                        <div class="account_information_item-born">
                            <div class="account_information_item-born_text">Năm</div>
                            <div class="account_information_item-born_icon"></div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="account_information-submit">lưu thay đổi</div>
        </div>
    </div>
</section>
<?php include_once 'footer.php' ?>