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
                require_once 'view/category/add.php';
                if(isset($_POST['add'])) {
                    $name = $_POST['name'];
                    $summary = $_POST['summary'];
                    $data = $db->addCategory($name, $summary);
                }
                break;

            case 'edit':
                # code...
                $id = $_GET['id'];
                $data = $db->getCategory($id);
                require_once 'view/category/edit.php';
                if(isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $summary = $_POST['summary'];
                    $data = $db->editCategory($id, $name, $summary);
                }
                break;

            case 'delete':
                # code...
                $id = $_GET['id'];
                $db->deleteCategory($id);
                header("Location: ?controller=category&action=list");
                break;

            case 'list':
                # code...
                $tblname = 'categories';
                $data = $db->getList($tblname);
                require_once 'view/category/list.php';
                break;

            default:
                # code...
                $tblname = 'categories';
                $data = $db->getList($tblname);
                require_once 'view/category/list.php';
                break;
        }
    } else {
        header("Location: ?controller=account&action=login");
    }
?>
