<?php

include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/main.css" rel="stylesheet" />
    <script language="javascript" src="js/pagenation.js"></script>
    <script language="javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/lanrenzhijia.css" media="screen" />
    <script type="text/javascript" src="js/lanrenzhijia.js"></script>
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


                <?php


                $sql="select * from job where status=1  ";

                $zpgw=$_GET["zpgw"];

                if(!empty($zpgw)){
                    $sql=$sql." and ( title like '%".$zpgw."%' or treatment like '%".$zpgw."%'  or requirement like '%".$zpgw."%')  ";
                }

                $sql=$sql." order by id desc" ;


                $result=mysqli_query($con,$sql);
                $i=1;
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <li><span><?=$row['create_time']?></span><a href="job_detail.php?id=<?=$row['id']?>"><?=$row['title']?></a></li>
                    <?php
                    $i=$i+1;
                }



                ?>

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

<script>
    var zz=getzz()


    if(zz!=""){
        var pageno=1 ; //当前页
        var pagesize=20; //每页多少条信息
        if(zz.length%pagesize==0){
            var  pageall =zz.length/pagesize ;
        }else{
            var  pageall =parseInt(zz.length/pagesize)+1;
        }   //一共多少页
        change(1);

    }
</script>


<?php

include("footer.php");

?>



</body>
</html>
