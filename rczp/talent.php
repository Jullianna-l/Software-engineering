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
    <title>人才信息 - 在线人才招聘</title>
</head>

<body>

<div class="top">
    <div class="wt1002">
        <div class="r">
            <div class="toplink">
            </div>
            <div class="topsearch">
              <form action="talent.php" method="get" id="spform" name="spform">
                    <input type="text" value="" class="tetPut" name="rencai"  placeholder="输入人才" />
                  <input  type="submit" class="tetBut" value=""/>
                </form>

            </div>
        </div>
        <div class="l">
            <a href="" title="LOGO"><img src="images/logo1.gif" /></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="menu">
    <div class="wt1002">
        <ul id="ulMenu">
            <li><a href="index.php">首页</a></li>
            <li><a href="job.php">招聘信息</a></li>
            <li><a href="talent.php">人才信息</a></li>
            <li><a href="company.php">公司信息</a></li>
            <li><a href="guestbook.php">留言板</a></li>
        </ul>
    </div>
</div>
<div class="wt1002">
    <div id="full-screen-slider">
        <ul id="slides">
            <li style="background:url('images/1.jpg') no-repeat center top"><a href="" ></a></li>

        </ul>
    </div>
</div>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">人才信息</div></div>
            <ul class="label_pad mTop10"  id="all">


                <?php


                $sql="select * from user where status=1  ";

                $zpgw=$_GET["rencai"];

                if(!empty($zpgw)){
                    $sql=$sql." and (   username like '%".$zpgw."%' or  name like '%".$zpgw."%' or edu like '%".$zpgw."%' or computer like '%".$zpgw."%'  or english like '%".$zpgw."%'   or educational like '%".$zpgw."%'   or experience like '%".$zpgw."%')  ";
                }

                $sql=$sql." order by id desc" ;


                $result=mysqli_query($con,$sql);
                $i=1;
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <li><span><?=$row['create_time']?></span><a href="talent_detail.php?id=<?=$row['id']?>"><?=$row['name']?> <?=$row['edu']?></a></li>
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
