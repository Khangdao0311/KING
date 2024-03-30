<?php include_once 'header.php' ?>
<link rel="stylesheet" href="view/admin/css/list.css">
<?php
$html_publisher_management="";
foreach ($publisher_management as $item){
    $html_publisher_management.='<div class="list-row publisher-grid ">
    <div class="list-item flex-center">'.$item['id'].'</div>
    <div class="list-item">'.$item['name'].'</div>
    <div class="list-item flex-center"><img src="view/'.$item['image'].'" class="list_item-img"></img></div>
    <div class="list-item">'.$item['address'].'</div>
    <div class="list-item">aaaaaaa@gmail.com</div>
    <div class="list-item">aaaaaxxxaaaaaaaa dd</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=publisher-edit&id=" class="function-edit">Sửa</a>
        <div class="function-delete">Xóa</div>
    </div>
</div>';
}
?>
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý nhà phát hành</div>
                <a href="?mod=admin&act=publisher-add" class="title-add">Thêm nhà phát hành</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title publisher-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Tên nhà phát hành</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item">Địa chỉ</div>
                    <div class="list-item">Email</div>
                    <div class="list-item">Thông Tin</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <?=$html_publisher_management;?>

            </div>
        </div>
    </section>  
</main>