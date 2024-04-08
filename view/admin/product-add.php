<?php include_once 'header.php' ?>
<style>
</style>
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
                <img id="imagechange" src="view/images/logo.png" class="title-img"></img>
            </div>
            <form id="myForm" class="content" action="?mod=admin&act=product-add" method="post" enctype="multipart/form-data">
                <div class="content-item">
                    <div class="content_item-key">Tên sản phẩm</div>
                    <input name="name" class="content_item-value" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá</div>
                    <input name="price" class="content_item-value" type="number" min="1" placeholder="Nhập giá" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Giá khuyến mãi</div>
                    <input name="price_sale" class="content_item-value" type="number" min="1" placeholder="Nhập giá khuyến mãi">
                </div>
                <div class="content-item">
                    <div class="content_item-key">Số lượng</div>
                    <input name="quantity" class="content_item-value" type="number" min="1" placeholder="Nhập số lượng" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Mô tả</div>
                    <input name="describle" class="content_item-value" type="text" placeholder="Nhập mô tả" required>
                </div>
                <div class="content-item">
                    <div class="content_item-key">Nổi bật</div>
                    <div class="radio">
                        <input type="radio" name="noibat" value="0" checked>
                        <div style="font-size: 1.6rem;">không nổi bật</div>
                    </div>
                    <div class="radio">
                        <input type="radio" name="noibat" value="1">
                        <span style="font-size: 1.6rem;">Nổi bật</span>
                    </div>
                </div>
                <div id="select2Error" class="toast">Vui lòng chọn một giá trị!</div>
                <div class="content-item">
                    <div class="content_item-key">Mã danh mục</div>
                    <select class="fix" name="category_id" id="">
                        <option hidden value=""></option>
                        <?=$html_show_category;?> 
                    </select>
                </div>
                <div id="select3Error" class="toast">Vui lòng chọn một giá trị!</div>
                <div class="content-item">
                    <div class="content_item-key">Mã tác giả</div>
                <select class="fix" name="author_id" id="">
                    <option hidden value=""></option>
                        <?=$html_show_author;?>
                </select>
                </div>
                <div id="select4Error" class="toast">Vui lòng chọn một giá trị!</div>
                <div class="content-item">
                    <div class="content_item-key">Mã nhà sản xuất</div>
                <select class="fix" name="publisher_id" id="">
                    <option hidden value=""></option>
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
                <input type="submit" class="content-submit" name="btn_addproduct" value="Thêm">
            </form>
        </div>
        <input hidden id="success" type="checkbox" <?= $check_success ?>>
        <div class="success">
            <div class="success-box">
                <div class="success-title">Thêm thành công</div>
                <div class="success-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <a href="?mod=admin&act=product-add" class="success-next">ok</a>
            </div>
        </div>
    </section>
</main>
<script>
document.getElementById('myForm').onsubmit = function(e) {
    var categorySelect = document.getElementsByName('category_id')[0].value;
    var authorSelect = document.getElementsByName('author_id')[0].value;
    var publisherSelect = document.getElementsByName('publisher_id')[0].value;
        if (categorySelect === "") {
        document.getElementById('select2Error').style.display = 'block';
        e.preventDefault();}
        else {
        document.getElementById('select2Error').style.display = 'none';
    }
    if (authorSelect === "") {
        document.getElementById('select3Error').style.display = 'block';
        e.preventDefault();}
        else {
        document.getElementById('select3Error').style.display = 'none';
    }
    if (publisherSelect == ""){
        document.getElementById('select4Error').style.display = 'block';
        e.preventDefault();
    } 
    else {
        document.getElementById('select4Error').style.display = 'none';
    }


};

const inputflie = document.getElementById('inputfile');
const image = document.getElementById('imagechange');
inputflie.addEventListener('change', (el) => {
    image.src = URL.createObjectURL(el.target.files[0]);
});
</script>