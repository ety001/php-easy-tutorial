<?php
if( !isset($_GET['id']) ){
    header('Location:index.php');
}

$id = $_GET['id'];
$con = new mysqli("localhost", "root", "password", "dbname");
$sql = "select * from news where id={$id}";
$res = $con->query($sql);
$r = $res->fetch_assoc();
//echo '<div>'.$sql.'</div>';

echo '<div style="width:200px;">';
echo "<div style='background-color:#ccc;margin-bottom:8px;'>{$r['title']}</div>";
echo "<div style='background-color:#eee;'>{$r['content']}</div>";
echo '</div>';

setcookie('news_id', $id, time()+3600);

echo '<div><a href="index.php">Back</a></div>';
