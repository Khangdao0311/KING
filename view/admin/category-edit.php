<?php include_once 'header.php' ?>
<title>Sửa danh mục</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=category-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý danh mục</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <img src="view/<?=$show_edit['image'];?>" class="title-img"></img>
            </div>
            <form class="content" action="?mod=admin&act=category-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên danh mục</div>
                    <input name="name" class="content_item-value" type="text" value="<?=$show_edit['name'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" value="<?=$show_edit['describle'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>   
                <input type="submit" class="content-submit" name="btn_editcategory" value="Chỉnh sửa">
                <input type="hidden" name="id" value="<?= $id ?>">
            </form>
        </div>
    </section>
</main>