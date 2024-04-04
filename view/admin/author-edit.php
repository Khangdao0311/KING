<?php include_once 'header.php' ?>
<title>Sửa tác giả</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=author-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý tác giả</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=author-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên tác giả</div>
                    <input name="name" class="content_item-value" type="text" value="<?=$show_edit['name'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" value="<?=$show_edit['email'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày sinh</div>
                    <input name="dob" class="content_item-value" type="date" value="<?=$show_edit['dob'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Thông tin</div>
                    <input name="information" class="content_item-value" type="text" <?=$show_edit['information'];?>>
                </div> 
                <input type="submit" class="content-submit" name="btn_editauthor" value="Chỉnh sửa">
                <input hidden name="id" type="text" value="<?=$id;?>">
            </form>
        </div>
    </section>
</main>