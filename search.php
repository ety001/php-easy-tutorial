<?php
if( !isset($_GET['kw']) ){
    header('Location:index.php');
}

$kw = $_GET['kw'];
$con = new mysqli("localhost", "root", "password", "dbname");
$sql = "select * from news where title like '%{$kw}%'";
$res = $con->query($sql);

echo '<table border="1"><tr><td>id</td><td>title</td><td></td></tr>';
while( $row = $res->fetch_assoc() ){
    echo "<tr><td>{$row['id']}</td><td><a href='show.php?id={$row['id']}' target='_blank'>{$row['title']}</a>||<a href='show2.php?title={$row['title']}' target='_blank'>{$row['title']}</a></td><td><a href='del.php?id={$row['id']}'>删除</a></td></tr>";
}
echo '</table>';
echo '<div><a href="index.php">Back</a></div>';
