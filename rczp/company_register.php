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
    <title>公司注册-在线人才招聘</title>
</head>

<body>




<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">公司注册</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form class="form" name="form1" method="post" action="companyregister_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>

                        <tr>
                            <td align=middle width=100 height=30>用户名</td>

                            <td ><input name="username"  class="input"  type="text" value=""  placeholder="输入用户名"  required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>密码</td>

                            <td ><input name="password"  class="input"  type="password" value=""  placeholder="输入密码" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>公司名称</td>

                            <td ><input name="name"  class="input"  type="text" value=""  placeholder="输入公司名称" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=30>联系电话</td>

                            <td ><input name="phone"  class="input"  type="text" value=""  placeholder="输入联系电话"  required>&nbsp;
                                <font color="red">*</font> </td>
                        </tr>
                        <tr>
                            <td align=middle width=100 height=30>地址</td>

                            <td ><input name="address"  class="input"  type="text" value=""  placeholder="输入联系地址" required >&nbsp;
                                <font color="red">*</font> </td>
                        </tr>

                        <tr>
                            <td align=middle width=100 height=50>公司介绍</td>

                            <td ><textarea name="intro"  rows="5" cols="55" class="input" required placeholder="输入公司介绍"  ></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td align=middle width=100 height=30></td>
                            <td ><input type="submit" value="注册">&nbsp;
                                <font color="red">*</font> </td>
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
