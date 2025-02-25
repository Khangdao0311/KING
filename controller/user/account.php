<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'login':
                $check_error = '';
                if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                    $account = $_POST['account'];
                    $password = $_POST['password'];
                    $users = user_ALL();
                    if (trim($account) != '' && trim($password) != '') {
                        foreach ($users as $item) {
                            if (($item['username'] === $account || $item['email'] === $account) && password_verify($password, $item['password'])) {
                                $_SESSION['user'] = user_ONE($item['id']);
                                header('location: ?mod=page&act=home');
                            }
                        }
                    }
                    $check_error = 'checked';
                }
                include_once 'view/user/login.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: ?mod=user&act=login');
                break;
            case 'register':
                $check_error = "";
                $check_success = "";
                if (isset($_POST['btn_register']) && $_POST['btn_register']) {
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $confirmpass = $_POST['confirmpass'];
                    $check = TRUE;                    
                    $users = user_ALL();
                    foreach ($users as $item) {
                        if ($item['username'] == $username || $item['email'] == $email) {
                            $check = FALSE;
                            break;
                        }
                    }
                    if ($check && $pass == $confirmpass) {
                        $pass = password_hash($pass, PASSWORD_DEFAULT);
                        user_ADD($name,$email,$username,$pass);
                        $check_success = "checked";
                    } else $check_error = "checked";
                }
                include_once 'view/user/register.php';
                break;
            case 'forgot_password-email':
                $check = '';
                if (isset($_POST['btn_forgot_password-email'])) {
                    $email = $_POST['email'];
                    $users = user_ALL();
                    foreach ($users as $item) {
                        if ($item['email'] == $email) {
                            $_SESSION['foget_password-email'][] = $item;
                            header('location: ?mod=user&act=forgot_password-OTP');
                        }
                    }
                    $check = 'checked';
                }
                include_once 'view/user/forgot_password-email.php';
                break;
            case 'forgot_password-OTP':
                if (isset($_SESSION['foget_password-email'])) {
                    $OTP = rand(11111,99999);
                    mailer($_SESSION['foget_password-email'],'FORGET PASS WORD','MÃ OTP CỦA BẠN LÀ: <b>'.$OTP.'</b>');
                } else {
                    header('location: ?mod=page&act=home');
                }
                include_once 'view/user/forgot_password-OTP.php';
                break;
            case 'forgot_password-OTP-check':
                if (isset($_SESSION['foget_password-email'])) {
                    if (isset($_POST['btn_forgot_password-OTP'])) {
                        $OTP = $_POST['OTP'];
                        (string)$number1 = $_POST['number1'];
                        (string)$number2 = $_POST['number2'];
                        (string)$number3 = $_POST['number3'];
                        (string)$number4 = $_POST['number4'];
                        (string)$number5 = $_POST['number5'];
                        $number = $number1.$number2.$number3.$number4.$number5;
                        if ($OTP == $number) {
                            header('location: ?mod=user&act=forgot_password-change');
                        } else {
                            header('location: ?mod=user&act=forgot_password-OTP');
                        }
                    }
                } else {
                    header('location: ?mod=page&act=home');
                }
                break;
            case 'forgot_password-change':
                if (isset($_SESSION['foget_password-email'])) {
                    if (isset($_POST['btn_forget_password_change'])) {
                        $new_password = $_POST['new-password'];
                        $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                        user_UPDATE($_SESSION['foget_password-email'][0]['id'],'','',$new_password,'','','');
                        user_updation_date($_SESSION['foget_password-email'][0]['id']);
                        unset($_SESSION['foget_password-email']);
                        header('location: ?mod=user&act=forgot_password-success');
                    }
                } else {
                    header('location: ?mod=page&act=home');
                }
                include_once 'view/user/forgot_password-change.php';
                break;
            case 'forgot_password-success':
                include_once 'view/user/forgot_password-success.php';
                break;
            case 'information':
                if ($_SESSION['user'] != []) {
                    $check_success  = '';
                    if (isset($_POST['btn_information'])) {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $image = $_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'],'view/images/user/'.$_FILES['image']['name']);
                        user_UPDATE($id,$name,$image,'',$email,$phone,'');
                        user_updation_date($id);
                        $_SESSION['user'] = user_ONE($id) ;
                        $check_success  = 'checked';
                    }
                    include_once 'view/user/account.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-address':
                if ($_SESSION['user'] != []) {
                    $check_success = '';
                    if (isset($_POST['btn_address'])) {
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $province = $_POST['province'];
                        $district = $_POST['district'];
                        $ward = $_POST['ward'];
                        $street = $_POST['street'];
                        $note = $_POST['note'];
                        $address = "$province@$district@$ward@$street@$note";
                        $id = $_SESSION['user']['id'];
                        user_UPDATE($_SESSION['user']['id'],$name,'','','',$phone,$address);
                        user_updation_date($id);
                        $_SESSION['user'] = user_ONE($id);
                        $check_success = 'checked';
                    }
                    $address = explode('@', $_SESSION['user']['address']);
                    include_once 'view/user/account-address.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-order_follow':
                if ($_SESSION['user'] != []) {
                    $orders = order_SELECT($_SESSION['user']['id'],0,0);
                    $order_detail = [];
                    foreach ($orders as $item) {
                        array_push($order_detail, order_detail_SELECT($item['id'],0));
                    }
                    // $products_all = [];
                    // foreach ($order_detail as $box) {
                    //     foreach ($box as $item) {
                    //         array_push($products_all, product_ONE($item['product_id']));
                    //     }
                    // }
                    include_once 'view/user/account-order_follow.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-change_password':
                $check_error = '';
                $check_success = '';
                if ($_SESSION['user'] != []) {
                    if (isset($_POST['btn_change_password']) && $_POST['btn_change_password']) {
                        $password_old = $_POST['password_old'];
                        if (password_verify($password_old,$_SESSION['user']['password'])) {
                            $check_success = 'checked';
                            $password_new = $_POST['password_new'];
                            $confirm_password = $_POST['confirm_password'];
                            if ($password_new == $confirm_password) {
                                $check_success = 'checked';
                                $id = $_SESSION['user']['id'];
                                $password = password_hash($password_new, PASSWORD_DEFAULT);
                                user_UPDATE($id,'','',$password,'','','');
                                user_updation_date($id);
                                $_SESSION['user'] = user_ONE($id);
                            } else $check_error = 'checked';
                        } else $check_error = 'checked';

                    }
                    include_once 'view/user/account-change_password.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-comment':
                $check_success = '';
                if ($_SESSION['user'] != []) {
                    $comments = comment_SELECT($_SESSION['user']['id'],0);
                    include_once 'view/user/account-comment.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-voucher':
                if ($_SESSION['user'] != []) {
                    $vouchers = voucher_SELECT($_SESSION['user']['id']);


                    include_once 'view/user/account-voucher.php';
                } else header('location: ?mod=page&act=home');
                break;
            case 'account-product-like':
                if ($_SESSION['user'] != []) {

                    include_once 'view/user/account-product-like.php';
                } else header('location: ?mod=page&act=home');
                break;
            default:
                header('location: ?mod=page&act=home');
                break;
        }
    } else {
       header('location: ?mod=page&act=home');
    }
    
?>