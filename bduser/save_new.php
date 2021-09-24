<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация в базе данных</title>
</head>
<body>
    <?php
        $db=mysqli_connect("localhost","root","root") or die (mysqli_connect_error());
        mysqli_query($db,'SET NAMES utf8');
        mysqli_select_db($db,'user') or die (mysqli_connect_error());

            $nam=trim($_POST['name']);
            $log=trim($_POST['login']);
            $passw=trim($_POST['password']);
            $em=trim($_POST['e_mail']);
            $inf=trim($_POST['info']);

            $sql_add = "INSERT INFO `users`(`user_name`,`user_login`,`user_password`,`user_e_mail`,`user_info`) values ('".$nam."','".$log."','".$passw."','".$em."','".$inf."');";

        $res=mysqli_query($db,$sql_add);
            if($res):
                print "<p> Спасибо , вы зарегестрированы в базе денных.";
                print "<p><a href=\"index.php\">Вернуться к списку пользователей </a>";
            else:
                print "Ошибка сохранения . <a href=\"index.php\"> Вернуться к списку пользователей </a>";
            endif;
    ?>
</body>
</html>