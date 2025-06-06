<?php
include("config.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$id=$_POST["id"];


$sql="update user set  password='".$_POST['password']."',name='".$_POST['name']."',phone='".$_POST['phone']."',address='".$_POST['address']."',edu='".$_POST['edu']."',age='".$_POST['age']."',gender='".$_POST['gender']."',graduation='".$_POST['graduation']."',computer='".$_POST['computer']."',english='".$_POST['english']."',educational='".$_POST['educational']."',experience='".$_POST['experience']."',evaluation='".$_POST['evaluation']."', update_time=now()  where id='".$id."'";

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
    window.location="userinfo.php";

</script>
<?php



?>