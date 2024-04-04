<?php include_once 'header.php' ?>
<title>Thêm nhà phát hành</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=publisher-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý nhà phát hành</div>
                </div>
                <div class="title-function">Thêm</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=publisher-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên nhà phát hành</div>
                    <input name="name" class="content_item-value" type="text" placeholder="nhập Tên nhà phát hành">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Address</div>
                    <input name="address" class="content_item-value" type="text" placeholder="nhập Address">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" placeholder="nhập email tác giả">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Thông tin</div>
                    <input name="information" class="content_item-value" type="text" placeholder="nhập thông tin">
                </div> 
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div> 
                <input type="submit" class="content-submit" name="btn_addpublisher" value="Thêm">
            </form>
        </div>
    </section>
</main>