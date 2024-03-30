<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý Voucher</div>
                <a href="?mod=admin&act=voucher-add" class="title-add">Thêm Voucher</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title voucher-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Code</div>
                    <div class="list-item flex-center">Giá trị Voucher</div>
                    <div class="list-item flex-center">Ngày bắt đầu</div>
                    <div class="list-item flex-center">Ngày kết thúc</div>
                    <div class="list-item flex-center">Số lượng</div>
                    <div class="list-item flex-center">Ngày tạo</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row voucher-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">adsadasd</div>
                    <div class="list-item flex-center list_item-price_sale">100.00 đ</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">0</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=voucher-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>