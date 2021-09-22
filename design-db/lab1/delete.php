<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
</head>
<body>
<h2>Команда DELETE</h2>
<form action="delete.php" method="post">
    <div>
        <label for="ID">Выберете id строки *</label>
        <input type="number" id="ID" name="id" required>
    </div>
    <input type="submit" value="удалить запись">
</form>
</body>
</html>

<?php
$db = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
$users_table = mysqli_select_db($db, "user") or die(mysqli_connect_error());


if (!empty($_POST['id'])) {

    $id = trim($_POST['id']);
    $query = "DELETE FROM user.users WHERE id='$id'";
    $res = mysqli_query($db, $query);

    if ($res) {
        echo "запись удалена  ";
        echo "<a href='../index.php'>вернуться на страницу с пользователями</a>";
    } else {
        echo "что-то пошло не так. <a href='../index.php'>вернуться на страницу с пользователями</a>";
    }
}

?>