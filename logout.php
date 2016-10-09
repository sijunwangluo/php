<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}

$_SESSION=array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),"",time()-3600,"/");
}

session_destroy();
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<p><?php echo $username ?>再见！</p>
<p><a href="login.php">重新登录系统！</a> </p>
</body>
</html>
