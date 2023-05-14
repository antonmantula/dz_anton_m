<?php
session_start();
include("Connect2DB.php");
$login = $_POST['login'];
$password = $_POST['password'];
$e_mail= $_POST['email'];
$hash= md5($password);
$zapros = mysqli_query($connect, "SELECT * FROM `users` WHERE `username`='{$login}' OR `e-mail`='{$e_mail}'");
if (mysqli_num_rows($zapros) == 0) {
    $_SESSION['username'] = [$login];
    mysqli_query($connect, "INSERT INTO `users` (`username`, `password`, `e-mail`) VALUES ('{$login}', '{$hash}', '{$e_mail}')");
    header("Location:../welcome.php");
} else {
    header ("Location:../nowelcome.php");
}
