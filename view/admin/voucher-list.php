<?php include_once 'header.php' ?>
<?php
$page = (isset($_GET['trang'])) ? $_GET['trang'] : 1;
$countSTT = (($page - 1) * 9) + 1;
$html_voucher_management="";
foreach ($voucher_management as $item){
    $html_voucher_management.='<div class="list-row voucher-grid ">
    <div class="list-item flex-center">'.$countSTT++.'</div>
    <div class="list-item">'.$item['code'].'</div>
    <div class="list-item flex-center list_item-price_sale">'.$item['price'].'</div>
    <div class="list-item flex-center">'.$item['start_date'].'</div>
    <div class="list-item flex-center">'.$item['end_date'].'</div>
    <div class="list-item flex-center">'.$item['quantity'].'</div>
    <div class="list-item flex-center">'.$item['creation_date'].'</div>
    <div class="list-item flex-center">'.$item['updation_date'].'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=voucher-edit&id='.$item['id'].'" class="function-edit">Sửa</a>
        <a href="?mod=admin&act=voucher-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
}
?>
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

                <?=$html_voucher_management;?>

            </div>
        </div>
    </section>  
</main>