<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
    <title>Farmer Welfare System Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['name']);
require_once './core/Utils.php';
require_once './core/Database.php';
$db = Database::getInstance();
$con = $db->getConnection();
$valid = new Utils();
if (isset($_POST['submit'])) {
    $email = $password = "";
    if (isset($_POST['email'])) {
        $email = $valid->filter($_POST['email']);
    }
    if (isset($_POST['password'])) {
        $password = $valid->filter($_POST['password']);
    }
    $query = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
    $res = $con->query($query);
    if ($res->num_rows > 0) {
        foreach ($res as $item) {
            $_SESSION['email'] = $item['email'];
            $_SESSION['name'] = $item['name'];
        }
        header('Location: ./index.php');
    } else {
        echo "<script>alert('Failed to login, Invalid login credentials');</script>";
    }
}
?>
<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Farmer Welfare System :: Admin Login</div>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" name="email" id="inputEmail" class="form-control"
                               placeholder="Email address"
                               required="required" autofocus="autofocus">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control"
                               placeholder="Password"
                               required="required">
                        <label for="inputPassword">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <p class="text-dark">Login to continue...</p>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
            </form>
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
