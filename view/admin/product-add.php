<?php include_once 'header.php' ?>
<title>Thêm sản phẩm</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=product-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý sản phẩm</div>
                </div>
                <div class="title-function">Thêm</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="?mod=admin&act=product-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên sản phẩm</div>
                    <input name="name" class="content_item-value" type="text" placeholder="nhập Tên sản phẩm">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá</div>
                    <input name="price" class="content_item-value" type="text" placeholder="nhập giá">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá khuyến mãi</div>
                    <input name="price_sale" class="content_item-value" type="text" placeholder="nhập giá khuyến mãi">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="text" placeholder="nhập số lượng">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" placeholder="nhập mô tả">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Nổi bật</div>
                    <input name="noibat" class="content_item-value" type="text" placeholder="nhập mã nổi bật">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã danh mục</div>
                    <input name="category_id" class="content_item-value" type="text" placeholder="nhập mã danh mục">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã tác giả</div>
                    <input name="author_id" class="content_item-value" type="text" placeholder="nhập mã tác giả">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã nhà sản xuất</div>
                    <input name="publisher_id" class="content_item-value" type="text" placeholder="nhập mã nhà sản xuất">
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>   
                <input type="submit" class="content-submit" name="btn_addproduct" value="Thêm">
            </form>
        </div>
    </section>
</main>