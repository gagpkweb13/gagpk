<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сведения о пользователях сайта</title>
</head>
<body>
   <?php
    $db=mysqli_connect("localhost","root","root") or die (mysqli_connect_error());
    mysqli_query($db,'SET NAMES utf8mb4_unicode_ci');
    mysqli_select_db($db,"user") or die (mysqli_connect_error());
    ?>

    <h2>Зарегистрированные пользователи:</h2>
    <table border="1">
    <tr>
    <th>id_user</th>
    <th>user_name</th>
        <th>date_of_birth </th>
        <th>plot_number </th>
        <th>doctor </th>
        <th>date_of_visit</th>
        <th>diagnosis</th>


    <th>Редактировать</th> <th>Уничтожить</th> </tr>
    <?php
        $result = mysqli_query($db,"SELECT id, user_name, date_of_birth, plot_number, doctor, date_of_visit, diagnosis FROM users");
    while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['date_of_birth'] . "</td>";
            echo "<td>" . $row['plot_number'] . "</td>";
            echo "<td>" . $row['doctor'] . "</td>";
            echo "<td>" . $row['date_of_visit'] . "</td>";
            echo "<th>" . $row['diagnosis'] . "</th>";
        }
    print"</table>";
    $num_rows = mysqli_num_rows($result);
    print("<P>всего пользователей: $num_rows </p>");
    ?>
    <p> <a href = "new.html"> Добавить пользователей </a>
        <h2>Команда DELETE</h2>
        <form action="delete.php" method="POST">
            <div>
                <label for="ID">Выберите ID строки*:</label>
                <input type="number" id="id_user" name="id_user" required>
            </div>
            <input type="submit" value="Удалить запись">
        </form>
</body>
</html>