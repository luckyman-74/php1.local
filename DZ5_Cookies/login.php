<?php
session_start();
require_once __DIR__ . '/functions.php';

if (isset($_POST['login']) && isset($_POST['password']) && existsUser($_POST['login'])) {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION['user'] = $_POST['login'];
        $_SESSION['name'] = getCurrentUser();

    }
}
if (getCurrentUser() !== null) {
    header("Location: /DZ5_Cookies/index.php");
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<h3> Авторизация </h3>
<hr>
<br>

<form action="/DZ5_Cookies/login.php" method="post">
    <label for="login">Логин:</label>
    <input type="text" name="login" id="login">
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password">
    <input type="submit">
</form>
<br>
<hr>
Отладочная информация (для учебных целей на время разработки):
<br><br>
Логин: "admin" , Пароль: "123123RRR"
<br>
Логин: "user"  , Пароль: "321321RRR"

</body>
</html>