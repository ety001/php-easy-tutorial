<?php
$con = new mysqli("localhost", "root", "password", "dbname");
$sql = "select * from news";
$res = $con->query($sql);

echo '<div><a href="add.php">添加</a></div>';
echo '<table border="1"><tr><td>id</td><td>title</td><td></td></tr>';
while ($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td><a href='show.php?id={$row['id']}' target='_blank'>{$row['title']}</a>||<a href='show2.php?title={$row['title']}' target='_blank'>{$row['title']}</a></td><td><a href='del.php?id={$row['id']}'>删除</a></td></tr>";
}
echo '</table>';
?>
<br>
<form action="search.php" method="get">
    <input type="text" name="kw" value="">
    <input type="submit" value="search">
</form>
<br>
<div><a href="cookie.php">COOKIE</a></div>
