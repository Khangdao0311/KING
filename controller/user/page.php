<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                $product_hot = product_SELECT(0,true,1,"",0,4);
                $product_top_view = product_SELECT(0,true,0,"",0,5);
                $category_all_top_view = category_ALL();
                include_once 'view/user/home.php';
                break;
            case 'product':
                include_once 'view/user/product.php';
                break;
            case 'product-detail':
                if(isset($_GET['id'])&&$_GET['id']>0){
                    $product_detail = product_ONE($_GET['id']);
                    $author = author_ONE($product_detail['author_id']);
                    $publisher = publisher_ONE($product_detail['publisher_id']);
                    $gallery = gallery_ALL($product_detail['id']);
                    $product_detail_same = product_SELECT(0,true,0,"",$product_detail['category_id'],4);
                }
                include_once 'view/user/product-detail.php';
                break;
            case 'about':
                include_once 'view/user/about.php';
                break;
            case 'contact':
                include_once 'view/user/contact.php';
                break;
            default:
                header('location: ?mod=page&act=home');
                break;
        }
    } else {
       header('location: ?mod=page&act=home');
    }
    
?>