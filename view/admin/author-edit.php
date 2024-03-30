<?php include_once 'header.php' ?>
<title>Sửa tác giả</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=author-list" class="title_menu-icon"></a>
                    <div class="title_menu-content">Quản lý tác giả</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên tác giả</div>
                    <input class="content_item-value" type="text" value="2131213213213">
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input class="content_item-value" type="file">
                </div>    
                <input type="submit" class="content-submit" value="Chỉnh sửa">
            </form>
        </div>
    </section>
</main>