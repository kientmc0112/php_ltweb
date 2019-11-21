<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng kí</title>

    <!-- Custom fonts for this template-->
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
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Đăng kí</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your name ..." name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Enter your username ..." required="required" name="username" onblur="check(this.id)">
                        <p class="alert" id="alertusername">Username đã tồn tại!</p>
                        <p class="alert" id="alertusername1">Username không hợp lệ!</p>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email ..." required="required" name="email" onblur="check(this.id)">
                        <p class="alert" id="alertemail">Email đã tồn tại!</p>
                        <p class="alert" id="alertemail1">Email không hợp lệ!</p>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" placeholder="Enter your password ..." required="required" name="password">
                            </div>
                            <div class="col-md-6">
                                <input type="password" id="vertify" class="form-control" placeholder="Confirm password ..." required="required" name="vertify" onblur="checkPass()">
                                <p class="alert" id="alertPass">Mật khẩu không khớp</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" name="register" type="submit">Đăng kí</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="?controller=account&action=login">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
        function check(x) {
            var id2 = "#" + x;
            var id = "alert" + x;
            var id1 = "alert" + x + "1";
            $.post("model/check.php", {
                data: $(id2).val().trim(),
                type: x
            }, function(result) {
                if (result == 2) {
                    document.getElementById(id).style.display = "none";
                    document.getElementById(id1).style.display = "block";
                } else if (result == 1) {
                    document.getElementById(id).style.display = "block";
                    document.getElementById(id1).style.display = "none";
                } else {
                    document.getElementById(id).style.display = "none";
                    document.getElementById(id1).style.display = "none";
                }
            });
        }

        function checkPass() {
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("vertify").value;
            if (pass1 === pass2) {
                document.getElementById("alertPass").style.display = "none";
            } else {
                document.getElementById("alertPass").style.display = "block";
            }
        }
    </script>

</body>

</html>
