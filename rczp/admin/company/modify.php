<?php
include("../../config.php");

if (!$_SESSION['id'] && $_SESSION['qx']!="管理员") {
    header("Location: ../login.php");
    exit;
}
?>
<HTML ><HEAD id=Head1><TITLE>公司</TITLE>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="../../css/pintuer.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/pintuer.js"></script>

</HEAD>
<BODY>


<?php


$id=$_GET["id"];//获得公司表主键
$sqlf="select *  from company where id='".$id."'";

$rs=mysqli_query($con,$sqlf);//执行查询
$row=mysqli_fetch_array($rs);//返回结果



?>

<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改公司</strong></div>
    <div class="body-content">
        <FORM name="form" method="post" action="modify_do.php" class="form-x" >
            <TABLE class="table table-hover text-center" >
                <TBODY>

                <tr>
                    <td align=middle width=100 height=30>用户名</td>

                    <td ><input name="username"  readonly class="input"  type="text" value="<?php echo $row['username'] ?>"  placeholder="输入用户名"  required >&nbsp;
                        <font color="red">*</font> </td>
                </tr>
                <tr>
                    <td align=middle width=100 height=30>密码</td>

                    <td ><input name="password"  class="input"  type="password" value="<?php echo $row['password'] ?>"  placeholder="输入密码" required >&nbsp;
                        <font color="red">*</font> </td>
                </tr>
                <tr>
                    <td align=middle width=100 height=30>公司名称</td>

                    <td ><input name="name"  class="input"  type="text" value="<?php echo $row['name'] ?>"  placeholder="输入公司名称" required >&nbsp;
                        <font color="red">*</font> </td>
                </tr>

                <tr>
                    <td align=middle width=100 height=30>联系电话</td>

                    <td ><input name="phone"  class="input"  type="text" value="<?php echo $row['phone'] ?>"  placeholder="输入联系电话"  required>&nbsp;
                        <font color="red">*</font> </td>
                </tr>
                <tr>
                    <td align=middle width=100 height=30>地址</td>

                    <td ><input name="address"  class="input"  type="text" value="<?php echo $row['address'] ?>"  placeholder="输入联系地址" required >&nbsp;
                        <font color="red">*</font> </td>
                </tr>

                <tr>
                    <td align=middle width=100 height=50>公司介绍</td>

                    <td ><textarea name="intro"  rows="5" cols="55" class="input" required placeholder="输入公司介绍"  ><?php echo $row['intro'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td align=middle width=100 height=50>状态</td>

                    <td >
                        <select name="status" class="input">
                            <option value="1" <?php echo $row['status']=="1"?"selected":"" ?>>正常</option>
                            <option value="0"  <?php echo $row['status']=="0"?"selected":"" ?> >禁用</option>
                        </select>
                        &nbsp;
                        <font color="red">*</font> </td>
                </tr>
                <tr>
                    <td align=middle width=100 height=50>添加时间</td>

                    <td ><?php echo $row['create_time'] ?></td>
                </tr>
                <tr>
                    <td align=middle width=100 height=50>更新时间</td>

                    <td ><?php echo $row['update_time'] ?></td>
                </tr>
                <tr>
                    <td align=middle width=100 height=50></td>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <td >  <input type="submit"  value="提  交" />
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

