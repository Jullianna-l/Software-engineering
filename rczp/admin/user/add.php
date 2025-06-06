<?php

include("../../config.php");

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
?>
<HTML ><HEAD id=Head1><TITLE>添加会员</TITLE>
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加会员</strong></div>
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

