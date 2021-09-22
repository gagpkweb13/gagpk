<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$db = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
$users_table = mysqli_select_db($db, "user") or die(mysqli_connect_error());

$id = trim($_POST['id']);
$name = trim($_POST['name']);
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$mail = trim($_POST['mail']);
$info = trim($_POST['info']);

if (empty($id)) {
    echo "что-то не то с id, попытайтесь снова";
    return;
}

$query = "UPDATE user.users SET name='$name', login='$login', password='$password', mail='$mail', info='$info' WHERE id='$id'";
mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "изменения сохранены, можете вернуться назад.";
} else {
    echo "что-то пошло не так, попробуйте еще раз";
}
?>
</body>
</html>