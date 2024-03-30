<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/user/css/style.css">
</head>
<body>
    <header>
        <div class="header_top">
            <div class="container header_top-box">
                <img class="header_top-banner" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/NCCDinhTi_T323_BannerHeader_1263x60.jpg" alt="banner">
            </div>
        </div>
        <div class="header_bottom">
            <div class="container header-box">
                <a href="?mod=page&act=home" class="header-logo">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/fahasa-logo.png" alt="">
                </a>
                <label for="navbar" class="header-category">
                    <div class="header-icon_list">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_menu.svg" alt="">
                    </div>
                    <div class="header-icon_arrow">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/icon_seemore_gray.svg" alt="">
                    </div>
                </label>
                <div class="header-search">
                    <form action="?mod=page&act=product" method="post" class="header_search-box">
                        <input name="search" class="header_search-text" type="text" placeholder="Tìm kiếm...">
                        <input name="btn_search" hidden id="header_search-submit" type="submit">
                        <label class="header_search-submit" for="header_search-submit">
                            <div class="header_search_submit-icon"></div>
                        </label>
                    </form>
                </div>
                <a href="" class="header-notification">
                    <div class="header-icon">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_noti_gray.svg" alt="">
                    </div>
                    <p>Thông báo</p>
                </a>
                <a href="?mod=cart&act=list" class="header-cart">
                    <div class="header-icon">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_cart_gray.svg" alt="">
                        <div class="header-quantity">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            }else{
                                echo '0';
                            }
                             ?>
                        </div>
                    </div>
                    <p>Giỏ hàng</p>
                </a>
                <a href="?mod=user&act=login" class="header-user">
                    <div class="header-icon">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_account_gray.svg" alt="">
                    </div>
                    <p>Tài khoản</p>
                </a>
            </div>
        </div>
        <input hidden id="navbar" type="checkbox">
        <label id="navbar" for="navbar" class="fake"></label>
        <div class="container-navbar">
            <label id="navbar" for="navbar">s</label>
            <ul class="header-list">
                <li><a href="?mod=page&act=product">
                        <div class="header_list-icon"></div>
                        <div class="header_list-text">Sản Phẩm</div>
                    </a></li>
                <li><a href="?mod=page&act=author">
                        <div class="header_list-icon"></div>
                        <div class="header_list-text">Tác giả</div>
                    </a></li>
                <li><a href="?mod=page&act=publisher">
                        <div class="header_list-icon"></div>
                        <div class="header_list-text">Nhà phát hành</div>
                    </a></li>
                <li><a href="?mod=page&act=contact">
                        <div class="header_list-icon"></div>
                        <div class="header_list-text">Liên hệ</div>
                    </a></li>
                <li><a href="?mod=page&act=about">
                        <div class="header_list-icon"></div>
                        <div class="header_list-text">Giới thiệu</div>
                    </a></li>
            </ul>
        </div>
    </header>
</body>
</html>