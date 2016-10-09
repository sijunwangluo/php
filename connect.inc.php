<?php
define("DSN","mysql:host=localhost;dbname=testmail");
define("DBUSER",'root');
define("DBPASS","root");

try{
    $pdo=new PDO(DSN,DBUSER,DBPASS);
    $pdo->query("set names utf8");
}catch(PDOException $e){
    echo "数据库连接失败：".$e->getMessage();

}