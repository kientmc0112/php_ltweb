<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();
    session_start();

    if( (isset($_SESSION['username']) && $_SESSION['level'] == 1) || isset($_COOKIE['auth']) ) {
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
                $id = $_GET['id'];
                $data = $db->getProduct($id);
                $tblname1 = 'categories';
                $data1 = $db->getList($tblname1);
                $tblname2 = 'brands';
                $data2 = $db->getList($tblname2);
                require_once 'view/product/edit.php';
                if(isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $cost = $_POST['cost'];
                    $state = $_POST['state'];
                    $summary = $_POST['summary'];
                    $brand_id = $_POST['brand'];
                    $category_id = $_POST['category'];
                    if($_POST['file1'] == '') {
                        $url = $data['url'];
                    } else {
                        $url = $_POST['file1'];
                    };
                    $data = $db->editProduct($id, $name, $cost, $state, $summary, $brand_id, $category_id, $url);
                }
                break;

            case 'list':
                # code...
                $tblname = 'products';
                $data = $db->getList($tblname);
                require_once 'view/product/list.php';
                break;

            case 'delete':
                # code...
                $id = $_GET['id'];
                $db->deleteProduct($id);
                require_once 'view/product/list.php';
                break;

            default:
                # code...
                require_once 'view/product/list.php';
                break;
        }
    } else {
        require_once 'view/account/login.php';
    }
?>
