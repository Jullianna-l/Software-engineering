<?php
include("../../config.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET["id"];

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}

$sql="delete from user where id='".$id."'";//删除sql语句
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
    //swindow.submit();
</script>