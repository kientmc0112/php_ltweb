<?php
    require_once 'DBConfig.php';
    $db = new Database;
    $db->connect();

    $data = $_POST['data'];
    $type = $_POST['type'];

    function test($data, $type) {
        switch($type) {
            case 'email':
                $pattern = "#^[A-z][A-z0-9_\.]{4,31}@[a-z0-9]{2,21}(\.[a-z]{2,4}){1,2}$#";
                break;
            case 'password':
                $pattern = "#^[A-z0-9]{8,15}$#";
                break;
            case 'username':
                $pattern = "#^[A-z0-9_.]{5,25}$#";
                break;
            case 'name':
                $pattern = "#^[A-z]{1,31}$#";
                break;
        }
        $result = preg_match($pattern, $data);
        return $result;
    }

    if(test($data, $type) == 1) {
        if($db->check($data, $type) == 0) echo 0;
        else echo 1;
    }
    else {
        echo 2;
    }
?>
