<?php include_once 'header.php' ?>
<title>Thêm khách hàng</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=user-list" class="title_menu-icon"></a>
                    <div class="title_menu-content">Quản lý khách hàng</div>
                </div>
                <div class="title-function">Thêm</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên khách hàng</div>
                    <input class="content_item-value" type="text" placeholder="Nhập Tên khách hàng">
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input class="content_item-value" type="file">
                </div>   
                <input type="submit" class="content-submit" value="Thêm">
            </form>
        </div>
    </section>
</main>