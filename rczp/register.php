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
    <script src="js/pintuer.js"></script>
    <title>注册-在线人才招聘</title>
</head>

<body>
<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">会员注册</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="register_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>

                        <tr>
                            <td align=middle width=100 height=50>用户名</td>

                            <td ><input name="username"  class="input"  type="text" value=""  placeholder="输入用户名"  required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>密码</td>

                            <td ><input name="password"  class="input"  type="password" value=""  placeholder="输入密码" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>姓名</td>

                            <td ><input name="name"  class="input"  type="text" value=""  placeholder="输入姓名" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>联系电话</td>

                            <td ><input name="phone"  class="input"  type="text" value=""  placeholder="输入联系电话"  required>&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>联系地址</td>

                            <td ><input name="address"  class="input"  type="text" value=""  placeholder="输入联系地址" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>学历</td>

                            <td ><input name="edu"  class="input"  type="text" value=""  placeholder="输入学历" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>年龄</td>

                            <td ><input name="age"  class="input"  type="text" value=""  placeholder="输入年龄" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>性别</td>

                            <td >
                                <select name="gender" class="input">
                                    <option value="男">男</option>
                                    <option value="女">女</option>
                                </select>
                                &nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>毕业时间</td>

                            <td ><input name="graduation"  class="input"  type="text" value=""  placeholder="输入毕业时间"  >&nbsp;
                                 </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>计算机能力</td>

                            <td ><input name="computer"  class="input"  type="text" value=""  placeholder="输入计算机能力"  >&nbsp;
                                 </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>英语能力</td>

                            <td ><input name="english"  class="input"  type="text" value=""  placeholder="输入英语能力"  >&nbsp;
                                </td>
                        </tr>


                        <tr>
                            <td align=middle width=100 height=50>教育背景</td>

                            <td ><textarea name="educational"  rows="5" cols="50" class="input" placeholder="输入教育背景"  ></textarea>
                                 </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>工作经历</td>

                            <td ><textarea name="experience"  rows="5" cols="50" class="input" placeholder="输入工作经历"  ></textarea>
                                 </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50>自我评价</td>

                            <td ><textarea name="evaluation"  rows="5" cols="50" class="input" placeholder="输入自我评价"  ></textarea>
                                 </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=50></td>
                            <input type="hidden" name="id" value="">
                            <td ><input type="submit" value="注册">&nbsp;
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
