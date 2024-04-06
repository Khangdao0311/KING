<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/user/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="view/user/css/reponsive/style.css"> 
</head>
<body>
    <header>
        <div class="header_top">
            <div class="container header_top-box m-0">
                <img class="header_top-banner" src="view/images/banner.jpg" alt="banner">
            </div>
        </div>
        <div class="header_bottom">
            <div class="container header-box">
                <a href="?mod=page&act=home" class="header-logo">
                    <img src="view/images/logo.png" alt="">
                </a>
                <label for="navbar" class="header-category m-0">
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
                        <label class="header_search-submit m-0" for="header_search-submit">
                            <div class="header_search_submit-icon">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                        </label>
                    </form>
                </div>
                <a href="?mod=page&act=contact" class="header-notification m-0">
                    <div class="header-icon">
                        <span class="material-symbols-outlined">contact_mail</span>
                    </div>
                    <p>Liên hệ</p>
                </a>
                <a href="?mod=cart&act=list" class="header-cart">
                    <div class="header-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
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
                    <p class="m-0">Giỏ hàng</p>
                </a>
                <?php if ($_SESSION['user']): ?>
                <a href="?mod=user&act=information" class="header-user">
                    <div class="header-icon">
                        <span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <p class="m-0"><?= $_SESSION['user']['name'] ?></p>
                </a>
                <?php else: ?>
                <a href="?mod=user&act=login" class="header-user">
                    <div class="header-icon">
                        <span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <p class="m-0">Tài khoản</p>
                </a>
                <?php endif; ?>
                
            </div>
        </div>
        <input hidden id="navbar" type="checkbox">
        <label id="navbar" for="navbar" class="fake"></label>
        <div class="container-navbar">
            <label id="navbar" for="navbar"></label>
            <ul class="header-list">
                <li><a href="?mod=page&act=product">
                        <div class="header_list-icon">
                            <span class="material-symbols-outlined">package_2</span>
                        </div>
                        <div class="header_list-text">Sản Phẩm</div>
                    </a></li>
                <li><a href="?mod=page&act=product">
                        <div class="header_list-icon">
                          <span class="material-symbols-outlined">assignment_ind</span>
                        </div>
                        <div class="header_list-text">Tác giả</div>
                    </a></li>
                <li><a href="?mod=page&act=product">
                        <div class="header_list-icon">
                            <span class="material-symbols-outlined">home_work</span>
                        </div>
                        <div class="header_list-text">Nhà phát hành</div>
                    </a></li>
                <li><a href="?mod=page&act=about">
                        <div class="header_list-icon">
                            <span class="material-symbols-outlined">receipt_long</span>
                        </div>
                        <div class="header_list-text">Giới thiệu</div>
                    </a></li>
            </ul>
        </div>
    </header>
</body>
</html>