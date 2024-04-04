<?php include_once 'header.php' ?>
<?php
$html_product_management="";
foreach($product_management as $item){
    $html_product_management.='<div class="list-row product-grid ">
    <div class="list-item flex-center">'.$item['id'].'</div>
    <div class="list-item_fix">'.$item['name'].'</div>
    <div class="list-item flex-center"><img src="view/'.$item['image'].'" class="list_item-img"></img></div>
    <div class="list-item flex-center flex-column">
        <div class="list_item-price_sale">'.$item['price_sale'].' đ</div>
        <del class="list_item-price">'.$item['price'].' đ</del>
    </div>
    <div class="list-item flex-center">'.$item['quantity'].'</div>
    <div class="list-item flex-center">'.$item['view'].'</div>
    <div class="list-item flex-center">'.$item['creation_date'].'</div>
    <div class="list-item flex-center">'.$item['updation_date'].'</div>
    <div class="list-item flex-center">'.$item['category_id'].'</div>
    <div class="list-item flex-center">'.$item['author_id'].'</div>
    <div class="list-item flex-center">'.$item['publisher_id'].'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=product-edit&id='.$item['id'].'" class="function-edit">Sửa</a>
        <a href="?mod=admin&act=product-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
}
?> 
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý sản phẩm</div>
                <a href="?mod=admin&act=product-add" class="title-add">Thêm sản phẩm</a>
            </div>
            <div class="list">
                <div class="list-row list-row_title product-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Tên sản phẩm</div>
                    <div class="list-item flex-center">Hình ảnh</div>
                    <div class="list-item flex-center">Giá</div>
                    <div class="list-item flex-center">Số lượng</div>
                    <div class="list-item flex-center">Lượt xem</div>
                    <div class="list-item flex-center">Ngày thêm</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Mã danh mục</div>
                    <div class="list-item flex-center">Mã tác giả</div>
                    <div class="list-item flex-center">Mã nhà sản xuất</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <?=$html_product_management;?>
                <div class="product-page_division">
                    <?=$html_number_page;?>
                    </div>
            </div>
        </div>
    </section>  
</main>