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
                $link = '?mod=page&act=product';
                $search = "";
                if(isset($_POST['btn_search']) && $_POST['btn_search']){
                    $search = $_POST['search'];
                }

                $category_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = (isset($_GET['limit'])) ? $_GET['limit'] : SLSP;
                if (isset($_POST['limit']) && $_POST['limit']){
                    $limit = $_POST['limit'];
                    $category_id = isset($_POST['category_id']) ?  $_POST['category_id'] : 0;
                    $link .= ($category_id) ? '&category_id='.$category_id : '';
                    header('location: '.$link.'&limit='.$limit.'');
                }
            

                $category_all = category_ALL();
                $product_all = product_SELECT($page,0,0,$search,$category_id,$limit);
                $author_all = Author_all();
                $publisher_all = publisher_ALL();
                $data = product_SELECT(0,0,0,$search,$category_id,0);
                $page_division = page_division($data,$search,$category_id,$limit);
                include_once 'view/user/product.php';
                break; 
            case 'product-detail':
                if(isset($_GET['id']) &&$_GET ['id']>0){
                    $product_detail = product_ONE($_GET['id']);
                    $author = author_ONE($product_detail['author_id']);
                    $publisher = publisher_ONE($product_detail['publisher_id']);
                    $gallery = gallery_ALL($product_detail['id']);
                    $product_detail_same = product_SELECT(0,true,0,"",$product_detail['category_id'],0,0,4);
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