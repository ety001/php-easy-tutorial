<?php
if(isset($_POST['title'])){
    $con = new mysqli("localhost", "root", "password", "dbname");
    $sql = "insert into news (title,content) values ('{$_POST['title']}','{$_POST['content']}')";
    $res = $con->query($sql);
    if($res->error){
        var_dump($res->error);die();
    }
    header("Location:index.php");
    exit();
}
?>
<html>
<head>
    <meta charset="utf8">
</head>
<body>
<form action="" method="post">
    <input type="text" name="title" value="" placeholder="title"/>
    <textarea name="content"></textarea>
    <input type="submit" value="ok"/>
</form>
<br>
<div><a href="index.php">Back</a></div>
</body>
</html>
