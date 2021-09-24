<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование данных о пользователях</title>
</head>
<body>
    <?php
        $db=mysqli_connect("localhost","root","root") or die (mysqli_connect_error());
        mysqli_query($db,'SET NAMES utf8');
        mysqli_select_db($db,'user') or die (mysqli_connect_error());
    ?>

        <h2>Команда UPDATE</h2>
            <form action="save_edit.php" method="POST">
                <div>
                    <label for="ID">Выберите ID строки*:</label>
                    <input type="number" id="ID" name="id_user" require>
                </div>
                <div>
                    <label for="title">Имя:</label>
                    <input type="text" id="title" name="user_name">
                </div>
                <div>
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="user_login">
                </div>
                <div>
                    <label for="login">Пароль:</label>
                    <input type="text" id="password" name="user_password">
                </div>
                <div>
                    <label for="E-mail">E-mail:</label>
                    <input type="text" id="E-mail" name="user_e_mail">
                </div>
                <div>
                    <label for="info">Информация:</label>
                    <input type="text" id="info" name="info">
                </div>
                    <input type="submit" value="Обновить запись">
            </form>
    <p> <a href="index.php">Вернуться к списку пользователей</a>
</body>
</html>