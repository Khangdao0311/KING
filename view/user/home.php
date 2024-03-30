<?php
    $html_show_category_top_view = '';
    foreach ($category_all_top_view as $item) {
        $html_show_category_top_view .='
            <div onclick="show_category_rating('.$item['id'].')" class="rating_nav-item">'.$item['name'].'</div>
        ';
    }

    $html_show_top_view = '';
    $count = 1;
    foreach ($product_top_view as $item) {
        $html_show_top_view .= '
        <div onmouseover="show_rating()" class="rating-box">
            <div class="rating-STT">'.$count++.'</div>
            <a href="?mod=page&act=product-detail" class="rating-img"><img src="view/'.$item['image'].'" alt="'.$item['name'].'"></a>
            <div class="rating-conten">
                <a href="?mod=page&act=product-detail" class="rating_conten-name">'.$item['name'].'</a>
                <div class="rating_conten-author">'.author_ONE($item['publisher_id'])['name'].'</div>
                <div class="rating_conten-view">'.$item['view'].' lượt xem</div>
            </div>
        </div>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title>Trang chủ</title>
<link rel="stylesheet" href="view/user/css/home.css">
<section class="margin-header">
    <div class="container silde_banner">
        <div class="silde-box">
            <img class="slide-img" src="https://cdn0.fahasa.com/media/magentothem/banner7/Saigonbooks_Gold_Ver2_Slide_840x320.jpg" alt="">
            <div onclick="previous()" class="slide-controller-left">
                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_arrow_gray.svg" alt="">
            </div>
            <div onclick="next()" class="slide-controller-right">
                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_arrow_gray.svg" alt="">
            </div>
            <div class="slide-nav">
                
            </div>
        </div>
        <div class="banner-box">
            <div class="banner-item">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_sacombank_t3.jpg" alt="">
            </div>
            <div class="banner-item">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_zalopay_t3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section>
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
            
            <div class="category-item col-10 col">
                <a href="" class="category_item-img">
                    <img src="" alt="">
                </a>
                <a href="" class="category_item-text">Tên danh mục</a>
            </div>
            
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
            
            <div class="col-4 col">
                <div class="product-box">
                    <a href="'?mod=page&act=product-detail&id=" class="product-img"><img src="" alt="Tên sản phẩm"></a>
                    <a href="'?mod=page&act=product-detail&id=" class="product-mane">Tên sản phẩm</a>
                    <div class="product-price_sale">100.000 đ</div>
                    <del class="product-price">200.000 đ</del>
                    <div class="product-view">100 lượt xem</div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<section>
    <div class="container new-container">
        <div class="new-titel">
            <div class="new_titel-text">Sản phẩm mới</div>
        </div>
        <div class="new_product-box row">

            <div class="col-4 col">
                <div class="product-box">
                    <a href="'?mod=page&act=product-detail&id=" class="product-img"><img src="" alt="Tên sản phẩm"></a>
                    <a href="'?mod=page&act=product-detail&id=" class="product-mane">Tên sản phẩm</a>
                    <div class="product-price_sale">100.000 đ</div>
                    <del class="product-price">200.000 đ</del>
                    <div class="product-view">100 lượt xem</div>
                </div>
            </div>   

        </div>
    </div>
</section>
<section>
    <div class="container rating-container">
        <div class="rating-titel">
            <div class="ratting_titel-text">Bản xếp hạng lượt xem</div>
        </div>
        <div class="rating-nav">
            <div onclick="show_category_rating(0)" class="rating_nav-item rating_nav-item-check">Tất cả</div>
            <?= $html_show_category_top_view ?>           
        </div>
        <div class="rating_container">
            <div class="rating_container-left">
                <?= $html_show_top_view ?>
            </div>
            <div class="rating_container-right">
                <a href="?mod=page&act=product-detail&id=" class="rating_product_detail-img">
                    <img src="" alt="Tên sản phẩm">
                </a>
                <div class="rating_product_detail-content">
                    <a href="?mod=page&act=product-detail&id=" class="rating_product_detail_content-name">Tên sản phẩm</a>
                    <div class="rating_product_detail_content-author">Tác giả: Tên tác giả</div>
                    <div class="rating_product_detail_content-publisher">Nhà sản xuất: Tên nhà sản xuất</div>
                    <div class="rating_product_detail_content-price_sale">Giá khuyến mãi: 100.000 đ</div>
                    <div class="rating_product_detail_content-price">Giá gốc: <del>200.000 đ</div>
                    <div class="rating_product_detail_content-describe">Mô tả</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container publisher-container row">

        <div class="publisher-box col-9 col">
            <img src="https://cdn0.fahasa.com/media/wysiwyg/Hien_UI/LogoNCC/1_NCC_KimDong_115x115.png" alt="">
        </div>
        
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
<script src="view/user/js/home.js"></script>
<?php include_once 'footer.php' ?>