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
                $checked = '';
                if (isset($_POST['btn_contact']) && $_POST['btn_contact']) {
                    $content = '
                        Họ và Tên: <b>'.$_POST['name'].'</b> <br>
                        Email: <b>'.$_POST['email'].'</b> <br>
                        '.$_POST['content'].'
                    ';
                    mailer('Khangdao0311@gmail.com',$_POST['title'],$content);
                    $checked = 'checked';
                }
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