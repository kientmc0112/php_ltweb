<?php
    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }
    else {
        $controller = '';
    }
    switch ($controller) {
        case 'account':
            # code...
            require_once "controller/account/index.php";
            break;

        case 'admin':
            # code...
            require_once "controller/admin/index.php";
            break;

        case 'product':
            # code...
            require_once "controller/product/index.php";
            break;

        case 'category':
            # code...
            require_once "controller/category/index.php";
            break;

        case 'brand':
            # code...
            require_once "controller/brand/index.php";
            break;

        case 'user':
            # code...
            require_once "controller/user/index.php";
            break;

        default:
            # code...
            $cookie_name = 'auth';
            header("Location: ?controller=user&item=home");
            break;
    }
?>
