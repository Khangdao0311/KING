<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'category-list':
                include_once 'view/admin/category-list.php';
                break;
            case 'category-add':
                include_once 'view/admin/category-add.php';
                break;
            case 'category-edit':
                include_once 'view/admin/category-edit.php';
                break;
            case 'product-list':
                include_once 'view/admin/product-list.php';
                break;
            case 'product-add':
                include_once 'view/admin/product-add.php';
                break;
            case 'product-edit':
                include_once 'view/admin/product-edit.php';
                break;
            case 'user-list':
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
                include_once 'view/admin/author-list.php';
                break;
            case 'author-add':
                include_once 'view/admin/author-add.php';
                break;
            case 'author-edit':
                include_once 'view/admin/author-edit.php';
                break;
            case 'publisher-list':
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