<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();
    session_start();

    if( (isset($_SESSION['username']) && $_SESSION['level'] == 1) || isset($_COOKIE['auth']) ) {
        if(isset($_GET['item'])) {
            $item = $_GET['item'];
        }
        else {
            $item = '';
        }
        switch ($item) {
            case 'product':
                # code...
                header("Location: ?controller=product&action=list");
                break;

            case 'brand':
                # code...
                header("Location: ?controller=brand&action=list");
                break;

            case 'category':
                # code...
                header("Location: ?controller=category&action=list");
                break;

            case 'dashboard':
                # code...
                require_once 'view/admin/dashboard.php';
                break;

            default:
                # code...
                require_once 'view/admin/dashboard.php';
                break;
        }
    } else {
        header("Location: ?controller=account&action=login");
    }
?>
