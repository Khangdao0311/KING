<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý khách hàng</div>
                <a href="?mod=admin&act=user-add" class="title-add">Thêm khách hàng</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title user-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Họ và Tên</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item">Email</div>
                    <div class="list-item flex-center">Số điện thoại</div>
                    <div class="list-item flex-center">Vai trò</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row user-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">Đào Vĩnh Khang</div>
                    <div class="list-item flex-center"><div class="list_item-img"></div></div>
                    <div class="list-item">khangdao0311@gmail.com</div>
                    <div class="list-item flex-center">0999999999</div>
                    <div class="list-item flex-center">Quản trị</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=user-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>