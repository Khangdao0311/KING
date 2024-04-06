<?php
     require_once '../global.php';
     require_once '../pdo.php';
     require_once '../category.php';
     require_once '../publisher.php';
     require_once '../author.php';
     require_once '../product.php';
    $id = $_POST['id'];

    $products_view = product_SELECT(0,0,TRUE,0,"",$id,0,0,5);
    $categorys = category_ALL();
    $check = (!$id)? 'rating_nav-item-check' : '';
    $html_show_category_rating = '
        <div class="rating-titel">
            <div class="ratting_titel-text">Bản xếp hạng lượt xem</div>
        </div>
        <div style="backgruond:blue;" class="rating-nav swiper_rating mySwiper">
            <div class="swiper-wrapper">
                <div onclick="show_category_rating(0)" class="swiper-slide rating_nav-item '.$check.'">Tất cả</div>';
    foreach ($categorys as $item) {
        $check = ($id == $item['id']) ? 'rating_nav-item-check' : '';
        $html_show_category_rating .= '
                <div onclick="show_category_rating('.$item['id'].')" class="swiper-slide rating_nav-item '.$check.' m-4">'.$item['name'].'</div>
        ';
    }
    $html_show_category_rating .= '
            </div>
        </div>
        </div>
        <div class="rating_container">
            <div class="rating_container-left">';
    $count = 1;
    foreach ($products_view as $item) {
        $link_product_detail = '?mod=page&act=product-detail&id='.$item['id'];
        $html_show_category_rating .= '
            <div onmouseover="show_rating('.$item['id'].')" class="rating-box">
                <div class="rating-STT">'.$count++.'</div>
                <a href="'.$link_product_detail.'" class="rating-img"><img src="view/'.$item['image'].'"></a>
                <div class="rating-conten">
                    <a href="'.$link_product_detail.'" class="rating_conten-name">'.$item['name'].'</a>
                    <div class="rating_conten-author">'.author_ONE($item['author_id'])['name'].'</div>
                    <div class="rating_conten-view">'.number_format($item['view'],0,',','.').' lượt xem</div>
                </div>
            </div>
        ';
    }
    $html_show_category_rating .= '
            </div>
            <div id="load-show_rating" class="rating_container-right m-0">
                <a href="?mod=page&act=product-detail&id='.$products_view[0]['id'].'" class="rating_product_detail-img">
                    <img src="view/'.$products_view[0]['image'].'" alt="">
                </a>
                <div class="rating_product_detail-content">
                    <a href="?mod=page&act=product-detail&id='.$products_view[0]['id'].'" class="rating_product_detail_content-name">'.$products_view[0]['name'].'</a>
                    <div class="rating_product_detail_content-author">Tác giả: '.author_ONE($products_view[0]['author_id'])['name'].'</div>
                    <div class="rating_product_detail_content-publisher">Nhà sản xuất: '.publisher_ONE($products_view[0]['publisher_id'])['name'].'</div>
                    <div class="rating_product_detail_content-price_sale">Giá khuyến mãi: '.number_format($products_view[0]['price_sale'],0,',','.').' đ</div>
                    <div class="rating_product_detail_content-price">Giá gốc: <del>'.number_format($products_view[0]['price'],0,',','.').'</del> đ</div>
                    <div class="rating_product_detail_content-describe">'.$products_view[0]['describle'].'</div>
                </div>
            </div>
        </div>
    ';
    echo $html_show_category_rating;
?>
<script src="view/user/js/home.js"></script>