<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();
    session_start();
    if(isset($_GET['item'])) {
        $item = $_GET['item'];
    }
    else {
        $item = '';
    }
    switch ($item) {
        case 'home':
            # code...
            $id1 = 3;
            $data1 = $db->getCategoryProduct($id1);
            $id2 = 5;
            $data2 = $db->getCategoryProduct($id2);
            $id3 = 6;
            $data3 = $db->getCategoryProduct($id3);
            // var_dump($data1);
            // exit();
            require_once 'view/user/home.php';
            break;

        case 'detail':
            # code...
            require_once 'view/user/detail.php';
            break;

        case 'grid':
            # code...
            $id = 3;
            $data = $db->getCategoryProduct($id);
            require_once 'view/user/grid.php';
            break;

        default:
            # code...
            require_once 'view/user/home.php';
            break;
    }
?>
