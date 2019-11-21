<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();
    session_start();

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = '';
    }
    switch ($action) {
        case 'login':
            # code...
            require_once 'view/account/login.php';

            $cookie_name = 'auth';
            $cookie_time = 3600 * 24 * 30;

            if(isset($_COOKIE[$cookie_name])) {
                parse_str($_COOKIE[$cookie_name]);
                // echo $username." ".$password;
                $data = $db->login($username, $password);
                if($data == 0) {
                    header("Location: ?controller=account&action=login");
                    exit;
                }
                else {
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['password'] = $data['pass'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['level'] = $data['level'];
                    if($_SESSION['level'] == 1) {
                        header("Location: ?controller=admin&item=dashboard");
                    }
                    else {
                        header("Location: ?controller=user&item=home");
                    }
                    exit;
                }
            }
            else if(isset($_SESSION['username']) && isset($_SESSION['password']) && !isset($_COOKIE[$cookie_name])) {
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];
                $data = $db->login($username, $password);
                if($data == 0) {
                    header("Location: ?controller=account&action=login");
                    exit;
                }
                else {
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['password'] = $data['pass'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['level'] = $data['level'];
                    if($_SESSION['level'] == 1) {
                        header("Location: ?controller=admin&item=dashboard");
                    }
                    else {
                        header("Location: ?controller=user&item=home");
                    }
                    exit;
                }
            }
            else {
                if(isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if($username != '' && $password != '') {
                        $password = md5($password);
                        $data = $db->login($username, $password);
                        if($data == 0) {
                            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng!')</script>";
                        }
                        else {
                            $_SESSION['id'] = $data['id'];
                            $_SESSION['name'] = $data['name'];
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['email'] = $data['email'];
                            $_SESSION['password'] = $data['pass'];
                            $_SESSION['level'] = $data['level'];
                            if(isset($_POST['remmember'])) {
                                setcookie($cookie_name, 'username='.$username.'&password='.$password, time() + $cookie_time);
                            }
                            if($_SESSION['level'] == 1) {
                                header("Location: ?controller=admin&item=dashboard");
                            }
                            else {
                                header("Location: ?controller=user&item=home");
                            }
                            exit;
                        }
                    }
                    else {
                        // echo "Không được để trống!";
                        echo "<script>alert('Không được để trống!')</script>";
                    }
                }
            }
            break;

        case 'logout':
            # code...
            require_once 'view/account/logout.php';
            break;

        case 'register':
            # code...
            require_once 'view/account/register.php';
            if(isset($_POST['register'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                if($username != "" && $name != "" && $email != "" && $password != "") {
                    $password = md5($password);
                    $db->register($name, $username, $email, $password);
                    $result = $db->check($username, 'username');
                    if($result == 1) {
                        echo "<script>alert('Đăng kí thành công!')</script>";
                        header("Location: ?controller=account&action=login");
                    }
                    else echo "<script>alert('Đăng kí không thành công!')</script>";
                }
                else {
                    echo "<script>alert('Không được để trống!')</script>";
                }
            }
            break;

        default:
            # code...
            header("Location: ?controller=account&action=login");
            break;
    }
?>
