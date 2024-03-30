<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                $product_top_view = product_SELECT(0,true,0,"",0,4);
                $category_all_top_view = category_ALL();
                include_once 'view/user/home.php';
                break;
            case 'product':
                include_once 'view/user/product.php';
                break;
            case 'product-detail':
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