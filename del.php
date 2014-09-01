<?php
if( isset($_GET['id']) ){
    $con = new mysqli("localhost", "root", "password", "dbname");
    $sql = "delete from news where id = {$_GET['id']}";
    $res = $con->query($sql);
	header('Location:index.php');
} else {
    header('Location:index.php');
}
