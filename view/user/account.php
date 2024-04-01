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
                <a href="?mod=user&act=account-address" class="accuont_nav-item">Địa chỉ giao hàng</a>
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item">theo dõi đơn hàng</a>
                <div class="accuont_nav-item">ví voucher</div>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <div class="accuont_nav-item">nhận xét của tôi</div>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <form action="?mod=user&act=information" method="post" enctype="multipart/form-data" class="account-main">
            <div class="account-title">Thông Tin Tài Khoản</div>
            <div class="account-box">
                <div class="account_information-item">
                    <div class="account_information_item-img_box">
                        <input name="image" hidden id="inputfile" type="file">
                        <?php if ($_SESSION['user']['image']): ?>
                        <label class="account_information_item-img" for="inputfile">
                            <img id="imagechange" src="view/images/user/<?= $_SESSION['user']['image'] ?>" alt="">
                        </label>
                        <?php else: ?>
                        <label class="account_information_item-img" for="inputfile">
                            <img src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png" alt="">
                        </label>
                        <?php endif; ?>
                        <label for="inputfile" class="account_information_item-change">Thay đổi</label>
                    </div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">Tên đăng nhập</div>
                    <div class="account_information_item-content"><?= $_SESSION['user']['username'] ?></div>
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">Họ và tên</div>
                    <input name="name" class="account_information_item-content" type="text" value="<?= $_SESSION['user']['name'] ?>">
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">Email</div>
                    <input name="email" class="account_information_item-content" type="text" value="<?= $_SESSION['user']['email'] ?>">
                </div>
                <div class="account_information-item">
                    <div class="account_information_item-name">số điện thoại</div>
                    <input name="phone" placeholder="chưa có số điện thoại" class="account_information_item-content" type="text" value="<?= $_SESSION['user']['phone'] ?>">
                </div>
            </div>
            <input name="id" hidden type="text" value="<?= $_SESSION['user']['id'] ?>">
            <button name="btn_information" class="account-submit">lưu thay đổi</button>
        </form>
    </div>
    <input hidden id="change_success" type="checkbox" <?= $checked ?>>
    <div class="change_success">
        <div class="change_success-box">
            <div class="change_success-title">Cập nhật thành công</div>
            <div class="change_success-icon">
                <span class="material-symbols-outlined">check_circle</span>
            </div>
            <label for="change_success" class="change_success-next">OK</label>
        </div>
    </div>
</section>
<script>
    const input = document.getElementById('inputfile');
    const image = document.getElementById('imagechange');
    input.addEventListener('change', (el) => {
        image.src = URL.createObjectURL(el.target.files[0]);
    });
</script>
<?php include_once 'footer.php' ?>