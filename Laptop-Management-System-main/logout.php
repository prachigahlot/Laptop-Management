<?php
session_start();
if ((!isset($_SESSION['email']))||(!isset($_SESSION['e_mail']))) {
    header('location: login.php');
}
session_destroy();
header('location: index.php');
?>