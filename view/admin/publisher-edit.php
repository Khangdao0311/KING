<?php include_once 'header.php' ?>
<title>Sửa tác giả</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=publisher-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản nhà phát hành</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <img src="view/<?=$show_edit['image'];?>" class="title-img"></img>
            </div>
            <form class="content" action="?mod=admin&act=publisher-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên nhà phát hành</div>
                    <input name="name" class="content_item-value" type="text"  value="<?=$show_edit['name'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Address</div>
                    <input name="address" class="content_item-value" type="text" value="<?=$show_edit['address'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" value="<?=$show_edit['email'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Thông tin</div>
                    <input name="information" class="content_item-value" type="text" value="<?=$show_edit['information'];?>">
                </div> 
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div> 
                <input type="submit" class="content-submit" name="btn_editpublisher" value="Chỉnh sửa">
                <input hidden type="text" name="id" value="<?=$id;?>">
            </form>
        </div>
    </section>
</main>