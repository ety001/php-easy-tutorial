<?php
if ( !isset($_COOKIE['news_id']) ){
    header('Location:index.php');
}

$news_id = $_COOKIE['news_id'];
$con = new mysqli("localhost", "root", "password", "dbname");
$sql = "select * from news where id={$news_id}";
$res = $con->query($sql);
$r = $res->fetch_assoc();
//echo '<div>'.$sql.'</div>';

echo '<div style="width:200px;">';
echo "<div style='background-color:#ccc;margin-bottom:8px;'>{$r['title']}</div>";
echo "<div style='background-color:#eee;'>{$r['content']}</div>";
echo '</div>';

echo '<div><a href="index.php">Back</a></div>';
