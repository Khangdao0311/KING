<?php include_once 'header.php' ?>
<?php
$page = (isset($_GET['trang'])) ? $_GET['trang'] : 1;
$countSTT = (($page - 1) * 9) + 1;
$html_comment_management="";
foreach ($comment_management as $item){
    $html_comment_management.='<div class="list-row comment-grid ">
    <div class="list-item flex-center">'.$countSTT++.'</div>
    <div class="list-item">'.$item['content'].'</div>
    <div class="list-item flex-center">'.$item['rating'].' sao</div>
    <div class="list-item flex-center">'.$item['creation_date'].'</div>
    <div class="list-item flex-center">'.$item['updation_date'].'</div>
    <div class="list-item flex-center">'.$item['user_id'].'</div>
    <div class="list-item flex-center">'.$item['product_id'].'</div>
    <div class="list-item flex-center">
        <a href="?mod=admin&act=comment-delete&id='.$item['id'].'" class="function-delete">Xóa</a>
    </div>
</div>';
}
?>
<link rel="stylesheet" href="view/admin/css/list.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-content">Quản lý bình luận</div>
            </div>
            <div class="list">
                <div class="list-row list-row_title comment-grid ">
                    <div class="list-item flex-center">STT</div>
                    <div class="list-item">Nội dung</div>
                    <div class="list-item flex-center">Đánh giá</div>
                    <div class="list-item flex-center">Ngày Tạo</div>
                    <div class="list-item flex-center">Ngày cập nhật</div>
                    <div class="list-item flex-center">Mã người dùng</div>
                    <div class="list-item flex-center">Mã sản phẩm</div>
                    <div class="list-item flex-center">Chức năng</div>
                </div>

                <?=$html_comment_management;?>
                <div class="product-page">
                    <?=$html_number_page;?>
                    </div>
            </div>
        </div>
    </section>  
</main>