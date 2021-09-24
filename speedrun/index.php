<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация на мероприятия</title>
</head>
<h2>Регистрация на мероприятия</h2>
<body>
<?php
require_once('functions.php');
$db=mysqli_connect(  "localhost",  "root",  "root") or die (mysqli_connect_error());
mysqli_query($db,  'SET NAMES utf8');
mysqli_select_db($db,  "conferenc") or die (mysqli_connect_error());
$res=mysqli_query($db,  "SELECT * FROM events order by data_ev asc ");
while ($arZ=mysqli_fetch_assoc($res)){
$arEvents[$arZ['id']]=showDate($arZ['data_ev']).' '.$arZ['name'];
}
showVar($_SESSION['user']);
?>
    <form action="register.php" method="POST">
    <table>
        <tr>
            <td width="35%"> Фамилия</td>
            <td> <input name="fam" type="text" required value="<?echo $_SESSION['user'] ['fam']?>"></td>
        </tr>
        <tr>
            <td > Имя</td>
            <td> <input name="im" type="text" required value="<?echo $_SESSION['user'] ['im']?>"></td>
        </tr>
        <tr>
            <td> E-mail</td>
            <td> <input name="em" type="email" required value="<?echo $_SESSION['user'] ['em']?>"></td>
        </tr>
        <tr>
            <td> Мероприятие</td> <td> <?showSelect('event', $arEvents);?></td>
        </tr>
        <tr>
            <td> <input type="reset" name="sbros" value="Сбросить"></td> <td>
                <input type="submit" name="ok" value="Зарегистрироваться"></td>
        </tr>
    </table>
    </form>
</body>
</html>