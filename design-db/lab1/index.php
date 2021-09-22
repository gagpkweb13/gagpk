<?php
$db = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_connect_error());
$users_table = mysqli_select_db($db, "user") or die(mysqli_connect_error());
$query = mysqli_query($db, "SELECT id, name, mail FROM users");

echo "<table>";
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['mail']}</td>
    <td><a href='lab1/edit.php?id=" . $row['id'] . "'>Редактировать</a></td>
    <td><a href='lab1/delete.php?id=" . $row['id'] . "'>Удалить</a></td>
</tr>";
}
echo "</table>";

$rows_length = mysqli_num_rows($query);
echo "<p>Всего пользователей: $rows_length</p>";

