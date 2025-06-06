<?php
include("config.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!$_SESSION['id'] && $_SESSION['qx']!="公司") {
    header("Location: index.php");
    exit;
}
$id=$_POST["id"];
$sql="update application set  status='".$_POST['status']."',remark='".$_POST['remark']."',update_time=now() where id='".$id."'";

echo $sql;
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
    window.location="myapply.php";

</script>
<?php



?>