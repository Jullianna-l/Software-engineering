<?php
include("config.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$content=$_POST["content"];//留言
$username=$_POST["username"];//用户


$sql="insert into guestbook (content,username,create_time) values ('".$content."','".$username."',now())";

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
    window.location="guestbook.php";

</script>