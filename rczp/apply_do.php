<?php
include("config.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$user_id=$_SESSION["id"];

$sql="insert into application (file,job_id,company_id,content,user_id,create_time,update_time) values ('".$_POST['file']."','".$_POST['job_id']."','".$_POST['company_id']."','".$_POST['content']."','".$user_id."',now(),now())";

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
    window.location="job.php";

</script>
