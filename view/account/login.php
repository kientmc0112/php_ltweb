<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Custom foSnts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
        .alert {
            display: none;
            color: red;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input type="checkbox" name="remmember" value="remember-me"> Remember Password
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="?controller=account&action=register">Register an Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
