<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'list':
                include_once 'view/user/cart.php';
                break;
            case 'checkout':
                include_once 'view/user/checkout.php';
                break;
            default:
                header('location: ?mod=cart&act=list');
                break;
        }
    } else {
       header('location: ?mod=cart&act=list');
    }
    
?>