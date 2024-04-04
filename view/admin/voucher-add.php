<?php include_once 'header.php' ?>
<?php
$html_data_user_id="";
foreach ($data_user_id as $item){
    $html_data_user_id.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
}
?>
<title>Thêm Voucher</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=voucher-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý Voucher</div>
                </div>
                <div class="title-function">Thêm</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=voucher-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">code Voucher</div>
                    <input name="code" class="content_item-value" type="text" placeholder="Nhập code Voucher">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Số tiền</div>
                    <input name="price" class="content_item-value" type="number" placeholder="Nhập số tiền">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày bắt đầu</div>
                    <input name="start_date" class="content_item-value" type="date" placeholder="Nhập ngày bắt đầu">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày kết thúc</div>
                    <input name="end_date" class="content_item-value" type="date" placeholder="Nhập ngày kết thúc">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="number" placeholder="Nhập số lượng">
                </div>
                <div class="content-item">
                    <div class="content_item-key">User được sử dụng</div>
                    <select class="fix" name="user_id" id="">
                        <option value=""></option>
                        <?=$html_data_user_id;?>
                    </select>
                </div>
                <input name="btn_addvoucher" type="submit" class="content-submit" value="Thêm">
            </form>
        </div>
    </section>
</main>