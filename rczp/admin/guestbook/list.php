<?php
include("../../config.php");
//留言信息页面

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
?>
<HTML ><HEAD id=Head1><TITLE>留言信息列表</TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, guestbook-scalable=no" />
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="../../css/pintuer.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/pintuer.js"></script>


    <script language="javascript">
        function page1(num){

            form.page.value=num;
            form.action="list.php";
            form.submit();
        }

    </script>

</HEAD>
<BODY>
<div class="topsearch">
    <form action="list.php" method="get" id="spform" name="spform">
        <input type="text" value="" class="tetPut" name="keyword"  placeholder="输入关键字" />
        <input  type="submit" class="tetBut" value=""/>
    </form>
</div>

<div style="clear: both"></div>

<FORM name="form" method="post" action="" >
    <input type="hidden" name="page" value="1">
    <div class="panel admin-panel">

        <div class="panel-head"><strong class="icon-reorder"> 留言列表</strong> </div>
        <div class="padding border-bottom">
        </div>
        <table class="table table-hover text-center">
            <tr>

                <th>用户名</th>


                <th>留言</th>

                <th>添加时间</th>

                <th width="310">操作</th>
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

            $keyword=$_GET["keyword"];


            $query1="select count(*) as total from guestbook  where 1=1  ";


            if(!empty($keyword)){
                $sql=$sql." and (   username like '%".$keyword."%' or  content like '%".$keyword."%' )  ";
                $query1=$query1." and (   username like '%".$keyword."%' or  content like '%".$keyword."%' )  ";

            }


            $page_size=10;     //每页显示10条记录

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
                        <td  align="center" height="28"  ><?=$row['username']?></td>

                        <td  align="center" height="28"  ><?=$row['content']?></td>
                        <td  align="center" height="28"  ><?=$row['create_time']?></td>


                        <td>
                            <div class="button-group">
                                <a href="delete.php?id=<?=$row['id']?>" class="button border-red" onClick="javascript:if(confirm('是否删除')){return true;}else{return false;}">删除</a>
                            </div>
                        </td>

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
    </div>







</FORM></BODY></HTML>
<?php

mysqli_close($con);

?>
