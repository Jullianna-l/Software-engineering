<?php
include("config.php");
if (!$_SESSION['id'] && $_SESSION['qx']!="公司") {
    header("Location: index.php");
    exit;
}

$id=$_GET["id"];


$sql="delete from application where $id='".$id."'";//删除sql语句
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
    window.location="myapply.php";
</script>