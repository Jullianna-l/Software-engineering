<?php
include("config.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!$_SESSION['id'] && $_SESSION['qx']!="公司") {
    header("Location: index.php");
    exit;
}

$sql="insert into job (title,salary,treatment,requirement,company_id,status,create_time,update_time) values ('".$_POST['title']."','".$_POST['salary']."','".$_POST['treatment']."','".$_POST['requirement']."','".$_SESSION['id']."','".$_POST['status']."',now(),now())";



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
    window.location="myjob.php";

</script>
<?php



?>