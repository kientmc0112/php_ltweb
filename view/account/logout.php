<?php
    session_start();
    $cookie_name = 'auth';
    $cookie_time = 3600 * 24 * 30;

    if(isset($_SESSION['username'])) {
        session_destroy();
        if(isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, "", time() - $cookie_time);
        }
        header("Location: ?controller=user&item=home");
    }
    else {
        header("Location: ?controller=user&item=home");
    }
?>
