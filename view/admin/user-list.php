<?php include_once 'header.php' ?>
<?php
$html_user_management= "";
foreach ($user_management as $item){
    if ($item['role'] == 1){
        $vaitro = 'admin';
    }else{
        $vaitro = 'khach hang';
    }
    $html_user_management.='<div class="list-row user-grid ">
    <div class="list-item flex-center">'.$item['id'].'</div>
    <div class="list-item">'.$item['name'].'</div>
    <div class="list-item flex-center"><img src="view/'.$item['image'].'" class="list_item-img"></img></div>
    <div class="list-item">'.$item['email'].'</div>
    <div class="list-item flex-center">'.$item['phone'].'</div>
    <div class="list-item flex-center">'.$vaitro.'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=user-edit&id='.$item['id'].'" class="function-edit">Sửa</a>
        <a href="?mod=admin&act=user-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
} 
?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý khách hàng</div>
                <a href="?mod=admin&act=user-add" class="title-add">Thêm khách hàng</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title user-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Họ và Tên</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item">Email</div>
                    <div class="list-item flex-center">Số điện thoại</div>
                    <div class="list-item flex-center">Vai trò</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>
                <?=$html_user_management;?>
                <div class="product-page">
                    <?=$html_number_page;?>
                    </div>
            </div>
        </div>
    </section>  
</main>