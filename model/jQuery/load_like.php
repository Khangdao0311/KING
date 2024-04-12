<?php
    session_start();
    require_once '../global.php';
    require_once '../pdo.php';
    require_once '../product.php';
    
    if (!isset($_SESSION['user'])) $_SESSION['user'] = [];
    $user_information = ($_SESSION['user']) ? $_SESSION['user']['username'] : "IPCOMPUTER" ;
    if (!isset($_SESSION['like'][$user_information])) $_SESSION['like'][$user_information] = [];
    $id = $_POST['id'];
    $status = $_POST['status'];
    $product = product_ONE($id);
    if ($status) {
        $_SESSION['like'][$user_information][$id] = $product;
    } else {
        unset($_SESSION['like'][$user_information][$id]);
        $html_product_like = '';
        foreach ($_SESSION['like'][$user_information] as $item) {
            $html_product_like .= '
                <div class="account_product_like-item">
                    <div class="account_product_like_item-img">
                        <img src="view/'.$item['image'].'" alt="">
                    </div>
                    <div class="account_product_like_item-content">
                        <div class="account_product_like_item-name">'.$item['name'].'</div>
                        <div class="account_product_like_item-price_box">
                            <div class="account_product_like_item-price_sale">'.$item['price_sale'].' đ</div>
                            <del class="account_product_like_item-price">'.$item['price'].' đ</del>
                        </div>
                    </div>
                    <div class="account_product_like_item-fun">
                        <div onclick="deletelike(this)" class="account_product_like_item_fun-delete">Xóa</div>
                        <input type="text" hidden value="' . $item['id'] . '">
                    </div>
                </div>
            ';
        }
        echo $html_product_like;
    }
?>