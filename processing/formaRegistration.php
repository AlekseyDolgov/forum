<?php
require_once "../config/bdConnection.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$date = mysqli_query($connect, "SELECT CURDATE()");
$date = mysqli_fetch_all($date);
$data_regestration = $date[0][0];

mysqli_query($connect, "INSERT INTO `users` (`id_user`, `username`, `status`, `password`, `email`, `data_register`) VALUES (NULL, '$username', '0', '$password', '$email', '$data_regestration')");

header('/');