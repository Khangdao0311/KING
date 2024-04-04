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
        <div class="col-4 col">
            <div class="product-box">
                <a href="' . $link . '" class="product-img"><img src="view/' . $item['image'] . '" alt=""></a>
                <a href="?mod=page&act=product-detail" class="product-mane">' . $item['name'] . '</a>
                <div class="product-price_sale">' . number_format($item['price_sale'], 0, ',', '.') . ' đ</div>
                <del class="product-price">' . number_format($item['price'], 0, ',', '.') . ' đ</del>
                <div class="product-view">' . $item['view'] . ' lượt xem</div>
                <div class="product-icon_box">
                <div onclick="addcart(this)" class="product-icon">
                <span class="material-symbols-outlined">shopping_cart</span>
            </div>
            <input type="text" hidden value="' . $item['id'] . '">
                    <div class="product-icon">
                        <span class="material-symbols-outlined">favorite</span>
                    </div>
               </div>
            </div>
        </div>
        ';
}
?>

<?php include_once('header.php') ?>
<title>Sản Phẩm</title>
<link rel="stylesheet" href="view/user/css/product-detail.css">
<section class=" link_page">
    <div class="container">
        <div class="link_page-text">Trang chủ / Sản phẩm / Sản phẩm chi tiết</div>
    </div>
</section>
<section>
    <div class="container productdetail-container">
        <div class="productdetail-image">
            <div class="productdetail_image-list">

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
                <p>Tên Nhà Cung Cấp</p>
                <span>KING</span>
            </div>
            <div class="productdetail-descibe">
                <p>Tác giả</p>
                <span>Tên tác giả</span>
            </div>
            <!-- <div class="productdetail-descibe">
                <p>Người Dịch</p>
                <span>Bùi Thanh Thúy, Linh Tử</span>
            </div> -->
            <div class="productdetail-descibe">
                <p>Nhà xuất bản </p>
                <span>Tên nhà xuất bản</span>
            </div>
            <div class="productdetail-descibe">
                <p>Trọng lượng (gr)</p>
                <span>890</span>
            </div>
            <div class="productdetail-descibe">
                <p>Kích Thước Bao Bì</p>
                <span>24 x 15.7 x 4.3 cm</span>
            </div>
            <div class="productdetail-descibe">
                <p>Hình thức</p>
                <span>Bìa Mềm</p>
            </div>
            <div class="productdetail-descibe">
                <p>Sản phẩm bán chạy nhất</p>
                <span>Top 100 sản phẩm <?= $name_category ?> bán chạy của tháng</span>
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
<script src="view/user/js/cart.js"></script>
<script src="view/user/js/script.js"></script>