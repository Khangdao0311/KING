<?php include_once 'header.php' ?>
<?php
$html_category_management="";
foreach($category_management as $item){
    $html_category_management.='<div class="list-row category-grid ">
    <div class="list-item flex-center">'.$item['id'].'</div>
    <div class="list-item">'.$item['name'].'</div>
    <div class="list-item flex-center"><img src="view/'.$item['image'].'" class="list_item-img"></div>
    <div class="list-item"></div>
    <div class="list-item flex-center">'.$item['creation_date'].'</div>
    <div class="list-item flex-center">'.$item['updation_date'].'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=category-edit&id='.$item['id'].'" class="function-edit">Sửa</a>
        <a href="?mod=admin&act=category-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
} 
?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý danh mục</div>
                <a href="?mod=admin&act=category-add" class="title-add">Thêm danh mục</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title category-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Tên danh mục</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item">Mô tả</div>
                    <div class="list-item flex-center">Ngày thêm</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <?=$html_category_management; ?>

            </div>
            <div class="product-page">
                    <?=$html_number_page;?>
                    </div>
        </div>
    </section>  
</main>