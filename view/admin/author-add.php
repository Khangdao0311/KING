<?php include_once 'header.php' ?>
<title>Thêm tác giả</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=author-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý tác giả</div>
                </div>
                <div class="title-function">Thêm tác giả</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=author-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên tác giả</div>
                    <input name="name" class="content_item-value" type="text" placeholder="Nhập tên tác giả" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" placeholder="Nhập email tác giả" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày sinh</div>
                    <input name="dob" class="content_item-value" type="date" placeholder="Nhập ngày sinh" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Thông tin</div>
                    <input name="information" class="content_item-value" type="text" placeholder="Nhập thông tin">
                </div> 
                <input type="submit" class="content-submit" name="btn_addauthor" value="Thêm">
            </form>
        </div>
        <input hidden id="success" type="checkbox" <?= $check_success ?>>
        <div class="success">
            <div class="success-box">
                <div class="success-title">Thêm thành công</div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=admin&act=author-add" class="success-next">ok</a>
            </div>
        </div>
    </section>
</main>