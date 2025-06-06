<?php
include("config.php");//数据库连接类

if (!$_SESSION['id'] && $_SESSION['qx']!="会员") {
    header("Location: index.php");
    exit;
}
$id=$_SESSION["id"];


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
    <title>我的求职-在线人才招聘</title>
</head>

<body>

<?php

include("header.php");

?>
<script language="javascript">
    function page1(num){

        form.page.value=num;
        form.action="myapplication.php";
        form.submit();
    }

</script>
<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">我的求职</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form name="form" method="post"  action="">

                    <input type="hidden" name="page" value="1">
                    <table class="table table-hover text-center">
                        <tr>
                            <th width="150">应聘岗位</th>
                            <th width="150">公司</th>
                            <th width="150">简历</th>
                            <th width="150">留言</th>
                            <th width="180">回复</th>
                            <th width="80">状态</th>
                            <th  width="100">应聘时间</th>
                        </tr>
                        <?php
                        $page=$_GET["page"];//获得当前页面的页数

                        if($page){

                        }else{

                            $page=$_POST["page"];
                            if($page){

                            }else{
                                $page=1;
                            }


                        }

                        $sql="select * from application where user_id=".$_SESSION["id"];//拼接求职信息sql语句

                        $i=1;



                            $page_size=10;     //每页显示10条记录
                            $query1="select count(*) as total from application where user_id=".$_SESSION["id"];

                            $result1=mysqli_query($con,$query1);       //查询总的记录条数
                            $row1=mysqli_fetch_array($result1);
                            $message_count=$row1['total'];
                            $page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
                            $offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环


                            $status=["待处理","同意","拒绝"];

                        $result=mysqli_query($con,$sql." order by id desc limit $offset, $page_size");
                        $i=1;
                        while($row=mysqli_fetch_array($result)){

                                //获取job
                                $query2="select * from job where id=".$row["job_id"];
                                $result2=mysqli_query($con,$query2);
                                $job=mysqli_fetch_array($result2);


                                //获取company
                                $query3="select * from company where id=".$row["company_id"];
                                $result3=mysqli_query($con,$query3);
                                $company=mysqli_fetch_array($result3);

                                ?>
                                <tr>
                                    <td  align="center" height="28"  ><a href="job_detail.php?id=<?=$job['id']?>"><?=$job['title']?></a> </td>



                                    <td  align="center" height="28"  ><a href="company_detail.php?id=<?=$row['company_id']?>"><?=$company['name']?></a></td>

                                    <td  align="center" height="28"  >  <a href='<?=$row["file"]?>'  target="_blank">点击下载</a>
                                    </td>
                                    <td  align="center" height="28"  ><?=$row['content']?></td>

                                    <td  align="center" height="28"  ><?=$row['remark']?></td>

                                    <td  align="center" height="28"  ><?=$status[$row['status']]?></td>

                                    <td  align="center" height="28"  ><?=$row['create_time']?></td>



                                </tr>

                                <?php
                                $i=$i+1;

                        }


                        ?>

                        <tr>
                            <td colspan="18"><div class="pagelist">	页次：<?php echo $page;?>/<?php echo $page_count;?>页
                                    记录：<?php echo $message_count;?> 条&nbsp;

                                    <?php
                                    if($page!=1)
                                    {
                                        echo  "<a  href=\"#\" onclick=\"page1(1)\">首页</a>&nbsp;";
                                        echo "<a   href=\"#\" onclick=\"page1(".($page-1).")\">上一页</a>&nbsp;";
                                    }
                                    if($page<$page_count)
                                    {
                                        echo "<a href=\"#\" onclick=\"page1(".($page+1).")\">下一页</a>&nbsp;";
                                        echo  "<a href=\"#\" onclick=\"page1(".$page_count.")\" >尾页</a>";
                                    }
                                    ?></div></td>
                        </tr>
                    </table>

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
