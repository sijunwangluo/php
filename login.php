<?php
session_start();
require 'connect.inc.php';

if(isset($_POST['sub'])){
    $stmt=$pdo->prepare("SELECT id,username FROM user WHERE username=? and userpwd=?");
    $stmt->execute(array($_POST['username'],$_POST['userpwd']));
    if($stmt->rowCount()>0){
        $_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['isLogin']=1;
        header("Location:index.php");

    }else{
      echo  "用户名或者密码登录错误";
    }
}
?>
<html>
<head>
    <title>邮件系统登录</title>
    <meta charset="UTF-8">
</head>
<body>
<p>欢迎光临邮件系统，session ID:<?php echo session_id()?></p>
<form method="post" action="login.php">
    用户名 <input type="text" name="username"><br>
    密码 <input type="text" name="userpwd"><br>
    <input type="submit" name="sub" value="登录">
    <a href="reg.php">注册</a>

</form>

</body>
</html>
