<?php include_once 'header.php' ?>
<title>Thêm sản phẩm</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
    <div id="toast"></div>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=category-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý danh mục</div>
                </div>
                <div class="title-function">Thêm</div>
                <img id="imagechange" src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=category-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên danh mục</div>
                    <input name="name" class="content_item-value" type="text" placeholder="Nhập tên danh mục" required title="Tên danh mục không được để trống">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" placeholder="Nhập mô tả" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input  hidden name="image" id="inputfile" class="content_item-value" type="file">
                    <label class="file" for="inputfile">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#fffffff" stroke-width="2"></path>
                <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                ADD FILE 
            </label>
                </div>    
                <input type="submit" class="content-submit" name="btn_addcategory" value="Thêm">
            </form>
        </div>
       
        <input hidden id="success" type="checkbox" <?= $check_success ?>>
        <div class="success">
            <div class="success-box">
                <div class="success-title">Thêm thành công</div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=admin&act=category-add" class="success-next">ok</a>
            </div>
        </div>
    </section>
</main>
<script>
    const inputflie = document.getElementById('inputfile');
const image = document.getElementById('imagechange');
inputflie.addEventListener('change', (el) => {
    image.src = URL.createObjectURL(el.target.files[0]);
});
</script>

