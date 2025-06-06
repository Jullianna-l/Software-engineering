<?php

include("config.php");
$id=$_GET["id"];
$sqlf="select *  from job where id='".$id."'";

$rs=mysqli_query($con,$sqlf);
$row=mysqli_fetch_array($rs);

$sqlf2="select *  from company where id='".$row['company_id']."'";
$rs2=mysqli_query($con,$sqlf2);
$row2=mysqli_fetch_array($rs2);


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
    <title>招聘信息 - 在线人才招聘</title>
</head>

<body>




<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">招聘信息</div></div>
            <ul class="label_pad mTop10"  id="all">

                <TABLE class="table table-hover text-center" >
                    <TBODY>

                    <tr>
                        <th>招聘岗位</th>
                        <td><?=$row['title']?></td>
                    </tr>
                    <tr>
                        <th>薪资</th>
                        <td><?=$row['salary']?></td>
                    </tr>
                    <tr>
                        <th>待遇</th>
                        <td><?=nl2br($row['treatment'])?></td>
                    </tr>
                    <tr>
                        <th>招聘要求</th>
                        <td><?=nl2br($row['requirement'])?></td>
                    </tr>
                    <tr>
                        <th>发布时间</th>
                        <td><?=$row['create_time']?></td>
                    </tr>
                    <tr>
                        <th>公司</th>
                        <td><a href="company_detail.php?id=<?=$row2['id']?>"><?=$row2['name']?></a> </td>
                    </tr>

                    <tr>
                        <td align=middle width=100 height=50></td>
                         <td ><input type="button" value="申请" onclick="window.location='apply.php?id=<?=$row['id']?>'">
                            <input type="button" value="返回" onclick="history.back()">


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
