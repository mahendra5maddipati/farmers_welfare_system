<?php
ob_start();
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    echo "<script>alert('Please login to continue..');</script>";
}
ob_end_flush();
?>
