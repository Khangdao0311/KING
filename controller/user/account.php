<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'login':
                if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                    $account = $_POST['account'];
                    $password = $_POST['password'];
                    $users = user_ALL();
                    foreach ($users as $item) {
                        if (($item['username'] === $account || $item['email'] === $account) && password_verify($password, $item['password'])) {
                            $_SESSION['user'] = user_ONE($item['id']);
                            header('location: ?mod=page&act=home');
                        }
                    }
                }
                include_once 'view/user/login.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: ?mod=user&act=login');
                break;
            case 'register':
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
                        header('location: ?mod=user&act=login');
                    }
                }
                include_once 'view/user/register.php';
                break;
            case 'forgot_password-email':
                if (isset($_POST['btn_forgot_password-email'])) {
                    $email = $_POST['email'];
                    $users = user_ALL();
                    foreach ($users as $item) {
                        if ($item['email'] == $email) {
                            $_SESSION['foget_password-email'] = $email;
                            header('location: ?mod=user&act=forgot_password-OTP');
                        }
                    }
                }
                include_once 'view/user/forgot_password-email.php';
                print_r($users);

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
                    $email = $_SESSION['foget_password-email'];
                    // unset($_SESSION['foget_password-email']);
                    if (isset($_POST['btn_forget_password_change'])) {
                        $new_password = $_POST['new-password'];
                        $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                        echo $email;
                        echo $new_password;
                        user_UPDATE($email,$new_password);
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
                include_once 'view/user/account.php';
                break;
            case 'reset_password':
                include_once 'view/user/account.php';
                break;
            case 'order_follow':
                include_once 'view/user/order-follow.php';
                break;
            default:
                header('location: ?mod=user&act=information');
                break;
        }
    } else {
       header('location: ?mod=user&act=information');
    }
    
?>