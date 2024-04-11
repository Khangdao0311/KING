<?php
    $html_show_category = "";
    foreach ($category_all_top_view as $item) {
        $html_show_category .= '
            <div class="category-item col-10 col m-5">
                <a href="?mod=page&act=product&category_id='.$item['id'].'" class="category_item-img">
                    <img src="view/'.$item['image'].'" alt="'.$item['name'].'">
                </a>
                <a href="?mod=page&act=product&category_id='.$item['id'].'" class="category_item-text">'.$item['name'].'</a>
            </div>
        ';
    }
    $html_product_hot = "";
    foreach ($product_hot as $item) {
    $link = 'index.php?mod=page&act=product-detail&id=' . $item['id'];
    $html_product_hot .= '
        <div class="col-4 col t-3 m-2">
            <div class="product-box">
                <a href="'.$link.'" class="product-img"><img src="view/' . $item['image'] . '" alt="'.$item['name'].'"></a>
                <a href="'.$link.'" class="product-mane">'.$item['name'].'</a>
                <div class="product-price_sale">Giá: ' . number_format($item['price_sale'], 0, ',', '.') . ' đ</div>
                <div class="product-price">Giá gốc: <del>' . number_format($item['price'], 0, ',', '.') . ' đ</del> </div>
                <div class="product-view">' . number_format($item['view'],0,',','.') . ' lượt xem</div>
                <div class="product-icon_box">';
                if ($item['quantity'] > 0) {
    $html_product_hot .= '
                    <div onclick="addcart(this)" class="product-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <input type="text" hidden value="'.$item['id'].'">
    ';
                }
    $html_product_hot .= '
                    <div class="product-icon">
                        <span class="material-symbols-outlined">favorite</span>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    $html_show_category_top_view = '';
    foreach ($category_all_top_view as $item) {
        $html_show_category_top_view .= '
            <div onclick="show_category_rating(' . $item['id'] . ')" class="swiper-slide rating_nav-item m-3">' . $item['name'] . '</div>
            ';
    }
    $html_show_top_view = '';
    $count = 1;
    foreach ($product_top_view as $item) {
        $html_show_top_view .= '
        <div onmouseover="show_rating('.$item['id'].')" class="rating-box">
            <div class="rating-STT">'.$count++.'</div>
            <a href="?mod=page&act=product-detail&id='.$item['id'].'" class="rating-img"><img src="view/'.$item['image'].'" alt="'.$item['name'].'"></a>
            <div class="rating-conten">
                <a href="?mod=page&act=product-detail&id='.$item['id'].'" class="rating_conten-name">' . $item['name'] . '</a>
                <div class="rating_conten-author">' . author_ONE($item['publisher_id'])['name'] . '</div>
                <div class="rating_conten-view">' . number_format($item['view'],0,',','.') . ' lượt xem</div>
            </div>
        </div>
        ';
}

$html_product_new = '';
foreach ($product_new as $item) {
    $html_product_new .= '
        <div class="col-4 col t-3 m-2">
            <div class="product-box">
                <a href="?mod=page&act=product-detail&id='.$item['id'].'" class="product-img"><img src="view/'.$item['image'].'" alt="'.$item['name'].'"></a>
                <a href="?mod=page&act=product-detail&id='.$item['id'].'" class="product-mane">'.$item['name'].'</a>
                <div class="product-price_sale">Giá: '.number_format($item['price_sale'],0,',','.').' đ</div>
                <div class="product-price">Giá gốc: <del>'.number_format($item['price'],0,',','.').' đ</del> </div>
                <div class="product-view">'.number_format($item['view'],0,',','.').' lượt xem</div>
                <div class="product-icon_box">';
                if ($item['quantity'] > 0) {
    $html_product_new .= '
                    <div onclick="addcart(this)" class="product-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <input type="text" hidden value="'.$item['id'].'">
    ';
                }
    $html_product_new .= '
                    <div class="product-icon">
                        <span class="material-symbols-outlined">favorite</span>
                    </div>
                </div>
            </div>
        </div>
    ';
}

$html_show_publishers = '';
foreach ($publishers as $item) {
    $html_show_publishers .= '
        <a href="?mod=page&act=product&publisher_id='.$item['id'].'" class="publisher-box col-9 col t-6 m-6">
            <img src="view/'.$item['image'].'" alt="'.$item['name'].'">
        </a>
    ';
}

?>

<?php include_once 'header.php' ?>
<title>Trang chủ</title>
<link rel="stylesheet" href="view/user/css/home.css">
<link rel="stylesheet" href="view/user/css/reponsive/home.css">
<section class="margin-header">
    <div class="container silde_banner">
        <div class="silde-box swiper mySwiper t-1 m-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/Saigonbooks_Gold_Ver2_Slide_840x320.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/HSO_T1_T324_Banner_resize_Slide_840x320.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/BachVietT3_Slide_840x320.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/MayTinh_Slide_840x320_1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/tranglego_resize_slidebanner_840x320_2.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev slide-controller-left">
                <span class="material-symbols-outlined">chevron_left</span>
            </div>
            <div class="swiper-button-next slide-controller-right">
                <span class="material-symbols-outlined">chevron_right</span>
            </div>
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
        <div class="banner-box">
            <div class="banner-item t-0 m-0">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_sacombank_t3.jpg" alt="">
            </div>
            <div class="banner-item t-0 m-0">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_zalopay_t3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="m-0">
    <div class="container voucher_nav">
        <div class="voucher-box row">
            <div class="col-4 col">
                <div class="voucher-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/Banner_Quatang_310x210.png" alt="">
                </div>
            </div>
            <div class="col-4 col">
                <div class="voucher-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/Trangforeignbooks_0324_smallbanner_310x210.png" alt="">
                </div>
            </div>
            <div class="col-4 col">
                <div class="voucher-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/BlindBoxT1123_Banner_SmallBanner_310x210.png" alt="">
                </div>
            </div>
            <div class="col-4 col">
                <div class="voucher-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/NCCKimDong_T323_BannerSmallBanner_310x210.png" alt="">
                </div>
            </div>
        </div>
        <!-- <div class="nav-container row">
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
            <div class="nav-box col-10 col">
                <div class="nav-img"></div>
                <div class="nav-text">content</div>
            </div>
        </div> -->
    </div>
</section>
<section>
    <div class="container category-container">
        <div class="category-title">
            <div class="category_title-icon">
                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_menu_red.svg" alt="">
            </div>
            <div class="category_title-text">Danh mục sản phẩm</div>
        </div>
        <div class="category-box row">
           <?= $html_show_category ?>

        </div>
    </div>
</section>
<section style="background: red;">
    <div class="container hot-container">
        <div class="hot-titel">
            <div class="hot-box">
                <div class="hot-icon">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png" alt="">
                </div>
                <div class="hot-title">Nổi Bật</div>
                <!-- <div class="hot-endtime">
                    <div class="hot_endtine-text">Kết thúc trong</div>
                    <div class="hot-time_container">
                        <div class="hot-time_box">
                            <div class="hot-time">00</div>
                        </div>
                        <div class="hot-time_box">
                            <div class="hot-time">00</div>
                        </div>
                        <div class="hot-time_box">
                            <div class="hot-time">00</div>
                        </div>
                    </div>
                </div> -->
            </div>
            <a href="?mod=page&act=product" class="hot-showall">
                <div class="hot_showall-text">Xem tất cả</div>
                <div class="hot_showall-icon">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_seemore_blue.svg" alt="">
                </div>
            </a>
        </div>
        <div class="hot_product-box row">
            <?= $html_product_hot ?>
            
        </div>
    </div>
</section>
<section>
    <div class="container new-container">
        <div class="new-titel">
            <div class="new_titel-text">Sản phẩm mới</div>
        </div>
        <div class="new_product-box row">

            <?= $html_product_new ?>

        </div>
    </div>
</section>
<section>
    <div class="container rating-container">
        <div class="rating-titel">
            <div class="ratting_titel-text">Bản xếp hạng lượt xem</div>
        </div>
        <div class="rating-nav swiper_rating mySwiper">
            <div class="swiper-wrapper">
                <div onclick="show_category_rating(0)" class="swiper-slide rating_nav-item rating_nav-item-check">Tất cả</div>
                <?= $html_show_category_top_view ?>
            </div>
        </div>
        <div class="rating_container">
            <div class="rating_container-left m-1">

                <?= $html_show_top_view ?>

            </div>
            <div class="rating_container-right m-0">
                <a href="?mod=page&act=product-detail&id=<?= $product_top_view[0]['id']?>" class="rating_product_detail-img">
                    <img src="view/<?= $product_top_view[0]['image'] ?>" alt="<?= $product_top_view[0]['name'] ?>">
                </a>
                <div class="rating_product_detail-content">
                    <a href="?mod=page&act=product-detail&id=<?= $product_top_view[0]['id']?>" class="rating_product_detail_content-name"><?= $product_top_view[0]['name'] ?></a>
                    <div class="rating_product_detail_content-author">Tác giả: <?= author_ONE($product_top_view[0]['author_id'])['name'] ?></div>
                    <div class="rating_product_detail_content-publisher">Nhà sản xuất: <?= publisher_ONE($product_top_view[0]['publisher_id'])['name'] ?></div>
                    <div class="rating_product_detail_content-price_sale">Giá khuyến mãi: <?= number_format($product_top_view[0]['price_sale'],0,',','.') ?> đ</div>
                    <div class="rating_product_detail_content-price">Giá gốc: <del><?= number_format($product_top_view[0]['price'],0,',','.') ?> đ</div>
                    <div class="rating_product_detail_content-describe"><?= $product_top_view[0]['describle'] ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container publisher-container row">

        <?= $html_show_publishers ?>

    </div>
</section>
<!-- <section>
    <div class="container advertisement-container row">
        <div class="advertisement-box col-5 col"></div>
        <div class="advertisement-box col-5 col"></div>
        <div class="advertisement-box col-5 col"></div>
        <div class="advertisement-box col-5 col"></div>
        <div class="advertisement-box col-5 col"></div>
    </div>
</section> -->
<?php include_once 'footer.php' ?>
<script src="view/user/js/home.js"></script>
