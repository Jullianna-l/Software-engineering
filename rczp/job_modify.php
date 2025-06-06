<?php

include("config.php");

if (!$_SESSION['id'] && $_SESSION['qx']!="公司") {
    header("Location: index.php");
    exit;
}

$id=$_GET["id"];
$sqlf="select *  from job where id='".$id."'";
$rs=mysqli_query($con,$sqlf);//执行查询
$row=mysqli_fetch_array($rs);//返回结果

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/main.css" rel="stylesheet" />
    <script  src="js/pagenation.js"></script>
    <script src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/lanrenzhijia.css" media="screen" />
    <script type="text/javascript" src="js/lanrenzhijia.js"></script>
    <script src="js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
    <script src="js/pintuer.js"></script>
    <title>发布招聘-在线人才招聘</title>
</head>

<body>

<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">编辑招聘</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="job_modify_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>
                        <tr>
                            <td align=middle width=100 height=30>招聘岗位</td>

                            <td ><input name="title"  class="input"  type="text" value="<?php echo $row['title'] ?>"  placeholder="输入招聘岗位"  required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>薪资</td>

                            <td ><input name="salary"  class="input"  type="text" value="<?php echo $row['salary'] ?>"  placeholder="输入薪资" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>待遇</td>

                            <td ><textarea name="treatment"  rows="5" cols="55" class="input" required placeholder="输入待遇" required ><?php echo $row['treatment'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>招聘要求</td>

                            <td ><textarea name="requirement"  rows="5" cols="55" class="input" required placeholder="输入招聘要求" required ><?php echo $row['requirement'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>状态</td>

                            <td >
                                <select name="status" class="input">
                                    <option value="1"  <?php echo $row['status']=="1"?"selected":"" ?>>已审核</option>
                                    <option value="0"  <?php echo $row['status']=="0"?"selected":"" ?>>待审核</option>
                                </select>
                                &nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30></td>
                            <td >     <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="submit" class="button bg-main icon-check-square-o" value="提  交" />
                                <input type="reset" class="button bg-main icon-check-square-o" value="重  置" />
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

?>



</body>
</html>
