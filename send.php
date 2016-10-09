<?php
header("Content-type:text/html;charset=utf-8");
require 'connect.inc.php';

if(isset($_POST['send'])){
    $stmt=$pdo->prepare("insert into mail(uid,mailtitle,maildt,mailcontent) VALUE (?,?,?,?)");
    $maildt=time();

    $stmt->execute(array($_POST['uid'],$_POST['mailtitle'],$maildt,$_POST['mailcontent']));
    if($stmt->rowCount()>0){
        echo "发送成功";

        header("Location:index.php");
    }else{
        echo "发送失败";
    }
}
?>
<html>
<head>
    <title>发送邮件</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="send.php" method="post">
发送给谁：<select name="uid" id="" >
        <?php

        $stmt2=$pdo->prepare("SELECT id FROM user");
        $stmt2->execute();

        while(list($uid)=$stmt2->fetch(PDO::FETCH_NUM)){
            echo '<option value='.$uid.'>'.$uid.'</option>';

        }
        ?>

    </select><br>
发送的标题：<input type="text" name="mailtitle" ><br>
发送的内容：<textarea name="mailcontent"   id="" cols="30" rows="10" ></textarea>
    <input type="submit" value="发送" name="send">
</form>
</body>
</html>
