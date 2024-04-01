<?php
    $link = '';
    $html_show_category = '';
    foreach ($category_all as $item) {
        $html_show_category .= '
        <a href="?mod=page&act=product&category_id='.$item['id'].'" class="product_box_nav-item_content">'.$item['name'].'</a>
        '; 
    }
    $html_show_author = '';
    foreach ($author_all as $item) {
        $html_show_author .= '
        <a href="?mod=page&act=product&author_id='.$item['id'].'" class="product_box_nav-item_content">'.$item['name'].'</a>
        '; 
    }
    $html_show_publisher = '';
    foreach ($publisher_all as $item) {
        $html_show_publisher .= '
        <a href="?mod=page&act=product&publisher_id='.$item['id'].'" class="product_box_nav-item_content">'.$item['name'].'</a>
        '; 
    }

    $html_show_product_all = '';
    foreach ($product_all as $item) {
        $html_show_product_all .= '
            <div class="col-3 col">
                    <div class="product-box">
                        <a href="?mod=page&act=product-detail&id=" class="product-img"><img src="view/'.$item['image'].'" alt="'.$item['name'].'"></a>
                        <a href="?mod=page&act=product-detail&id=" class="product-mane">'.$item['name'].'</a>
                        <div class="product-price_sale">Giá: '.number_format($item['price_sale'],0,',','.').' đ</div>
                        <div class="product-price">Giá gốc: <del>'.number_format($item['price'],0,',','.').' đ</del> </div>
                        <div class="product-view">'.$item['view'].' lượt xem</div>
                        <div class="product-icon_box">
                            <div class="product-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/4903/4903482.png" alt="">
                            </div>
                            <div class="product-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png " alt="">
                            </div>
                        </div>
                    </div>
                </div>
        ';
    }
?>
<?php include_once 'header.php' ?>
<title>Sản Phẩm</title>
<link rel="stylesheet" href="view/user/css/product.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Home</div>
    </div>
</section>
<section>
    <div class="container product-container">
        <div class="product-limit">
            <form action="?mod=page&act=product" method="post" class="product_limit-box">
                <div class="product_limit_box-text">Show:
                    <select name="limit" id="item-number" data-select-like-alignement="never" >
                        <option hidden value="<?= $limit?>"><?= $limit?></option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                        <option value="12">12</option>
                        <option value="15">15</option>
                    </select>
                </div>
                <input hidden name="category_id" value="<?= $category_id ?>" type="text">
                <input hidden name="search" value="<?= $search ?>" type="text">
                <input name="btn_limit" class="product_limit_box-button" type="submit" value="Xem">
            </form>
        </div>
        <div class="product_box">
            <div class="product_box-nav">
                <div class="product_box_nav-item">
                    <a href="?mod=page&act=product" class="product_box_nav-item_title">Danh Mục</a>
                    <div class="product_box_nav-item_box">
                        <?= $html_show_category ?>
                    </div> 
                   
                </div>
                <div class="product_box_nav-item">
                    <a href="?mod=page&act=product" class="product_box_nav-item_title">Tác Giả</a>
                    <div class="product_box_nav-item_box">
                        <?= $html_show_author ?>
                    </div> 
                   
                </div>
                <div class="product_box_nav-item">
                    <a href="?mod=page&act=product" class="product_box_nav-item_title">Nhà Xuất Bản</a>
                    <div class="product_box_nav-item_box">
                        <?= $html_show_publisher ?>
                    </div> 
                   
                </div>
            </div>
            <div class="product_box-show ">
                <div class="product-show row">
                     <?= $html_show_product_all ?>
                </div>
                <div class="product-page_division">
                    <!-- <?= $limit ?> -->
                    <?= $page_division ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php' ?>