<?php
    $html_comment = '';
    foreach ($comments as $item) {
        $comment_user = user_ONE($item['user_id']); 
        $star5 = ($item['rating'] > 4) ? "star-active" : "";
        $star4 = ($item['rating'] > 3) ? "star-active" : "";
        $star3 = ($item['rating'] > 2) ? "star-active" : "";
        $star2 = ($item['rating'] > 1) ? "star-active" : "";
        $html_comment .= '
            <div class="account_comment-item">
                <div class="account_comment_item-content">
                    <a class="account_comment_item-img" href="?mod=page&act=product-detail&id='.product_ONE($item['product_id'])['id'].'"><img src="view/'.product_ONE($item['product_id'])['image'].'" alt=""></a>
                    <div class="account_comment_item-box">
                        <a href="?mod=page&act=product-detail&id='.product_ONE($item['product_id'])['id'].'" class="account_comment_item-name">'.product_ONE($item['product_id'])['name'].'</a>
                        <div class="account_comment_item-rating">
                            <span class="material-symbols-outlined star-active">star</span>
                            <span class="material-symbols-outlined '.$star2.'">star</span>
                            <span class="material-symbols-outlined '.$star3.'">star</span>
                            <span class="material-symbols-outlined '.$star4.'">star</span>
                            <span class="material-symbols-outlined '.$star5.'">star</span>
                        </div>
                        <div class="account_comment_item-text">'.$item['content'].'</div>
                    </div>
                </div>
                <div class="account_comment_item-fun">
                    <input name="id" hidden type="text" value="'.$item['id'].'">
                    <!-- <div class="account_comment_item_fun-edit">Chỉnh sửa</div> -->
                    <input hidden type="text" value="'.$item['id'].'">
                    <div onclick="delete_comment(this)" class="account_comment_item_fun-delete">Xóa</div>
                </div>
            </div>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title>Nhận xét của tôi</title>
<link rel="stylesheet" href="view/user/css/account.css">
<link rel="stylesheet" href="view/user/css/reponsive/account-comment.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Tài khoản</div>
    </div>
</section>
<section>
    <div class="container">
        <label class="pc-0 t-0" for="check_nav_account"><span class="material-symbols-outlined account-nav-menu">menu</span></label>
    </div>
</section>
<section>
    <div class="container account-container">
    <input hidden id="check_nav_account" type="checkbox">
    <label for="check_nav_account" class="account_layout_dark"></label>
    <div class="account-nav_box">
            <div class="account_nav-title">tài khoản</div>
            <div class="account_nav-box">
                <a href="?mod=user&act=information" class="accuont_nav-item">Thông tin tài khoản</a>
                <a href="?mod=user&act=account-address" class="accuont_nav-item">Địa chỉ giao hàng</a>
                <a href="?mod=user&act=account-order_follow" class="accuont_nav-item ">theo dõi đơn hàng</a>
                <a href="?mod=user&act=account-voucher" class="accuont_nav-item">ví voucher</a>
                <a href="?mod=user&act=account-change_password" class="accuont_nav-item">Đổi mật khẩu</a>
                <a href="?mod=user&act=account-comment" class="accuont_nav-item accuont_nav-item_focus">nhận xét của tôi</a>
                <?php if($_SESSION['user']['role']): ?>
                <a href="?mod=admin&act=category-list" class="accuont_nav-item">admin</a>
                <?php endif; ?>    
                <a href="?mod=user&act=logout" class="accuont_nav-item">Đăng xuất</a>
            </div>
        </div>
        <div class="account-main">
            <div class="account-title">Nhận xét của tôi</div>
            <div class="account_comment-box">
                
                <?= $html_comment ?>
                    
            </div>
        </div>
    </div>
</section>
<script src="view/user/js/account.js"></script>
<?php include_once 'footer.php' ?>