<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<h2>Регистрация</h2>
<body>
<?php
require_once('functions.php');
$db=mysqli_connect(  "localhost",  "root",  "root") or die (mysqli_connect_error());
mysqli_query($db,  'SET NAMES utf8');
mysqli_select_db($db, "conferenc") or die (mysqli_connect_error());
$im=trim($_POST['im']);
$fam=trim($_POST['fam']);
$email=trim($_POST['em']);
$date=date( 'Y-m-d H:i:s');
$event_id=intval($_POST['event']);
if ($event_id>0):
$query="INSERT INTO register (name, family, email, data_reg, event_id) VALUES ('".$im."','".$fam."','".$email."','".$date."','".$event_id."');";
$res=mysqli_query($db, $query);
else:
echo 'Вы не выбрали мероприятие';
endif;
if($res):
echo 'Вы успешно зарегистрировались<br>';
echo '<a href="index.php"> Вернуться на страницу регистрации </a><br>';
echo '<a href="results.php"> Списки регистрации </a>';
else:
echo mysqli_error ($db). '<br>';
endif;
?>
</body>
</html>
