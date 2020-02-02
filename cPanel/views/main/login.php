<?php
require_once("../Controllers/UsersController");
//require_once("../Controllers/PostsController.php");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://ekan-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>Dashboard - تسجيل الدخول </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/master_style.css">

    <!-- Ekan Admin skins -->
    <link rel="stylesheet" href="css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition dark bg-img" style="background-image: url(../images/auth-bg/bg.jpg)" data-overlay="3">

<div class="auth-2-outer row align-items-center h-p100 m-0">
    <div class="auth-2">
        <div class="auth-logo font-size-20">
          <b>تسجيل الدخول الى لوحة التحكم</b>
        </div>
        <!-- /.login-logo -->
        <div class="auth-body">

            <p class="auth-msg">SamAwi News</p>

            <form action="" method="post" class="form-element">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="user_email" placeholder="البريد الالكتروني">
                    <span class="ion ion-email form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="user_password" placeholder="كلمة المرور">
                    <span class="ion ion-locked form-control-feedback"></span>
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-block mt-10 btn-success">تسجيل الدخول</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
    </div>

</div>


<!-- jQuery 3 -->
<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- popper -->
<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from ekan-admin-templates.multipurposethemes.com/main/pages/auth_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:37:41 GMT -->
</html>
