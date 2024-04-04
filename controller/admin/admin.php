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
                if(isset($_POST['btn_addcategory']) && ($_POST['btn_addcategory'])){
                    $name = $_POST['name'];
                    $describle = $_POST['describle'];
                    category_add($name,"images/".$_FILES['image']['name'],$describle);
                    move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                }
                include_once 'view/admin/category-add.php';
                break;
            case 'category-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit = category_ONE($id);
                }
                if(isset($_POST['btn_editcategory']) && ($_POST['btn_editcategory'])){
                    $name = $_POST['name'];
                    $describle = $_POST['describle'];
                    $id = $_POST['id'];
                    $show_edit = category_ONE($id);
                    if($_FILES['image']['name'] == null){
                        category_edit($name,$show_edit['image'],$describle,$id);
                        category_updation_date($id);
                        header('location: ?mod=admin&act=category-list');
                    }else{
                        category_edit($name,"images/".$_FILES['image']['name'],$describle,$id);
                        move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                        category_updation_date($id);
                        header('location: ?mod=admin&act=category-list');
                    }
                }
                include_once 'view/admin/category-edit.php';
                break;
            case 'category-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                category_detele($id);
                header('location: ?mod=admin&act=category-list');
            case 'product-list':
                $html_number_page = phan_trang($page,$search,$data = product_SELECT(0,0,0,0,$search,0,0,0,0),$_GET['mod'],$_GET['act']);
                $product_management = product_SELECT(0,$page,0,0,$search,0,0,0,SLSP);
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
                $data_category = category_ALL();
                $data_author = author_ALL();
                $data_publisher = publisher_ALL();
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
                if(isset($_POST['btn_adduser']) && ($_POST['btn_adduser'])){
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    user_add_admin($name,"images/".$_FILES['image']['name'],$username,$password,$role,$email,$phone,$address);
                    move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                }
                include_once 'view/admin/user-add.php';
                break;
            case 'user-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit= user_ONE($id);
                }
                if(isset($_POST['btn_edituser']) && $_POST['btn_edituser']){
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $id = $_POST['id'];
                    $show_edit = user_ONE($id);
                    if($_FILES['image']['name'] == null){
                        user_edit($name,$show_edit['image'],$username,$password,$role,$email,$phone,$address,$id);
                        header('location: ?mod=admin&act=user-list');
                    }else{
                        user_edit($name,"images/".$_FILES['image']['name'],$username,$password,$role,$email,$phone,$address,$id);
                        move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                        header('location: ?mod=admin&act=user-list');
                    }
                }
                include_once 'view/admin/user-edit.php';
                break;
            case 'user-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    user_delete($id);
                }
                header('location: ?mod=admin&act=user-list');
                include_once 'view/admin/user-delete.php';
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
                if(isset($_POST['btn_addauthor']) && ($_POST['btn_addauthor'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $dob = $_POST['dob'];
                    $information = $_POST['information'];
                author_add($name,$email,$dob,$information);
                }
                include_once 'view/admin/author-add.php';
                break;
            case 'author-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                author_delete($id);
                header('location: ?mod=admin&act=author-list');
                include_once 'view/admin/author-delete.php';
                break;
            case 'author-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit=author_ONE($id);
                }
                if(isset($_POST['btn_editauthor']) && ($_POST['btn_editauthor'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $dob = $_POST['dob'];
                    $information = $_POST['information'];
                    $id = $_POST['id'];
                    $show_edit=author_ONE($id);
                author_edit($name,$email,$dob,$information,$id);
                header('location: ?mod=admin&act=author-list');
                }
                include_once 'view/admin/author-edit.php';
                break;
            case 'publisher-list':         
                $html_number_page = phan_trang($page,$search,publisher_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $publisher_management = publisher_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/publisher-list.php';
                break;
            case 'publisher-add':
                if(isset($_POST['btn_addpublisher']) && ($_POST['btn_addpublisher'])){
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $information = $_POST['information'];
                publisher_add($name,"images/".$_FILES['image']['name'],$address,$email,$information);
                move_uploaded_file($_FILES['image']['tmp_name'],'view/images/'.$_FILES['image']['name']);
                }
                include_once 'view/admin/publisher-add.php';
                break;
            case 'publisher-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit = publisher_ONE($id);
                }
                if(isset($_POST['btn_editpublisher']) && ($_POST['btn_editpublisher'])){
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $information = $_POST['information'];
                    $id = $_POST['id'];
                    $show_edit = publisher_ONE($id);
                    if($_FILES['image']['name'] == null){
                        publisher_edit($name,$show_edit['image'],$address,$email,$information,$id);
                        header('Location: ?mod=admin&act=publisher-list');
                    }else{
                    publisher_edit($name,"images/".$_FILES['image']['name'],$address,$email,$information,$id);
                    move_uploaded_file($_FILES['image']['tmp_name'],'views/images/'.$_FILES['image']['name']);
                    header('Location: ?mod=admin&act=publisher-list');
                    }
                }
                include_once 'view/admin/publisher-edit.php';
                break;
            case 'publisher-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    publisher_delete($id);
                }
                header('location: ?mod=admin&act=publisher-list');
                include_once 'view/admin/publisher-delete.php';
                break;
            case 'comment-list':
                include_once 'view/admin/comment-list.php';
                break;
            case 'comment-edit':
                include_once 'view/admin/comment-edit.php';
                break;
            case 'voucher-list':
                $html_number_page = phan_trang($page,$search,voucher_SELECT(0,0,0,$search,0,0),$_GET['mod'],$_GET['act']);
                $voucher_management = voucher_SELECT($page,0,0,$search,0,SLSP);
                include_once 'view/admin/voucher-list.php';
                break;
            case 'voucher-add':
                if(isset($_POST['btn_addvoucher']) && ($_POST['btn_addvoucher'])){
                    $code = $_POST['code'];
                    $price = $_POST['price'];
                    $start_date = $_POST['start_date'];
                    $end_date = $_POST['end_date'];
                    $quantity = $_POST['quantity'];
                    $user_id = $_POST['user_id'];
                voucher_add($code,$price,$start_date,$end_date,$quantity,$user_id);
                }
                $data_user_id = user_ALL();
                include_once 'view/admin/voucher-add.php';
                break;
            case 'voucher-delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    voucher_delete($id);
                }
                header('Location: ?mod=admin&act=voucher-list');
                include_once 'view/admin/voucher-delete.php';
                break;
            case 'voucher-edit':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $show_edit = voucher_ONE($id);
                }
                if(isset($_POST['btn_editvoucher']) && ($_POST['btn_editvoucher'])){
                    $code = $_POST['code'];
                    $price = $_POST['price'];
                    $start_date = $_POST['start_date'];
                    $end_date = $_POST['end_date'];
                    $quantity = $_POST['quantity'];
                    $user_id = $_POST['user_id'];
                    $id = $_POST['id'];
                    $show_edit = voucher_ONE($id);
                    voucher_eidt($code,$price,$start_date,$end_date,$quantity,$user_id,$id);
                    header('Location: ?mod=admin&act=voucher-list');
                }
                $data_user_id = user_ALL();
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