<?php include_once 'header.php' ?>
<?php
$page = (isset($_GET['trang'])) ? $_GET['trang'] : 1;
$countSTT = (($page - 1) * 9) + 1;
$html_oder_management='';
foreach($oder_management as $item){
    if($item['order_status'] == 1){
        $status = 'Chờ xác nhận';
    }
    if($item['order_status'] == 2){
        $status = 'Vận chuyển';
    }
    if($item['order_status'] == 3){
        $status = 'Chờ giao hàng';
    }
    if($item['order_status'] == 4){
        $status = 'Đã giao hàng';
    }
    if($item['order_status'] == 5){
        $status = 'Đã hủy';
    }
    if($item['order_status'] == 6){
        $status = 'Trả hàng';
    }
    $html_oder_management.='<div class="list-row order-grid ">
    <div class="list-item flex-center">'.$countSTT++.'</div>
    <div class="list-item">'.$item['code'].'</div>
    <div class="list-item flex-center">'.$status.'</div>
    <div class="list-item flex-center">'.$item['creation_date'].'</div>
    <div class="list-item flex-center">'.$item['updation_date'].'</div>
    <div class="list-item flex-center">'.$item['payment_id'].'</div>
    <div class="list-item flex-center">'.$item['voucher_id'].'</div>
    <div class="list-item flex-center">'.$item['user_id'].'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=order-edit&id='.$item['id'].'" class="function-edit">Sửa</a>
        <a href="?mod=admin&act=order-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
}
?>
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

                <?=$html_oder_management;?>
                <div class="product-page_division">
                    <?=$html_number_page;?>
                    </div>
            </div>
        </div>
    </section>  
</main>