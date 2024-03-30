<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý đơn hàng</div>
            </div>
            <div class="list">
                <div class="list-row list-row_title order-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Code</div>
                    <div class="list-item flex-center">Trạng Thái</div>
                    <div class="list-item flex-center">Ngày Tạo</div>
                    <div class="list-item flex-center">Ngày Cập Nhật</div>
                    <div class="list-item flex-center">Mã PTTT</div>
                    <div class="list-item flex-center">Mã Voucher</div>
                    <div class="list-item flex-center">Mã Khách Hàng</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <div class="list-row order-grid ">
                    <div class="list-item flex-center">1</div>
                    <div class="list-item">1321321313</div>
                    <div class="list-item flex-center">Chưa thanh toán</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">00-00-0000</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">1</div>
                    <div class="list-item flex-center">
                        <a href="?mod=admin&act=order-edit&id=" class="function-edit">Sửa</a>
                        <div class="function-delete">Xóa</div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>