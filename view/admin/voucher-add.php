<?php include_once 'header.php' ?>
<title>Thêm Voucher</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=voucher-list" class="title_menu-icon"></a>
                    <div class="title_menu-content">Quản lý Voucher</div>
                </div>
                <div class="title-function">Thêm</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">code Voucher</div>
                    <input class="content_item-value" type="text" placeholder="Nhập code Voucher">
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