<?php
    $html_img_productdetail = "";
    foreach ($gallery as $item) {
        $html_img_productdetail .= '
            <div onclick="show_image(this)" class="productdetail_image_list-item">
                <img src="view/' . $item['image'] . '" alt="">
            </div>
            ';
    }
    $html_productdetail_same = "";
    foreach ($product_detail_same as $item) {
        $link = 'index.php?mod=page&act=product-detail&id=' . $item['id'];
        $html_productdetail_same .= '
            <div class="col-4 col t-3 m-2">
                <div class="product-box">
                    <a href="' . $link . '" class="product-img"><img src="view/' . $item['image'] . '" alt=""></a>
                    <a href="'.$link.'" class="product-mane">' . $item['name'] . '</a>
                    <div class="product-price_sale">' . number_format($item['price_sale'], 0, ',', '.') . ' đ</div>
                    <del class="product-price">' . number_format($item['price'], 0, ',', '.') . ' đ</del>
                    <div class="product-view">' . $item['view'] . ' lượt xem</div>
                    <div class="product-icon_box">';
                if ($item['quantity'] > 0) {
    $html_productdetail_same .= '
                    <div onclick="addcart(this)" class="product-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <input type="text" hidden value="'.$item['id'].'">
    ';
                }
    $html_productdetail_same    .= '
                        <div class="product-icon">
                            <span class="material-symbols-outlined">favorite</span>
                        </div>
                    </div>
                </div>
            </div>
            ';
    }
    $html_comment = '';
    foreach ($comments as $item) {
        $comment_user = user_ONE($item['user_id']); 
        $img = ($comment_user['image'] != '') ? 'view/images/user/'.$comment_user['image'] : 'https://cdn-icons-png.flaticon.com/512/3033/3033143.png' ;
        $star5 = ($item['rating'] > 4) ? "star-active" : "";
        $star4 = ($item['rating'] > 3) ? "star-active" : "";
        $star3 = ($item['rating'] > 2) ? "star-active" : "";
        $star2 = ($item['rating'] > 1) ? "star-active" : "";
        $html_comment .= '
            <div class="productdetail_comment-item">
                <img class="productdetail_comment_item-img" src="'.$img.'" alt="">
                <div class="productdetail_comment_item-content">
                    <div class="productdetail_comment_item_content-name">'.$comment_user['name'].'</div>
                    <div class="productdetail_comment_item_content-rating">
                    <span class="material-symbols-outlined '.$star5.'">star</span>
                    <span class="material-symbols-outlined '.$star4.'">star</span>
                    <span class="material-symbols-outlined '.$star3.'">star</span>
                    <span class="material-symbols-outlined '.$star2.'">star</span>
                    <span class="material-symbols-outlined star-active">star</span>
                    </div>
                    <div class="productdetail_comment_item_content-text">'.$item['content'].'</div>
                </div>
            </div>
        ';
    }
?>
<?php include_once('header.php') ?>
<title>Sản Phẩm</title>
<link rel="stylesheet" href="view/user/css/product-detail.css">
<link rel="stylesheet" href="view/user/css/reponsive/product-detail.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Sản phẩm / Sản phẩm chi tiết</div>
    </div>
</section>
<section>
    <div class="container productdetail-container m-1">
        <div class="productdetail-image">
            <div class="productdetail_image-list m-0">

                <?= $html_img_productdetail ?>

            </div>
            <div class="productdetail_image-main">
                <img src="view/<?= $product_detail['image'] ?>" alt="">
            </div>
        </div>
        <form action="?mod=cart&act=list" method="post" class="productdetail-content">
            <div class="productdetail-name"><?= $product_detail['name'] ?></div>
            <div class="productdetail-publisher_author">
                <div class="productdetail-publisher">Nhà xuất bản: <b><?= $publisher['name'] ?></b></div>
                <div class="productdetail-author">Tác giả: <b><?= $author['name'] ?></b></div>
            </div>
            <div class="productdetail-price_container">
                <div class="productdetail-price_sale">Giá: <b><?= number_format($product_detail['price_sale'], 0, ',', '.') ?> đ</b></div>
                <div class="productdetail-price_box">
                    <div class="productdetail-price">Giá gốc: <del><?= number_format($product_detail['price'], 0, ',', '.') ?> đ</del></div>
                    <div class="productdetail-persent"><?= 100 - (($product_detail['price_sale'] / $product_detail['price']) * 100) ?> %</div>
                </div>
            </div>
            <?php if ($product_detail['quantity'] > 0): ?>
            <div class="productdetail-quantity">
                <div class="productdetail_quantity-text">Số lượng: </div>
                <div class="productdetail_quantity-button">
                    <div onclick="minus()" class="productdetail_quantity_button-minus">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_minus2x.png" alt="">
                    </div>
                    <input name="quantity_cart" value="1" class="productdetail_quantity_button-number" type="text">
                    <div onclick="plus()" class="productdetail_quantity_button-plus">
                        <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_plus2x.png" alt="">
                    </div>
                </div>
                <div class="product-inventory">(Còn <?=$product_detail['quantity'] ?> sản phẩm tại cửa hàng)</div>
            </div>
            <div class="productdetail-button">
                <input name="btn_buy_now" class="productdetail_button-buy_now" type="submit" value="Mua ngay">
                <div class="click-addcart" onclick="addcart(this)">
                    <div class="productdetail_button-add_cart">
                        <div class="productdetail_button_add_cart-icon">
                            <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/icon-cart.svg" alt="">
                        </div>
                        <div class="productdetail_button_add_cart-text">Thêm vào giỏ hàng</div>
                    </div>
                </div>
                <input type="text" hidden value="<?=$product_detail['id']?>">
            </div>
            <input value="<?= $product_detail['id'] ?>" name="id" type="hidden">
            <?php else: ?>
            <div class="productdetail-quantity">
                <div class="product-inventory">(Còn <?=$product_detail['quantity'] ?> sản phẩm tại cửa hàng)</div>
            </div>
            <div class="productdetail_soldout">Sản phẩm hện không còn hàng !</div>
            <?php endif; ?>
        </form>
    </div>
</section>
<section>
    <div class="container">
        <div class="productdetail-category">
            <p>CHI TIẾT SẢN PHẨM</p>
        </div>
        <div class="product-info-descibe">
            <!-- <div class="productdetail-descibe">
                <p>Mã hàng</p>
                <span>combo-2612202300</span>
            </div> -->
            <div class="productdetail-descibe">
                <p class="m-2">Tên Nhà Cung Cấp</p>
                <span class="m-2">KING</span>
            </div>
            <div class="productdetail-descibe">
                <p class="m-2">Tác giả</p>
                <span class="m-2">Tên tác giả</span>
            </div>
            <!-- <div class="productdetail-descibe">
                <p>Người Dịch</p>
                <span>Bùi Thanh Thúy, Linh Tử</span>
            </div> -->
            <div class="productdetail-descibe">
                <p class="m-2">Nhà xuất bản </p>
                <span class="m-2">Tên nhà xuất bản</span>
            </div>
            <div class="productdetail-descibe">
                <p class="m-2">Trọng lượng (gr)</p>
                <span class="m-2">890</span>
            </div>
            <div class="productdetail-descibe">
                <p class="m-2">Kích Thước Bao Bì</p>
                <span class="m-2">24 x 15.7 x 4.3 cm</span>
            </div>
            <div class="productdetail-descibe">
                <p class="m-2">Hình thức</p>
                <span class="m-2">Bìa Mềm</p>
            </div>
            <div class="productdetail-descibe">
                <p class="m-2">Sản phẩm bán chạy nhất</p>
                <span class="m-2">Top 100 sản phẩm <?= $name_category ?> bán chạy của tháng</span>
            </div>
            <div class="productdetail-moredescibe">
                <p>Giá sản phẩm trên KING đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản
                    phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói,
                    phí vận chuyển, phụ phí hàng cồng kềnh,...</p>
                <p>Chính sách khuyến mãi trên KING không áp dụng cho Hệ thống Nhà sách KING trên toàn quốc
                </p>
            </div>
            <div class="productdetail-innerbook">
                <h3><?= $product_detail['name'] ?></h3>
                <p class="productdetail_innerbook-describe"><?= $product_detail['describle'] ?></p>
            </div>
            <button onclick="check_describe(this)" class="productdetail-button_buy">Xem thêm</button>
        </div>
</section>
<section>
    <div class="container productdetail_comment-container">
        <div class="productdetail_comment-title">đánh giá sản phẩm</div>
        <div class="productdetail_comment-box">
            
            <?= $html_comment ?>
            <?php if ($comments ==  ''): ?>
            <div class="comment_NaN">Sản Phẩm Không có Bình Luận</div>
            <?php endif; ?>

        </div>
        <?php if($_SESSION['user'] != []): ?>
        <div class="productdetail_comment-form">
            <?php if ($_SESSION['user']['image'] != ''): ?>
            <img src="view/images/user/<?= $_SESSION['user']['image'] ?>" alt="" class="productdetail_comment_form-img">
            <?php else: ?>
            <img src="https://cdn-icons-png.flaticon.com/512/3033/3033143.png" alt="" class="productdetail_comment_form-img">
            <?php endif; ?>
            <div class="productdetail_comment_form-content">
                <div class="productdetail_comment_form-rating">
                    <input onclick="star_rating(this)" hidden id="star5" type="radio" name="star" value="5" >
                    <label for="star5" class="material-symbols-outlined 1 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star4" type="radio" name="star" value="4">
                    <label for="star4" class="material-symbols-outlined 2 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star3" type="radio" name="star" value="3">
                    <label for="star3" class="material-symbols-outlined 3 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star2" type="radio" name="star" value="2">
                    <label for="star2" class="material-symbols-outlined 4 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star1" type="radio" name="star" value="1">
                    <label for="star1" class="material-symbols-outlined 5 star">star</label>
                </div>
                <div class="productdetail_comment_form-box">
                    <input class="productdetail_comment_form-text" type="text" placeholder="Nhập bình luận của bạn về sản phẩm..." value="">
                    <div onclick="submit_comment(this)" class="productdetail_comment_form-submit">Gửi</div>
                    <input hidden type="text" id="number_start" value="5">
                    <input hidden type="text" value="<?= $product_detail['id'] ?>">
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>




<section>
    <div class="container product_like-container">
        <div class="new-titel">
            <div class="new_titel-text">Sản phẩm tương tự</div>
        </div>
        <div class="row">
            <?= $html_productdetail_same ?>
        </div>
    </div>
</section>











<?php include_once('footer.php') ?>
<script src="view/user/js/product-detail.js"></script>
<script src="view/user/js/cart.js"></script>
<script src="view/user/js/script.js"></script>