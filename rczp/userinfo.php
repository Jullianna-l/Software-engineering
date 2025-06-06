<?php
include("config.php");//数据库连接类

if (!$_SESSION['id'] && $_SESSION['qx']!="会员") {
    header("Location: index.php");
    exit;
}
$id=$_SESSION["id"];//获得管理员表主键
$sqlf="select *  from user where id='".$id."'";
$rs=mysqli_query($con,$sqlf);//执行查询
$row=mysqli_fetch_array($rs);//返回结果

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
    <script src="js/pintuer.js"></script>

    <title>个人资料 - 在线人才招聘</title>
</head>

<BODY>
<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">修改资料</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="userinfo_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>

                        <tr>
                            <td align=middle width=100 height=50>用户名</td>

                            <td ><input name="username"  class="input" readonly  type="text" value="<?php echo $row['username'] ?>"  placeholder="输入用户名"  required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>密码</td>

                            <td ><input name="password"  class="input"  type="password"  value="<?php echo $row['password'] ?>"   placeholder="输入密码" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>姓名</td>

                            <td ><input name="name"  class="input"  type="text"  value="<?php echo $row['name'] ?>"  placeholder="输入姓名" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>联系电话</td>

                            <td ><input name="phone"  class="input"  type="text" value="<?php echo $row['phone'] ?>"  placeholder="输入联系电话"  required>&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>联系地址</td>

                            <td ><input name="address"  class="input"  type="text" value="<?php echo $row['address'] ?>"  placeholder="输入联系地址" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>学历</td>

                            <td ><input name="edu"  class="input"  type="text" value="<?php echo $row['edu'] ?>"  placeholder="输入学历" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>年龄</td>

                            <td ><input name="age"  class="input"  type="text" value="<?php echo $row['age'] ?>"  placeholder="输入年龄" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>性别</td>

                            <td >
                                <select name="gender" class="input">
                                    <option value="男" <?php echo $row['gender']=="男"?"selected":"" ?>>男</option>
                                    <option value="女"  <?php echo $row['gender']=="女"?"selected":"" ?> >女</option>
                                </select>
                                &nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>毕业时间</td>

                            <td ><input name="graduation"  class="input"  type="text" value="<?php echo $row['graduation'] ?>"  placeholder="输入毕业时间"  >&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>计算机能力</td>

                            <td ><input name="computer"  class="input"  type="text" value="<?php echo $row['computer'] ?>"  placeholder="输入计算机能力"  >&nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>英语能力</td>

                            <td ><input name="english"  class="input"  type="text" value="<?php echo $row['english'] ?>"  placeholder="输入英语能力"  >&nbsp;
                            </td>
                        </tr>


                        <tr>
                            <td align=middle width=100 height=50>教育背景</td>

                            <td ><textarea name="educational"  rows="5" cols="50" class="input" placeholder="输入教育背景"  ><?php echo $row['educational'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>工作经历</td>

                            <td ><textarea name="experience"  rows="5" cols="50" class="input" placeholder="输入工作经历"  ><?php echo $row['experience'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>自我评价</td>

                            <td ><textarea name="evaluation"  rows="5" cols="50" class="input" placeholder="输入自我评价"  ><?php echo $row['evaluation'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50></td>
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <td >  <input type="submit" class="button bg-main icon-check-square-o" value="提  交" />
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

mysqli_close($con);

?>
</body>
</html>

