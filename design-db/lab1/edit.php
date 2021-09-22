<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>редактирование пользователей</title>
</head>
<body>
<?php
$db = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
$users_table = mysqli_select_db($db, "user") or die(mysqli_connect_error());
?>
<h2>Команда UPDATE</h2>
<form action="save_edit.php" method="post">
    <div>
        <label for="ID">Выберете id строки *</label>
        <input type="number" id="ID" name="id" required>
    </div>
    <div>
        <label for="Title">Имя:</label>
        <input type="text" id="Title" name="name">
    </div>
    <div>
        <label for="Login">Логин:</label>
        <input type="text" id="Login" name="login">
    </div>
    <div>
        <label for="Password">Пароль:</label>
        <input type="text" id="Password" name="password">
    </div>
    <div>
        <label for="Mail">Почта:</label>
        <input type="text" id="Mail" name="mail">
    </div>
    <div>
        <label for="Info">Информация:</label>
        <input type="text" id="Info" name="info">
    </div>
    <input type="submit" value="обновить запись">
</form>
<a href='../index.php'>вернуться на страницу с пользователями</a>
</body>
</html>