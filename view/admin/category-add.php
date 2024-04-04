<?php include_once 'header.php' ?>
<title>Thêm sản phẩm</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
    <div id="toast"></div>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=category-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý sản phẩm</div>
                </div>
                <div class="title-function">Thêm</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=category-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên danh mục</div>
                    <input name="name" class="content_item-value" type="text" placeholder="nhập Tên danh mục">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" placeholder="nhập mô tả">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>   
                <input type="submit" class="content-submit" name="btn_addcategory" value="Thêm">
            </form>
        </div>
    </section>
</main>

