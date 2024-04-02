<?php
    if (isset($_GET['act'])) {
        if(isset($_GET['trang']) && ($_GET['trang']>0)) {
            $page=$_GET['trang'];
        }else{
            $page=1;
            }

    $search = (isset($_GET['search'])) ? $_GET['search'] : '' ;
    if(isset($_POST['btn_search']) && ($_POST['btn_search'])){
        header('location: ?mod='.($_GET['mod']).'&act='.($_GET['act']).'&search='.$_POST['search']);                    
    }

        switch ($_GET['act']) {
            case 'category-list':        
                $html_number_page = phan_trang($page,$search,category_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $category_management = category_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/category-list.php';
                break;
            case 'category-add':
                include_once 'view/admin/category-add.php';
                break;
            case 'category-edit':
                include_once 'view/admin/category-edit.php';
                break;
            case 'product-list':
                $html_number_page = phan_trang($page,$search,$data = product_SELECT(0,0,0,$search,0,0,0,0),$_GET['mod'],$_GET['act']);
                $product_management = product_SELECT($page,0,0,$search,0,0,0,SLSP);
                include_once 'view/admin/product-list.php';
                break;
            case 'product-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                product_detele($id);
                header('location: ?mod=admin&act=product-list');
            case 'product-add':
                if(isset($_POST['btn_addproduct']) && ($_POST['btn_addproduct'])){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $quantity = $_POST['quantity'];
                    $describle = $_POST['describle'];
                    $noibat = $_POST['noibat'];
                    $category_id = $_POST['category_id'];
                    $author_id = $_POST['author_id'];
                    $publisher_id = $_POST['publisher_id'];
                    product_add($name,"images/".$_FILES['image']['name'],$price,$price_sale,$quantity,$describle,$noibat,$category_id,$author_id,$publisher_id);
                    move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                    // header('location: ?mod=admin&act=product-list');  
                }
                include_once 'view/admin/product-add.php';
                break;
            case 'product-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit = product_ONE($id);
                }
                if(isset($_POST['btn_edit']) && ($_POST['btn_edit'])){  
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $quantity = $_POST['quantity'];
                    $describle = $_POST['describle'];
                    $noibat = $_POST['noibat'];
                    $category_id = $_POST['category_id'];
                    $author_id = $_POST['author_id'];
                    $publisher_id = $_POST['publisher_id'];
                    $id = $_POST['id'];
                    $show_edit = product_ONE($id);
                    if($_FILES['image']['name'] == null){
                        product_edit($name,$show_edit['image'],$price,$price_sale,$quantity,$describle,$noibat,$category_id,$author_id,$publisher_id,$id);
                        product_updation_date($id);
                        header('location: ?mod=admin&act=product-list');
                    }else{
                        product_edit($name,"images/".$_FILES['image']['name'],$price,$price_sale,$quantity,$describle,$noibat,$category_id,$author_id,$publisher_id,$id);
                        move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                        product_updation_date($id);
                        header('location: ?mod=admin&act=product-list');
                    }
                }   
                $data_category = category_ALL();
                $data_author = author_ALL();
                $data_publisher = publisher_ALL();
                include_once 'view/admin/product-edit.php';
                break;
            // case 'product_edit':
            //     if(isset($_POST['btn_edit']) && ($_POST['btn_edit'])){  
            //         $name = $_POST['name'];
            //         $price = $_POST['price'];
            //         $price_sale = $_POST['price_sale'];
            //         $quantity = $_POST['quantity'];
            //         $describle = $_POST['describle'];
            //         $noibat = $_POST['noibat'];
            //         $category_id = $_POST['category_id'];
            //         $author_id = $_POST['author_id'];
            //         $publisher_id = $_POST['publisher_id'];
            //         $id = $_POST['id'];
            //         $show_edit = product_ONE($id);
            //         if($_FILES['image']['name'] == null){
            //             product_edit($name,$show_edit['image'],$price,$price_sale,$quantity,$describle,$noibat,$category_id,$author_id,$publisher_id,$id);
            //             header('location: ?mod=admin&act=product-list');
            //         }else{
            //             product_edit($name,"images/".$_FILES['image']['name'],$price,$price_sale,$quantity,$describle,$noibat,$category_id,$author_id,$publisher_id,$id);
            //             move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
            //         }
            //     }               
            //     break;
            case 'user-list':
                $html_number_page = phan_trang($page,$search,user_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $user_management = user_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/user-list.php';
                break;
            case 'user-add':
                include_once 'view/admin/user-add.php';
                break;
            case 'user-edit':
                include_once 'view/admin/user-edit.php';
                break;
            case 'order-list':
                include_once 'view/admin/order-list.php';
                break;
            case 'order-edit':
                include_once 'view/admin/order-edit.php';
                break;
            case 'author-list':        
                $html_number_page = phan_trang($page,$search,author_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $author_management = author_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/author-list.php';
                break;
            case 'author-add':
                include_once 'view/admin/author-add.php';
                break;
            case 'author-edit':
                include_once 'view/admin/author-edit.php';
                break;
            case 'publisher-list':         
                $html_number_page = phan_trang($page,$search,publisher_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $publisher_management = publisher_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/publisher-list.php';
                break;
            case 'publisher-add':
                include_once 'view/admin/publisher-add.php';
                break;
            case 'publisher-edit':
                include_once 'view/admin/publisher-edit.php';
                break;
            case 'comment-list':
                include_once 'view/admin/comment-list.php';
                break;
            case 'comment-edit':
                include_once 'view/admin/comment-edit.php';
                break;
            case 'voucher-list':
                include_once 'view/admin/voucher-list.php';
                break;
            case 'voucher-add':
                include_once 'view/admin/voucher-add.php';
                break;
            case 'voucher-edit':
                include_once 'view/admin/voucher-edit.php';
                break;
            case 'statistical':
                # code...
                break;
            
            default:
                header('location: ?mod=admin&act=category-list');
                break;
        }
    } else {
        header('location: ?mod=admin&act=category-list');
    }
?>