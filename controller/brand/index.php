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
            require_once 'view/brand/add.php';
            if(isset($_POST['add'])) {
                $name = $_POST['name'];
                $position = $_POST['position'];
                $summary = $_POST['summary'];
                $data = $db->addBrand($name, $position, $summary);
            }
            break;

        case 'edit':
            # code...
            $id = $_GET['id'];
            $data = $db->getBrand($id);
            require_once 'view/brand/edit.php';
            if(isset($_POST['save'])) {
                $name = $_POST['name'];
                $position = $_POST['position'];
                $summary = $_POST['summary'];
                $data = $db->editBrand($id, $name, $position, $summary);
            }
            break;

        case 'delete':
            # code...
            $id = $_GET['id'];
            $db->deleteBrand($id);
            header("Location: ?controller=brand&action=list");
            break;

        case 'list':
            # code...
            $tblname = 'brands';
            $data = $db->getList($tblname);
            require_once 'view/brand/list.php';
            break;

        default:
            # code...
            $tblname = 'brands';
            $data = $db->getList($tblname);
            require_once 'view/brand/list.php';
            break;
    }
?>
