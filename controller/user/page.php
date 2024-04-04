<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                $product_hot = product_SELECT(0,0,true,1,"",0,0,0,4);
                $product_new = product_SELECT(0,0,0,0,"",0,0,0,4);
                $product_top_view = product_SELECT(0,0,true,0,"",0,0,0,5);
                $category_all_top_view = category_ALL();
                $publishers = publisher_SELECT(0,0,0,"",0,9);
                include_once 'view/user/home.php';
                break;
            case 'product':
                $link = '?mod=page&act=product';
                $category_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;
                $author_id = (isset($_GET['author_id'])) ? $_GET['author_id'] : 0;
                $publisher_id = (isset($_GET['publisher_id'])) ? $_GET['publisher_id'] : 0;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = (isset($_GET['limit'])) ? $_GET['limit'] : SLSP;
                $search = (isset($_GET['search'])) ? $_GET['search'] : '';
                if(isset($_POST['btn_search']) && $_POST['btn_search']){
                    $search = $_POST['search'];
                    if($search){
                        header('location: '.$link.'&search='.$search.'');
                    }else{
                        header('location: '.$link.'');
                    }
                }

                if (isset($_POST['limit']) && $_POST['limit']){
                    $search = $_POST['search'];
                    $limit = $_POST['limit'];
                    $category_id = $_POST['category_id'];
                    $author_id = $_POST['author_id'];
                    $publisher_id = $_POST['publisher_id'];
                    $link .= ($search) ? '&search='.$search : '';
                    $link .= ($category_id) ? '&category_id='.$category_id : '';
                    $link .= ($author_id) ? '&author_id='.$author_id : '';
                    $link .= ($publisher_id) ? '&publisher_id='.$publisher_id : '';
                    header('location: '.$link.'&limit='.$limit.'');
                }
            

                $category_all = category_ALL();
                $product_all = product_SELECT(0,$page,0,0,$search,$category_id,$author_id,$publisher_id,$limit);
                $author_all = Author_all();
                $publisher_all = publisher_ALL();
                $data = product_SELECT(0,0,0,0,$search,$category_id,$author_id,$publisher_id,0);
                $page_division = page_division($data,$search,$category_id,$author_id,$publisher_id,$limit);
                include_once 'view/user/product.php';
                break; 
            case 'product-detail':
                if(isset($_GET['id']) &&$_GET ['id']>0){
                    $product_detail = product_ONE($_GET['id']);
                    $author = author_ONE($product_detail['author_id']);
                    $publisher = publisher_ONE($product_detail['publisher_id']);
                    $gallery = gallery_ALL($product_detail['id']);
                    $product_detail_same = product_SELECT(0,0,true,0,"",$product_detail['category_id'],0,0,4);
                    update_view($_GET['id']); 
                }
                include_once 'view/user/product-detail.php';
                break;
            case 'about':
                include_once 'view/user/about.php';
                break;
            case 'contact':
                $check_success = '';
                if (isset($_POST['btn_contact']) && $_POST['btn_contact']) {
                    $content = '
                        Họ và Tên: <b>'.$_POST['name'].'</b> <br>
                        Email: <b>'.$_POST['email'].'</b> <br>
                        '.$_POST['content'].'
                    ';
                    mailer('Khangdao0311@gmail.com',$_POST['title'],$content);
                    $check_success = 'checked';
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