<?php
//require_once "../header.php";
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="../../style/css/formaEntrance.css">
</head>
<body>
<form action="../../processing/formaЕntrance.php" method="post" id="form">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input id="submit" type="submit" value="Вход">
    <a onclick="window.location.href='http://forum.dav/views/registrations/registration.php'">Регистрация</a>
</form>

</body>
</html>