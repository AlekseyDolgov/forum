<?php
$host = '';
$uesrname = '';
$password = '';
$database = '';
$connect = mysqli_connect($host, $uesrname, $password, $database);

if(!$connect)
    die("ошибка подключения к бд");