<?php
     require_once 'global.php';
     require_once 'pdo.php';
     require_once 'category.php';
     require_once 'publisher.php';
     require_once 'author.php';
     require_once 'product.php';
    $product = product_ONE($_POST['id']);
    echo '
        <a href="?mod=page&act=product-detail&id='.$product['id'].'" class="rating_product_detail-img">
            <img src="view/'.$product['image'].'" alt="">
        </a>
        <div class="rating_product_detail-content">
            <a href="?mod=page&act=product-detail&id='.$product['id'].'" class="rating_product_detail_content-name">'. $product['name'].'</a>
            <div class="rating_product_detail_content-author">Tác giả: '. author_ONE($product['author_id'])['name'].'</div>
            <div class="rating_product_detail_content-publisher">Nhà sản xuất: '. publisher_ONE($product['publisher_id'])['name'].'</div>
            <div class="rating_product_detail_content-price_sale">Giá khuyến mãi: '. number_format($product['price_sale'],0,',','.').' đ</div>
            <div class="rating_product_detail_content-price">Giá gốc: <del>'. number_format($product['price'],0,',','.').'</del> đ</div>
            <div class="rating_product_detail_content-describe">'. $product['describle'].'</div>
        </div>
    ';
?>