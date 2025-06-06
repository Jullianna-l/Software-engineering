<?php
session_start();

include("config.php");
$username=$_POST["username"];
$password=$_POST["password"];

$qx=$_POST["qx"];

if($qx=="会员"){

    $sql="select * from user where username='".$username."' and password='".$password."'";

}

if($qx=="公司"){

    $sql="select * from company where username='".$username."' and password='".$password."'";

}

$re = mysqli_query($con,$sql);
$row = mysqli_fetch_array($re);

if($qx=="会员"){

    $flag=$row['id'];

}

if($qx=="公司"){

    $flag=$row['id'];

}



if(!empty($flag)){


    if($row['status']==0){
        ?>
        <script language="javascript">
            alert("帐号已禁用，请联系管理员！");
            window.location="index.php";
            //    window.submit();
        </script>
        <?php
    }


    $_SESSION['username']=$row['username'];
    $_SESSION['password']=$row['password'];
    $_SESSION['name']=$row['name'];

    $_SESSION['id']=$flag;
    $_SESSION['qx']=$qx;

    ?>
    <script language="javascript">
     //   alert("登录成功");
        window.location="index.php";
    //    window.submit();
    </script>
    <?php
}else{
    ?>
    <script language="javascript">
        alert("用户名或密码错误");
        window.location="index.php";
      //  window.submit();
    </script>

    <?php
}
?>