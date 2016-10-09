<?php
header("HTTP/1.0 404 not found");
require 'connect.inc.php';
$stmt=$pdo->prepare("delete  from mail WHERE id=? ");
$stmt->execute(array($_GET['id']));
if($stmt->rowCount()>0){
    echo "删除成功";
//    header("Location:index.php");
}