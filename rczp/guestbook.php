<?php

include("config.php");

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
    <title>留言板 - 在线人才招聘</title>
</head>

<body>



<script language="javascript">
    function page1(num){

        form.page.value=num;
        form.action="guestbook.php";
        form.submit();
    }

</script>
<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">留言板</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form name="form" method="post"  action="">

                    <input type="hidden" name="page" value="1">
                    <table width="100%"  border="1" cellspacing="0" class="table table-hover text-center">
                        <tr>

                            <th width="60%">留言</th>

                            <th width="20%">用户</th>

                            <th width="20%">时间</th>

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


                        $sql="select * from guestbook where 1=1 ";//拼接留言sql语句

                        $page_size=10;     //每页显示10条记录
                        $query1="select count(*) as total from guestbook ";

                        $result1=mysqli_query($con,$query1);       //查询总的记录条数
                        $row1=mysqli_fetch_array($result1);
                        $message_count=$row1['total'];
                        $page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
                        $offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环


                        $result=mysqli_query($con,$sql." order by id desc limit $offset, $page_size");
                        $i=1;
                        while($row=mysqli_fetch_array($result)){

                        ?>
                                <tr>
                                    <td  align="left" height="28"  ><?=$row['content']?></td>

                                    <td  height="28"  ><?=$row['username']?></td>

                                    <td  height="28"  ><?=$row['create_time']?></td>



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

?>



</body>
</html>
