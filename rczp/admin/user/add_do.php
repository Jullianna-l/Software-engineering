<?php
include("../../config.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
$username=$_POST["username"];//用户名


$sqlf="select  count(1) as num   from user where username='".$username."'";

$rs=mysqli_query($con,$sqlf);
$row=mysqli_fetch_array($rs);

$num=$row['num'];//用户名


if($num==0){


    $sql="insert into user (username,password,name,phone,address,edu,age,gender,graduation,computer,english,educational,experience,evaluation,create_time,update_time) values ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['edu']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['graduation']."','".$_POST['computer']."','".$_POST['english']."','".$_POST['educational']."','".$_POST['experience']."','".$_POST['evaluation']."',now(),now())";


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

<?php }else {?>
    <script language="javascript">
        alert("操作失败！用户名重复");
        window.history.go(-1);

    </script>
<?php }?>