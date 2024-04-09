<?php include_once 'header.php' ?>
<title>Sửa đơn hàng</title>
<link rel="stylesheet" href="view/admin/css/add-edit.css">
    <section>
        <div class="container">
            <div class="title">
                <div class="title-menu">
                    <a href="?mod=admin&act=order-list" class="title_menu-icon"><span class="material-symbols-outlined">reply</span></a>
                    <div class="title_menu-content">Quản lý đơn hàng</div>
                </div>
                <div class="title-function">Chỉnh Sửa</div>
                <div class="title-img"></div>
            </div>
            <form class="content" action="?mod=admin&act=order-edit" method="post">
            <div class="content-item">
                    <div class="content_item-key">Status</div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="1" <?php if($show_edit['order_status'] == 1 ) echo 'checked' ?>>
                        <div style="font-size: 1.6rem;">Chờ xác nhận</div>
                    </div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="2" <?php if($show_edit['order_status'] == 2 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">Vận chuyển</span>
                    </div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="3" <?php if($show_edit['order_status'] == 3 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">Chờ giao hàng</span>
                    </div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="4" <?php if($show_edit['order_status'] == 4 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">Đã giao hàng</span>
                    </div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="5" <?php if($show_edit['order_status'] == 5 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">Đã hủy</span>
                    </div>
                    <div class="radio">
                        <input type="radio" name="order_status" value="6" <?php if($show_edit['order_status'] == 6 ) echo 'checked' ?>>
                        <span style="font-size: 1.6rem;">Trả hàng</span>
                    </div>
                </div> 
                <input name="btn_editorder" type="submit" class="content-submit" value="Chỉnh sửa">
                <input hidden name="id" type="text" value="<?=$id;?>">
            </form>
        </div>
    </section>
</main>