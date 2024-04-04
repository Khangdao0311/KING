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
<title>Thêm sản phẩm</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=product-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý sản phẩm</div>
                </div>
                <div class="title-function">Thêm</div>
                <img src="view/images/logo.png" class="title-img-fix"></img>
            </div>
            <form class="content" action="?mod=admin&act=product-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên sản phẩm</div>
                    <input name="name" class="content_item-value" type="text" placeholder="nhập Tên sản phẩm">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá</div>
                    <input name="price" class="content_item-value" type="number" min="1" placeholder="nhập giá">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá khuyến mãi</div>
                    <input name="price_sale" class="content_item-value" type="number" placeholder="nhập giá khuyến mãi">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="number" placeholder="nhập số lượng">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" placeholder="nhập mô tả">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Nổi bật</div>
                    <select class="fix" name="noibat" id="">
                        <option hidden value=""></option>
                        <option value="0"> Không nổi bật</option>
                        <option value="1"> Nổi bật </option>
                    </select>
                    <!-- <input name="noibat" class="content_item-value" type="number" placeholder="nhập mã nổi bật"> -->
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã danh mục</div>
                    <select class="fix" name="category_id" id="">
                        <option hidden value=""></option>
                        <?=$html_show_category;?> 
                    </select>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã tác giả</div>
                <select class="fix" name="author_id" id="">
                    <option hidden value=""></option>
                        <?=$html_show_author;?>
                </select>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mã nhà sản xuất</div>
                <select class="fix" name="publisher_id" id="">
                    <option hidden value=""></option>
                        <?=$html_show_publisher;?>
                </select>
                </div>     
                <div class="content-item">
                    <div class="content_item-key">Hình ảnh</div>
                    <input name="image" class="content_item-value" type="file">
                </div>   
                <input type="submit" class="content-submit" name="btn_addproduct" value="Thêm">
            </form>
        </div>
    </section>
</main>