<?php
if( !isset($_GET['title']) ){
    header('Location:index.php');
}
$title = $_GET['title'];
$con = new mysqli("localhost", "root", "password", "dbname");
$sql = "select * from news where title='{$title}'";
$res = $con->query($sql);
$r = $res->fetch_assoc();
//echo '<div>'.$sql.'</div>';

echo '<div style="width:200px;">';
echo "<div style='background-color:#ccc;margin-bottom:8px;'>{$r['title']}</div>";
echo "<div style='background-color:#eee;'>{$r['content']}</div>";
echo '</div>';
echo '<div><a href="index.php">Back</a></div>';
