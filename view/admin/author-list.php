<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý Tác Giả</div>
                <a href="?mod=admin&act=author-add" class="title-add">Thêm Tác Giả</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title author-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Họ và Tên</div>
                    <div class="list-item">Email</div>
                    <div class="list-item">Thông Tin</div>
                    <div class="list-item flex-center">Ngày sinh</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row author-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">scacsac</div>
                    <div class="list-item">aaaaaaa@gmail.com</div>
                    <div class="list-item">aaaaaaaaaaaaa dd</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=author-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>