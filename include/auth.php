<?php
session_start();
include("Connect2DB.php");
$login = $_POST['login'];
$password = $_POST['password'];
$e_mail= $_POST['email'];
$hash= md5($password);
$zapros = mysqli_query($connect, "SELECT * FROM `users` WHERE `username`='{$login}' AND `password`='{$hash}'");
if (mysqli_num_rows($zapros) == 1) {
    $_SESSION['username'] = [$login];
    header("Location:../welcome.php");
} else {
    header ("Location:../noauth.php");
}