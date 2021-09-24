<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db=mysqli_connect("localhost","root","root") or die (mysqli_connect_error());
        mysqli_query($db,'SET NAMES utf8mb4_unicode_ci');
        mysqli_select_db($db,'user') or die (mysqli_connect_error());

        $id_user = trim ( $_POST['id']);
        $zapros="DELETE FROM users WHERE id=" . $id;
        $res =mysqli_query($db,$zapros);

        if ($res):
            print "<p>Запись удалена.";
            print "<a><a href=\"index.php\">Вернуться к списку пользователей </a>";
        else:
            print"Ошибка удаления . <a href=\"index.php\">Вернуться к списку пользователей</a>";
        endif;
    ?>
</body>
</html>