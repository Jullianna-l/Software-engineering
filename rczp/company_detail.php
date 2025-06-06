<?php

include("config.php");
$id=$_GET["id"];
$sqlf="select *  from company where id='".$id."'";

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
    <title>公司信息 - 在线人才招聘</title>
</head>

<body>




<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">公司信息</div></div>
            <ul class="label_pad mTop10"  id="all">

                <TABLE class="table table-hover text-center" >
                    <TBODY>
                    <tr>
                        <td align=middle width=100 height=30>公司名称</td>

                        <td ><?php echo $row['name'] ?></td>
                    </tr>

                    <tr>
                        <td align=middle width=100 height=30>联系电话</td>

                        <td ><?php echo $row['phone'] ?> </td>
                    </tr>
                    <tr>
                        <td align=middle width=100 height=30>地址</td>

                        <td ><?php echo $row['address'] ?></td>
                    </tr>



                    <tr>
                        <td align=middle width=100 >公司介绍</td>

                        <td ><?php echo nl2br($row['intro']) ?>
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
