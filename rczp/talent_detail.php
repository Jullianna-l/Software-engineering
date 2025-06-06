<?php

include("config.php");
$id=$_GET["id"];
$sqlf="select *  from user where id='".$id."'";

$rs=mysqli_query($con,$sqlf);
$row=mysqli_fetch_array($rs);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/main.css" rel="stylesheet" />
    <script  src="js/pagenation.js"></script>
    <script src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
     <script src="js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
    <title>人才信息 - 在线人才招聘</title>
</head>

<body>




<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">人才信息</div></div>
            <ul class="label_pad mTop10"  id="all">

                <TABLE class="table table-hover text-center" >
                    <TBODY>
                    <tr>
                        <td align=middle width=100 >姓名</td>

                        <td ><?php echo $row['name'] ?></td>
                    </tr>

                    <tr>
                        <td align=middle width=100 >联系电话</td>

                        <td ><?php echo $row['phone'] ?></td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >联系地址</td>

                        <td ><?php echo $row['address'] ?></td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >学历</td>

                        <td ><?php echo $row['edu'] ?></td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >年龄</td>

                        <td ><?php echo $row['age'] ?></td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >性别</td>

                        <td ><?php echo $row['gender'] ?></td>

                    </tr>
                    <tr>
                        <td align=middle width=100 >毕业时间</td>

                        <td ><?php echo $row['graduation'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >计算机能力</td>

                        <td ><?php echo $row['computer'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td align=middle width=100 >英语能力</td>

                        <td ><?php echo $row['english'] ?>
                        </td>
                    </tr>


                    <tr>
                        <td align=middle width=100 >教育背景</td>

                        <td ><?php echo nl2br($row['educational']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >工作经历</td>

                        <td ><?php echo nl2br($row['experience']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td align=middle width=100 >自我评价</td>

                        <td ><?php echo nl2br($row['evaluation']) ?>
                        </td>
                    </tr>

                    <tr>
                        <td align=middle width=100 ></td>
                        <td > <input type="button" value="返回" onclick="history.back()">


                        </td>
                    </tr>

                    </TBODY></TABLE>

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
