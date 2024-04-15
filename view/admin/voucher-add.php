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
                <div class="title-function">Thêm voucher</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form id="myForm" class="content" action="?mod=admin&act=voucher-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">code Voucher</div>
                    <input name="code" class="content_item-value" type="text" placeholder="Nhập code Voucher" required>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Số tiền</div>
                    <input name="price" class="content_item-value" type="number" placeholder="Nhập số tiền" min="1" required>
                </div>
                <div id="select1Error" class="toast">Ngày bắt đầu không được vượt qua ngày kết thúc!</div>
                <div id="select2Error" class="toast">Ngày bắt đầu không được nhỏ hơn hôm nay!</div>
                <div class="content-item">
                    <div class="content_item-key">Ngày bắt đầu</div>
                    <input name="start_date" class="content_item-value" type="date" placeholder="Nhập ngày bắt đầu" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Ngày kết thúc</div>
                    <input name="end_date" class="content_item-value" type="date" placeholder="Nhập ngày kết thúc" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="number" min="1" placeholder="Nhập số lượng" required>
                </div>
                <div id="selectError" class="toast">Vui lòng chọn một giá trị!</div>
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
        <input hidden id="success" type="checkbox" <?= $check_success ?>>
        <div class="success">
            <div class="success-box">
                <div class="success-title">Thêm thành công</div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=admin&act=voucher-add" class="success-next">ok</a>
            </div>
        </div>
    </section>
</main>
<script>
    document.getElementById('myForm').onsubmit = function(e) {
    var startDate = document.getElementsByName('start_date')[0].value;
    var endDate = document.getElementsByName('end_date')[0].value;
    var user_id = document.getElementsByName('user_id')[0].value;
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
        if (user_id === "") {
        document.getElementById('selectError').style.display = 'block';
        e.preventDefault();}
        else {
        document.getElementById('selectError').style.display = 'none';
    }
    if (startDate < today) {
        document.getElementById('select2Error').style.display = 'block';
        e.preventDefault();
    }else {
        document.getElementById('select2Error').style.display = 'none';
    }
    if (startDate > endDate) {
        document.getElementById('select1Error').style.display = 'block';
        e.preventDefault();
    }else {
        document.getElementById('select1Error').style.display = 'none';
    }
};
</script>