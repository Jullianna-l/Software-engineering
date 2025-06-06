<?php

include("../config.php");
$qx=$_SESSION["qx"];

?>
<html>
<head>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="../css/pintuer.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">


<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1>人才招聘网站后台</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="../index.php" target=""><span class="icon-home"></span> 前台首页</a>
        &nbsp;&nbsp;<a class="button button-little bg-red" href="../out.php"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>


    <?php
    if($qx=="管理员"){
        ?>
        <h2><span class="icon-pencil-square-o"></span>会员管理</h2>
        <ul style="display:none">
            <li><a href="user/add.php" target="right"><span class="icon-caret-right"></span>添加会员</a></li>
            <li><a href="user/list.php" target="right"><span class="icon-caret-right"></span>会员管理</a></li>

        </ul>
        <h2><span class="icon-pencil-square-o"></span>公司管理</h2>
        <ul style="display:none">
            <li><a href="company/add.php" target="right"><span class="icon-caret-right"></span>添加公司</a></li>
            <li><a href="company/list.php" target="right"><span class="icon-caret-right"></span>公司管理</a></li>

        </ul>
        <h2><span class="icon-pencil-square-o"></span>管理员管理</h2>
        <ul style="display:none">
            <li><a href="manager/add.php" target="right"><span class="icon-caret-right"></span>添加管理员</a></li>
            <li><a href="manager/list.php" target="right"><span class="icon-caret-right"></span>管理员管理</a></li>

        </ul>

        <h2><span class="icon-pencil-square-o"></span>招聘管理</h2>
        <ul style="display:none">
            <li><a href="job/list.php" target="right"><span class="icon-caret-right"></span>招聘管理</a></li>

        </ul>
        <h2><span class="icon-pencil-square-o"></span>应聘管理</h2>
        <ul style="display:none">
            <li><a href="application/list.php" target="right"><span class="icon-caret-right"></span>应聘管理</a></li>

        </ul>


        <h2><span class="icon-pencil-square-o"></span>留言管理</h2>
        <ul style="display:none">

            <li><a href="guestbook/list.php" target="right"><span class="icon-caret-right"></span>留言管理</a></li>

        </ul>
        <?php
    }
    ?>




    <h2><span class="icon-pencil-square-o"></span>个人信息</h2>
    <ul style="display:none">
        <?php
        if($qx=="管理员"){
            ?>
            <li><a href="../manager/modify.php" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
        <?php }?>

        <?php
        if($qx=="公司"){
            ?>
            <li><a href="../company/modify.php" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
        <?php }?>
        <?php
        if($qx=="会员"){
            ?>
            <li><a href="../user/modify.php" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
        <?php }?>
    </ul>

</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="#" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>

</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="user/list.php" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
    <p>欢迎&nbsp;<?=$_SESSION['username']?></p>
</div>


</body></HTML>