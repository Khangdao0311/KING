<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý sản phẩm</div>
                <a href="?mod=admin&act=product-add" class="title-add">Thêm sản phẩm</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title product-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Tên sản phẩm</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item flex-center">Giá</div>
                    <div class="list-item flex-center">Số lượng</div>
                    <div class="list-item flex-center">Lượt xem</div>
                    <div class="list-item flex-center">Ngày thêm</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Mã danh mục</div>
                    <div class="list-item flex-center">Mã tác giả</div>
                    <div class="list-item flex-center">Mã nhà sản xuất</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row product-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">namesssssssssss</div>
                    <div class="list-item flex-center"><div class="list_item-img"></div></div>
                    <div class="list-item flex-center flex-column">
                        <div class="list_item-price_sale">100.000 đ</div>
                        <del class="list_item-price">200.000 đ</del>
                    </div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=product-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>