<!DOCTYPE html>
<html lang="en"><body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование записи</title>
</head>
<?php

    $db=mysqli_connect("localhost","root","root") or die (mysqli_connect_error());
    mysqli_query($db,'SET NAMES utf8');
    mysqli_select_db($db,'user') or die (mysqli_connect_error());

        $id_user = trim( $_POST['id_user']);
        $user_name =    $_POST['user_name'];
        $user_login =   $_POST['user_login'];
        $user_password =$_POST['user-password'];
        $user_e_mail =  $_POST['user_e_mail'];
        $user_info =    $_POST['user_info'];

        if(empty($id_user)){
            echo"Вы не задали ID строки для обновления данныйх!";
            return;
        }

    $zapros="UPDATE users SET user_name='".$user_name."', user_login='".$user_login."', user_password='".$user_password."',user_e_mail='".$user_e_mail."',user_info='".$user_info."' WHERE id_user='".$id_user."'";
    my_sqli_query($db,$zapros);

    if (mysqli_affected_rows($db)>0) {
        echo 'Все сохранено. <a href="index.php">Вернуться к списку пользователей </a>';}
        else { echo 'ошибка сохранения.<a href="index.php">Вернуться к списку пользователей </a>' ;}
?>
</body>
</html>