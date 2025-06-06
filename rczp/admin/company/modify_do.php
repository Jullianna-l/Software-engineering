<?php
include("../../config.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
$id=$_POST["id"];
$sql="update company set  status='".$_POST['status']."',password='".$_POST['password']."',name='".$_POST['name']."',phone='".$_POST['phone']."',address='".$_POST['address']."',intro='".$_POST['intro']."',update_time=now() where id='".$id."'";
//echo $sql;
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error());
    ?>
    <script language="javascript">
        alert("操作失败！");
        window.history.go(-1);

    </script>
    <?php
}
mysqli_close($con);
?>
    <script language="javascript">
        alert("操作成功！");
        window.location="list.php";

    </script>
<?php



?>