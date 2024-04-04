<?php include_once 'header.php' ?>
<?php
$html_show_user='';
 if($show_edit['role'] == '1'){
    $html_show_user.='<option hidden value="1">Admin</option>';
 }else{
    $html_show_user.='<option hidden value="2">Khách hàng</option>';
 }
?>
<title>Sửa khách hàng</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=user-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý khách hàng</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="?mod=admin&act=user-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên khách hàng</div>
                    <input name="name" class="content_item-value" type="text" value="<?=$show_edit['name'];?>">
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Tên user</div>
                    <input name="username" class="content_item-value" type="text" value="<?=$show_edit['username'];?>">
                </div> 
                <div class="content-item">
                    <div class="content_item-key">Mật khẩu</div>
                    <input name="password" class="content_item-value" type="text" value="<?=$show_edit['password'];?>">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Vai trò</div>
                    <select class="fix" name="role" id="">
                        <?=$html_show_user;?>
                        <option value="1">Admin</option>
                        <option value="0">Khách hàng</option>
                    </select>
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Email</div>
                    <input name="email" class="content_item-value" type="email" value="<?=$show_edit['email'];?>">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Số điện thoại</div>
                    <input name="phone" class="content_item-value" type="number"  value="<?=$show_edit['phone'];?>">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Địa chỉ</div>
                    <input name="address" class="content_item-value" type="text" value="<?=$show_edit['address'];?>">
                </div>  
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>   
                <input name="btn_edituser" type="submit" class="content-submit" value="Chỉnh sửa">
                <input type="hidden" name="id" value="<?=$id;?>">
            </form>
        </div>
    </section>
</main>