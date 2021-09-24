<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список участников мероприятий</title>
</head>
<h2>Список участников мероприятий </h2>
<body>
<?php
require_once('functions.php');
$db = mysqli_connect("localhost", "root", "root") or die (mysqli_connect_error());
mysqli_query($db, 'SET NAMES utf8');
mysqli_select_db($db, "conferenc") or die (mysqli_connect_error());
$res = mysqli_query($db, "SELECT * FROM events order by data_ev asc");
while ($arZ = mysqli_fetch_assoc($res)):
    $arEvents[$arZ['id']] = showDate($arZ['data_ev']) . ' ' . $arZ['name'];
endwhile;
?>
<div style="...">
    <form method="POST">
        <? showSelect('event', $arEvents); ?><br>
        <input type="submit" name="ok" value="Посмотреть список">
        <br><a href="index.php"> Вернуться на страницу регистрации </a><br>
    </form>
</div>
<div style="...">
    <?
    if (isset($_POST['event']) && $_POST['event'] > 0):
        $res = mysqli_query($db, "SELECT * FROM `register` where event_id=" . trim($_POST['event']) . " ");
        while ($arZ = mysqli_fetch_assoc($res)):
            $arReg[] = $arZ['name'] . ' ' . $arZ['family'] . ' ' . $arZ['email'] . '<br>';
        endwhile;
        foreach ($arReg as $reg):
            echo $reg . '<br>';
        endforeach;
    endif;
    ?>
</div>
</body>
</html>