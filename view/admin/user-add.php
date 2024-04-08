<?php include_once 'header.php' ?>
<title>Thêm khách hàng</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=user-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý khách hàng</div>
                </div>
                <div class="title-function">Thêm</div>
                <img id="imagechange" src="view/images/logo.png" class="title-img"></img>
            </div>
            <form class="content" action="?mod=admin&act=user-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên khách hàng</div>
                    <input name="name" class="content_item-value" type="text" placeholder="Nhập Tên khách hàng" required>
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Tên user</div>
                    <input name="username" class="content_item-value" type="text" placeholder="Nhập Tên user" required>
                </div> 
                <div class="content-item">
                    <div class="content_item-key">Mật khẩu</div>
                    <input name="password" class="content_item-value" type="password" placeholder="Nhập mật khẩu" required>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Vai trò</div>
                    <div class="radio">
                        <input type="radio" name="role" value="0" checked>
                        <div style="font-size: 1.6rem;">khách hàng</div>
                    </div>
                    <div class="radio">
                        <input type="radio" name="role" value="1">
                        <span style="font-size: 1.6rem;">admin</span>
                    </div>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" placeholder="Nhập email" required>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Số điện thoại</div>
                    <input name="phone" class="content_item-value" type="number"  placeholder="Nhập số điện thoại" required>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Địa chỉ</div>
                    <input name="address" class="content_item-value" type="text" placeholder="Nhập địa chỉ">
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
                <input name="btn_adduser" type="submit" class="content-submit" value="Thêm">
            </form>
        </div>
        <input hidden id="success" type="checkbox" <?= $check_success ?>>
        <div class="success">
            <div class="success-box">
                <div class="success-title">Thêm thành công</div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=admin&act=user-add" class="success-next">ok</a>
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