<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thanks</title>
</head>
<body>
<?php
$db = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
$users_table = mysqli_select_db($db, "user") or die(mysqli_connect_error());
print_r($_POST);

$name = trim($_POST['name']);
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$mail = trim($_POST['mail']);
$info = trim($_POST['info']);


$req_add = "INSERT INTO `users` (`id`, `name`, `login`, `password`, `mail`, `info`)
VALUES (LAST_INSERT_ID(), '$name', '$login', '$password', '$mail', '$info')";


$res = mysqli_query($db, $req_add);
if ($res) {
    echo "<p>Все норм, вы теперь зарегестированы.</p>";
    echo "<a href='../index.php'>вернуться на страницу с пользователями</a>";
} else {
    echo "Что-то не так, попытайтесь зарегестрироваться снова.
        <a href='../index.php'>вернуться на страницу с пользователями</a>";
}
?>
</body>
</html>


