<?php include_once 'header.php' ?>
<?php
$html_data_user_id="";
foreach ($data_user_id as $item){
    $html_data_user_id.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
}
?>
<title>Sửa Voucher</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=voucher-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý Voucher</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="?mod=admin&act=voucher-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">code Voucher</div>
                    <input name="code" class="content_item-value" type="text" value="<?=$show_edit['code'];?>">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Số tiền</div>
                    <input name="price" class="content_item-value" type="number" value="<?=$show_edit['price'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày bắt đầu</div>
                    <input name="start_date" class="content_item-value" type="date" value="<?=$show_edit['start_date'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày kết thúc</div>
                    <input name="end_date" class="content_item-value" type="date" value="<?=$show_edit['end_date'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="number" value="<?=$show_edit['quantity'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">User được sử dụng</div>
                    <select class="fix" name="user_id" id="">
                        <option hidden value="<?=$show_edit['user_id'];?>"><?=user_ONE($show_edit['user_id'])['name'];?></option>
                        <?=$html_data_user_id;?>
                    </select>
                </div>
                <input name="btn_editvoucher" type="submit" class="content-submit" value="Chỉnh sửa">
                <input type="hidden" name="id" value="<?=$id;?>">
            </form>
        </div>
    </section>
</main>