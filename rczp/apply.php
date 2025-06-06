<?php
include("config.php");//数据库连接类

$id=$_GET["id"];

$sqlf="select *  from job where id='".$id."'";
$rs=mysqli_query($con,$sqlf);//执行查询
$row=mysqli_fetch_array($rs);//返回结果



if (!$_SESSION['id'] && $_SESSION['qx']!="会员") { ?>
    <script language="javascript">
        alert("请先登录会员！");
        window.history.go(-1);
    </script>
<?php

    exit;
}

$sqlf="select *  from user where id='".$_SESSION["id"]."'";
$rs=mysqli_query($con,$sqlf);//执行查询
$user=mysqli_fetch_array($rs);//返回结果

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/main.css" rel="stylesheet" />
    <script language="javascript" src="js/pagenation.js"></script>
    <script language="javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
     <script src="js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
     <script src="js/pintuer.js"></script>

    <title>申请职位 - 在线人才招聘</title>
</head>

<BODY>
<?php

include("header.php");

?>
<script>

    function showwin(url){
        window.open(url,"_blank","height=150,width=250,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,left=250,top=180,");
    }
</script>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">申请职位</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="apply_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>

                        <tr>
                            <td align=middle width=100 height=50>职位</td>

                            <td ><?php echo $row['title'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>上传简历</td>

                            <td ><input required name="file" class="input" type="text" id="file" value=""  >
                            <br>    <button type="button" class="btn btn-success"  type="button" class="btn" style="cursor:pointer;font-size: 16px; padding: 5px 10px" onClick="showwin('upload.php?type=2&fz=fs&input=file&myform=form1&filepath=upload/user');"  >上传</button>
                                (文件格式为docx,doc,pdf)
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>备注</td>

                            <td ><textarea name="content"  rows="5" cols="50" class="input" placeholder="输入备注"  ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50></td>
                            <input type="hidden" name="job_id" value="<?php echo $row['id'] ?>">
                            <input type="hidden" name="company_id" value="<?php echo $row['company_id'] ?>">
                            <td >  <input type="submit" class="button bg-main icon-check-square-o" value="提  交" />
                                <input type="reset" class="button bg-main icon-check-square-o" value="重  置" />
                                <input type="button" value="返回" onclick="history.back()">
                            </td>
                        </tr>



                        </TBODY></TABLE>


                </form>

            </ul>
            <div class="clear"></div>
            <div class="page" id="page">


            </div>
        </div>
    </div>



    <?php

    include("left.php");

    ?>






    <div class="clear"></div>
</div>
<div class="clear"></div>


<?php

include("footer.php");

mysqli_close($con);

?>
</body>
</html>

