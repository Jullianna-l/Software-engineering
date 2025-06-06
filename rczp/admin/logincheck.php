<?php

include("../config.php");

$username=$_POST["username"];
$password=$_POST["password"];


$sqlf="select *  from admin where  username='".$username."' and password='".$password."'";

$rs=mysqli_query($con,$sqlf);
$row=mysqli_fetch_array($rs);
$flag=$row['id'];
$zsxm=$row['name'];

if(!empty($flag)){
    $_SESSION['id']= $flag;
    $_SESSION['login']="ok";
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['qx']="管理员";
    $_SESSION['xm']=$zsxm;
    ?>
    <script language="javascript">

        window.location="index.php";
    </script>
    <?php
}else{

    ?>
    <script language="javascript">
        alert("用户或者密码不正确，请重新填写");
        window.location="login.php";
    </script>
    <?php


}


?>