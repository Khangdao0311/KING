<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/admin/css/style.css">
</head>
<body>
    <header>
        <img class="header-logo" src="Logo.png" alt="">
        <div class="header-account">
            <div class="header_account-img"></div>
            <div class="header_account-name">Name admin</div>
        </div>
    </header>
    <main>
        <nav>
            <form class="search-box">
                <input class="search-text" type="text" placeholder="Tìm kiếm...">
                <input hidden id="search-submit" type="submit">
                <label class="search-submit" for="search-submit">
                    <div class="search_submit-icon"></div> 
                </label>
            </form>
            <a href="?mod=admin&act=category-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý danh mục</div>
            </a>
            <a href="?mod=admin&act=product-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý sản phẩm</div>
            </div>
            <a href="?mod=admin&act=user-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý khách hàng</div>
            </a>
            <a href="?mod=admin&act=order-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý đơn hàng</div>
            </a>
            <a href="?mod=admin&act=author-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý tác giả</div>
            </a>
            <a href="?mod=admin&act=publisher-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý nhà xuất bản</div>
            </a>
            <a href="?mod=admin&act=comment-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý bình luận</div>
            </a>
            <a href="?mod=admin&act=voucher-list" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Quản lý Voucher</div>
            </a>
            <a href="?mod=admin&act=" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Thống kê</div>
            </a>
            <a href="?mod=page&act=home" class="nav-item">
                <div class="nav_item-icon"></div>
                <div class="nav_item-content">Đăng xuất</div>
            </a>
        </nav>
</body>
</html>