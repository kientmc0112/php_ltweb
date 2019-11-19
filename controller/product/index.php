<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = '';
    }
    switch ($action) {
        case 'add':
            # code...
            $tblname1 = 'categories';
            $data1 = $db->getList($tblname1);
            $tblname2 = 'brands';
            $data2 = $db->getList($tblname2);
            require_once 'view/product/add.php';
            if(isset($_POST['add'])) {
                $name = $_POST['name'];
                $cost = $_POST['cost'];
                $state = $_POST['state'];
                $summary = $_POST['summary'];
                $brand_id = $_POST['brand'];
                $category_id = $_POST['category'];
                $url = $_POST['file1'];
                $data = $db->addProduct($name, $cost, $state, $summary, $brand_id, $category_id, $url);
            }
            break;

        case 'edit':
            # code...
            require_once 'view/product/edit.php';
            break;

        case 'list':
            # code...
            require_once 'view/product/list.php';
            break;

        default:
            # code...
            require_once 'view/product/list.php';
            break;
    }
?>
