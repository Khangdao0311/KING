<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý danh mục</div>
                <a href="?mod=admin&act=category-add" class="title-add">Thêm danh mục</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title category-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Tên danh mục</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item">Mô tả</div>
                    <div class="list-item flex-center">Ngày thêm</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row category-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">namesssssssssss</div>
                    <div class="list-item flex-center"><div class="list_item-img"></div></div>
                    <div class="list-item">aaaaaaaaaaaaaasd dsd ds</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=category-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>