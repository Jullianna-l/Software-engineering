<?php

include("config.php");

if (!$_SESSION['id'] && $_SESSION['qx']!="公司") {
    header("Location: index.php");
    exit;
}

$id=$_GET["id"];
$sqlf="select *  from application where id='".$id."'";
$rs=mysqli_query($con,$sqlf);//执行查询
$row=mysqli_fetch_array($rs);//返回结果

//获取job
$query2="select * from job where id=".$row["job_id"];
$result2=mysqli_query($con,$query2);
$job=mysqli_fetch_array($result2);


//获取user
$query3="select * from user where id=".$row["user_id"];
$result3=mysqli_query($con,$query3);
$user=mysqli_fetch_array($result3);


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
    <title>应聘记录-在线人才招聘</title>
</head>

<body>

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
            <div class="label_head"><div class="label_title">编辑应聘</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="apply_modify_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>
                        <tr>
                            <td align=middle width=100 height=30><h3>招聘信息</h3></td>

                            <td ></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>岗位</td>

                            <td ><?php echo $job['title'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>薪资</td>

                            <td ><?php echo $job['salary'] ?></td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>待遇</td>

                            <td ><?php echo nl2br($job['treatment']); ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>招聘要求</td>

                            <td ><?php echo nl2br($job['requirement']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30><h3>应聘者信息</h3></td>

                            <td ></td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>姓名</td>

                            <td ><?php echo $user['name'] ?></td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>联系电话</td>

                            <td ><?php echo $user['phone'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>联系地址</td>

                            <td ><?php echo $user['address'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>学历</td>

                            <td ><?php echo $user['edu'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>年龄</td>

                            <td ><?php echo $user['age'] ?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>性别</td>

                            <td ><?php echo $user['gender']?></td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>毕业时间</td>

                            <td ><?php echo $user['graduation'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>计算机能力</td>

                            <td ><?php echo nl2br($user['computer']) ?></td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>英语能力</td>

                            <td ><?php echo nl2br($user['english']) ?>
                            </td>
                        </tr>


                        <tr>
                            <td align=middle width=100 height=50>教育背景</td>

                            <td ><?php echo nl2br($user['educational']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>工作经历</td>

                            <td ><?php echo nl2br($user['experience']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>自我评价</td>

                            <td ><?php echo nl2br($user['evaluation']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>简历</td>

                            <td >
                                <?php if($row["file"]){ ?>  <a href='<?=$row["file"]?>'  target="_blank">点击下载</a><?php } ?>

                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>应聘留言</td>

                            <td ><?php echo nl2br($row['content']) ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>应聘时间</td>

                            <td ><?php echo $row['create_time'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>状态</td>

                            <td >
                                <select name="status" class="input">
                                    <option value="0" <?php echo $row['status']=="0"?"selected":"" ?>>待处理</option>
                                    <option value="1"  <?php echo $row['status']=="1"?"selected":"" ?> >同意</option>
                                    <option value="2"  <?php echo $row['status']=="2"?"selected":"" ?> >拒绝</option>
                                </select>
                                &nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>回复</td>

                            <td ><textarea name="remark"  rows="5" cols="50" class="input" placeholder="输入回复"  ><?php echo $row['remark'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30></td>
                            <td >     <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="submit" class="button bg-main icon-check-square-o" value="提  交" />
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

?>



</body>
</html>
