<?php
$hostname = 'localhost';
$username = 'Anton';
$password = 123;
$dbname = 'UsersAuth';
$connect = mysqli_connect($hostname, $username, $password);

//mysqli_query ($connect, "CREATE DATABASE $dbname");
mysqli_select_db ($connect, $dbname);

/*
mysqli_query ($connect, "CREATE TABLE `users` (
    `id` int  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(50) NOT NULL UNIQUE KEY,
    `password` varchar(255) NOT NULL
)");
*/

/*
$insert = "INSERT INTO users (username, password) Values ('anton', '42b46b98d4cf19ec3b8eb076284a63fd');";

if (mysqli_multi_query ($connect, $insert)) {
    echo "Все хорошо";
} else {
    echo "ошибка";
}
*/
