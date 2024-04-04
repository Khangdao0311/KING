<?php
    session_start();
    require_once 'global.php';
    require_once 'pdo.php';
    require_once 'user.php';
    require_once 'comment.php';
    $id = $_POST['id'];
    $star = $_POST['star'];
    $content = $_POST['content'];
    comment_ADD($content,$star,$_SESSION['user']['id'],$id);
    $comments = comment_SELECT(0,$id);

    $html_comment = '
        <div class="productdetail_comment-title">đánh giá sản phẩm</div>
        <div class="productdetail_comment-box">
    ';
    foreach ($comments as $item) {
        $comment_user = user_ONE($item['user_id']); 
        $star5 = ($item['rating'] > 4) ? "star-active" : "";
        $star4 = ($item['rating'] > 3) ? "star-active" : "";
        $star3 = ($item['rating'] > 2) ? "star-active" : "";
        $star2 = ($item['rating'] > 1) ? "star-active" : "";

        $html_comment .= '
            <div class="productdetail_comment-item">
                <img class="productdetail_comment_item-img" src="view/images/user/'.$comment_user['image'].'" alt="">
                <div class="productdetail_comment_item-content">
                    <div class="productdetail_comment_item_content-name">'.$comment_user['name'].'</div>
                    <div class="productdetail_comment_item_content-rating">
                    <span class="material-symbols-outlined '.$star5.'">star</span>
                    <span class="material-symbols-outlined '.$star4.'">star</span>
                    <span class="material-symbols-outlined '.$star3.'">star</span>
                    <span class="material-symbols-outlined '.$star2.'">star</span>
                    <span class="material-symbols-outlined star-active">star</span>
                    </div>
                    <div class="productdetail_comment_item_content-text">'.$item['content'].'</div>
                </div>
            </div>
        ';
    }
    $html_comment .= '
        </div>
        <div class="productdetail_comment-form">
            <img src="view/images/user/'.$_SESSION['user']['image'].'" alt="" class="productdetail_comment_form-img">
            <div class="productdetail_comment_form-content">
                <div class="productdetail_comment_form-rating">
                    <input onclick="star_rating(this)" hidden id="star5" type="radio" name="star" value="5" checked >
                    <label for="star5" class="material-symbols-outlined 1 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star4" type="radio" name="star" value="4">
                    <label for="star4" class="material-symbols-outlined 2 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star3" type="radio" name="star" value="3">
                    <label for="star3" class="material-symbols-outlined 3 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star2" type="radio" name="star" value="2">
                    <label for="star2" class="material-symbols-outlined 4 star">star</label>
                    <input onclick="star_rating(this)" hidden id="star1" type="radio" name="star" value="1">
                    <label for="star1" class="material-symbols-outlined 5 star">star</label>
                </div>
                <div class="productdetail_comment_form-box">
                    <input class="productdetail_comment_form-text" type="text" placeholder="Nhập bình luận của bạn về sản phẩm..." value="">
                    <div onclick="submit_comment(this)" class="productdetail_comment_form-submit">Gửi</div>
                    <input hidden type="text" id="number_start" value="5">
                    <input hidden type="text" value="'.$id.'">
                </div>
            </div>
        </div>
    ';
    echo $html_comment;

?>