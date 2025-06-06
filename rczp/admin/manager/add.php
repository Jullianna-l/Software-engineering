<?php

include("../../config.php");

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
?>
<HTML ><HEAD id=Head1><TITLE>添加管理员</TITLE>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="../../css/pintuer.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/pintuer.js"></script>




</HEAD>
<BODY>

<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加管理员</strong></div>
    <div class="body-content">
        <FORM name="form" method="post" action="add_do.php" class="form-x" >
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
                    <td align=middle width=100 height=50></td>
                    <input type="hidden" name="id" value="">
                    <td >
                        <input type="submit"  value="提  交" />
                        <input type="reset"  value="重  置" />
                        <input type="button" value="返回" onclick="history.back()">


                    </td>
                </tr>



                </TBODY></TABLE>
        </form>
    </div>
</div>





















</BODY></HTML><?php

mysqli_close($con);

?>

