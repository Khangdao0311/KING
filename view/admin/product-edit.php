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
                <div class="title-function">Chỉnh Sửa <?=$show_edit['name'];?></div>
                <img id="imagechange" src="view/<?=$show_edit['image'];?>" class="title-img"></img>
            </div>
            <form class="content" action="?mod=admin&act=product-edit" method="post" enctype="multipart/form-data">
                <div class="content-item">
                <div class="content_item-key">Tên sản phẩm</div>
                    <input name="name" class="content_item-value" type="text" value="<?=$show_edit['name'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá</div>
                    <input name="price" class="content_item-value" type="text" min="1" value="<?=number_format($show_edit['price'],0,',','.');?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá khuyến mãi</div>
                    <input name="price_sale" class="content_item-value" type="text" min="1" value="<?=number_format($show_edit['price_sale'],0,',','.');?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="text" min="1" value="<?=$show_edit['quantity'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" value="<?=$show_edit['describle'];?>">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Nổi bật</div>
                    <div class="radio">
                          <input type="radio" name="noibat" value="0" <?php if($show_edit['noibat'] == 0 ) echo 'checked' ?>>
                          <div style="font-size: 1.6rem;">khách hàng</div>
                      </div>
                    <div class="radio">
                        <input type="radio" name="noibat" value="1" <?php if($show_edit['noibat'] == 1 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">admin</span>
                    </div>
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
                    <input  hidden name="image" id="inputfile" class="content_item-value" type="file">
                    <label class="file" for="inputfile">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#fffffff" stroke-width="2"></path>
                <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                ADD FILE 
            </label>
                </div>     
                <input type="submit" name="btn_edit" class="content-submit" value="Chỉnh sửa">
                <input type="hidden" name="id" value="<?= $id ?>">
            </form>
        </div>
    </section>
</main>
<script>
    const inputflie = document.getElementById('inputfile');
const image = document.getElementById('imagechange');
inputflie.addEventListener('change', (el) => {
    image.src = URL.createObjectURL(el.target.files[0]);
});
</script>