<?php
require "connect.inc.php";
if(isset($_POST['reg'])&&$_POST['userpwd']==$_POST['userpwd2']){

    $stmt=$pdo->prepare('INSERT INTO user(username,userpwd) VALUES (?,?)');
    $stmt->execute(array($_POST['username'],$_POST['userpwd']));
    if($stmt->rowCount()>0){
        echo "注册成功";
        header("Location:login.php");
    }else{
        echo "注册失败";
    }

}
?>
<html>
<head>
    <title>邮件会员注册</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="reg.php" method="post">
    用户名：<input type="text" name="username"><br>
    密码：<input type="text" name="userpwd"><br>
    确认密码：<input type="text" name="userpwd2" ><br>
    <input type="submit" name="reg" value="注册">
</form>
</body>
</html>
