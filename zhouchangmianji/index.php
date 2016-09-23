<html>
<head>
    <title>图形计算和（使用面向对象技术开发</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>图形计算机器</h1>
    <a href="index.php?action=rect">矩形</a>
    <a href="index.php?action=triangle">三角形</a>
    <a href="index.php?action=circle">圆形</a>
</center>
<?php

error_reporting(E_ALL & ~E_NOTICE);

function __autoload($className){
    include strtolower($className).'.class.php';
}
   echo new Form("index.php");//输出用户需要的表单

if(isset($_POST['sub'])){
    echo new Result();//输出形状的计算结果
}


?>
</body>
</html>
