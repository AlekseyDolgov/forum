<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../../style/css/headerMainPart.css">
    <link rel="stylesheet" href="../../style/css/formaEntrance.css">
</head>
<body>
<body id='font'>
<header  class="header">
    <p id='MC_Svoboda'>МЫСЛИ СВОБОДНЫ!<p>
    <p id="quote">«Тот, кто управляет прошлым, управляет будущим. <br>
        Тот, кто управляет настоящим, <br>
        управляет прошлым.»</p>
    <small>
        <p>-Джордж Оруэлл</p>
    </small>
    <?php $id = $_GET['id']?>
    <form action="../../processing/formaRegistration.php" method="post" id="form">
        <input type="hidden" name="id" value="<?=$id ?>">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="password_repeat" placeholder="password_repeat"><br>
        <input type="email" name="email" placeholder="email">
        <input id="submit" type="submit" value="Вход">
    </form>
</header>
</body>
</html>
