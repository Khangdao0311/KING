<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../product.php';
    require_once '../user.php';
    require_once '../comment.php';

    $id = $_POST['id'];
    comment_delete($_POST['id']);
    $comments = comment_SELECT($_SESSION['user']['id'],0);

    $html_comment = '';
    foreach ($comments as $item) {
        $comment_user = user_ONE($item['user_id']); 
        $star5 = ($item['rating'] > 4) ? "star-active" : "";
        $star4 = ($item['rating'] > 3) ? "star-active" : "";
        $star3 = ($item['rating'] > 2) ? "star-active" : "";
        $star2 = ($item['rating'] > 1) ? "star-active" : "";
        $html_comment .= '
            <div class="account_comment-item">
                <div class="account_comment_item-content">
                    <a class="account_comment_item-img" href="?mod=page&act=product-detail&id='.product_ONE($item['product_id'])['id'].'"><img src="view/'.product_ONE($item['product_id'])['image'].'" alt=""></a>
                    <div class="account_comment_item-box">
                        <a href="?mod=page&act=product-detail&id='.product_ONE($item['product_id'])['id'].'" class="account_comment_item-name">'.product_ONE($item['product_id'])['name'].'</a>
                        <div class="account_comment_item-rating">
                            <span class="material-symbols-outlined star-active">star</span>
                            <span class="material-symbols-outlined '.$star2.'">star</span>
                            <span class="material-symbols-outlined '.$star3.'">star</span>
                            <span class="material-symbols-outlined '.$star4.'">star</span>
                            <span class="material-symbols-outlined '.$star5.'">star</span>
                        </div>
                        <div class="account_comment_item-text">'.$item['content'].'</div>
                    </div>
                </div>
                <div class="account_comment_item-fun">
                    <input name="id" hidden type="text" value="'.$item['id'].'">
                    <!-- <div class="account_comment_item_fun-edit">Chỉnh sửa</div> -->
                    <input hidden type="text" value="'.$item['id'].'">
                    <div onclick="delete_comment(this)" class="account_comment_item_fun-delete">Xóa</div>
                </div>
            </div>
        ';
    }
    echo $html_comment;

?>
