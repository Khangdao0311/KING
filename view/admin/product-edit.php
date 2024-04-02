<?php include_once 'header.php' ?>
<?php
$html_show_category="";
foreach($data_category as $item){
    $html_show_category.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
}
$html_show_author="";
foreach($data_author as $item){
    $html_show_author.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
}
$html_show_publisher="";
foreach($data_publisher as $item){
    $html_show_publisher.='<option value="'.$item['id'].'">'.$item['name'].'</option>';
}
?>
<title>Sửa sản phẩm</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=product-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý sản phẩm</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <img src="view/<?=$show_edit['image'];?>" class="title-img"></img>
            </div>
            <form class="content" action="?mod=admin&act=product-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                <div class="content_item-key">Tên sản phẩm</div>
                    <input name="name" class="content_item-value" type="text" value="<?=$show_edit['name'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá</div>
                    <input name="price" class="content_item-value" type="text" value="<?=$show_edit['price'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá khuyến mãi</div>
                    <input name="price_sale" class="content_item-value" type="text" value="<?=$show_edit['price_sale'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="text" value="<?=$show_edit['quantity'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" value="<?=$show_edit['describle'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Nổi bật</div>
                    <input name="noibat" class="content_item-value" type="text" value="<?=$show_edit['noibat'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã danh mục</div>
                    <select class="fix" name="category_id" id="">
                    <option hidden value="<?= $show_edit['category_id'] ?>"><?= category_ONE($show_edit['category_id'])['name']?></option>
                        <?=$html_show_category;?> 
                    </select>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã tác giả</div>
                <select class="fix" name="author_id" id="">
                <option hidden value="<?= $show_edit['author_id'] ?>"><?= author_ONE($show_edit['author_id'])['name']?></option>
                        <?=$html_show_author;?>
                </select>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã nhà sản xuất</div>
                <select class="fix" name="publisher_id" id="">
                <option hidden value="<?= $show_edit['publisher_id'] ?>"><?= publisher_ONE($show_edit['publisher_id'])['name']?></option>
                        <?=$html_show_publisher;?>
                </select>
                </div>   
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>     
                <input type="submit" name="btn_edit" class="content-submit" value="Chỉnh sửa">
                <input type="hidden" name="id" value="<?= $id ?>">
            </form>
        </div>
    </section>
</main>