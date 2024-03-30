<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                $product_top_view = product_SELECT(0,true,0,"",0,4);
                $category_all_top_view = category_ALL();
                include_once 'view/user/home.php';
                break;
            case 'product':
                $category_all = category_ALL();
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }
                if(isset($_POST['limit']) && $_POST['limit']){
                    $limit = $_POST['limit'];
                }else{
                    $limit = SLSP;
                }
                $product_all = product_SELECT($page,0,0,"",0,$limit);
                $author_all = Author_all();
                $publisher_all = publisher_ALL();
                $category_id = $_GET['category_id'];
                $page_division = page_division($product_all,"",$category_id,6);
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