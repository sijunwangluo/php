<?php
session_start();
if(isset($_SESSION['isLogin'])&&$_SESSION['isLogin']==1){
    echo "<p>当前用户为：<b>".$_SESSION['username']."</b>";
    echo "<a href='logout.php'>退出</a>&nbsp;";
    echo "<a href='send.php'>发邮件</a>";
}else{
    header("Location:login.php");
}
?>
<html>
<head>
    <title>邮件系统</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
require "connect.inc.php";
$stmt=$pdo->prepare("SELECT id,mailtitle,maildt,mailcontent FROM mail WHERE uid=?");
$stmt->execute(array($_SESSION['id']));
?>
<p>你的信箱中有  <b><?php echo $stmt->rowCount() ?></b>封邮件</p>
<table>
    <tr>
        <th>编号</th>
        <th>邮件标题</th>
        <th>接收时间</th>
        <th>接收内容</th>
        <th>操作</th>
    </tr>
    <?php


    while(list($id,$mailtitle,$maildt,$mailcontent)=$stmt->fetch(PDO::FETCH_NUM)){
        echo '<tr align="center" >';
        echo '<td>'.$id.'</td>';
        echo '<td>'.$mailtitle.'</td>';
        echo '<td>'.date("Y-m-d:",$maildt).'</td>';
        echo '<td>'.$mailcontent.'</td>';
        echo '<td><a href="demail.php?id='.$id.'">删除</a> <a href="resend.php.php?id='.$id.'">转发</a></td>';
        echo '</tr>';
    }

    ?>
</table>
</body>
</html>
