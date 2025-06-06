<?php
$username=$_SESSION["username"];
$qx=$_SESSION["qx"];
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="fwmain_nleft l mTop10">
    <div class="label_head"><div class="label_title">系统用户</div></div>
    <div class="label_contents">


        <?php
        if(empty($username)){
            ?>

            <form class="form"  name="lgform" method="post" action="check.php">



                <li style="margin-bottom: 10px">用户名&nbsp;<input class="input" type="text" name="username" required="required" style="width: 170px" oninvalid="setCustomValidity('请输入用户名')" ></li>
                <li style="margin-bottom: 10px">密&nbsp;&nbsp;&nbsp;&nbsp;码<input class="input"  type="password" name="password" required="required"  style="width: 170px"  oninvalid="setCustomValidity('请输入密码')" ></li>

                <li style="margin-bottom: 10px">权&nbsp;&nbsp;&nbsp;&nbsp;限<select class="input"  name="qx" style="width: 190px">
                        <option value="会员">会员</option>
                        <option value="公司">公司</option>
                    </select>
                </li>
                <li> <div align="center" style="margin-top: 20px"><input type="submit" value="登录"><br><br>
                        <input type="button" value="会员注册" onclick="window.location='register.php'">
                        <input type="button" value="公司注册" onclick="window.location='company_register.php'">

                    </div></li>

            </form>

            <?php
        }else {

            ?>

            <li>当前登录人：<?=$username?></li>



            <?php if($qx=="公司"){ ?>

                <li><a href="companyinfo.php">公司资料</a></li>
                <li><a href="myjob.php">我的招聘</a></li>
                <li><a href="job_add.php">发布招聘</a></li>
                <li><a href="myapply.php">应聘记录</a></li>
            <?php }else{ ?>

                <li><a href="userinfo.php">个人资料</a></li>
                <li><a href="myapplication.php">我的求职</a></li>
            <?php } ?>

            <li><a href="guestbookadd.php">发布留言</a></li>
            <li><a href="out.php">退出</a></li>


            <?php
        }
        ?>





    </div>



    <div class="label_head mTop10"><div class="label_title">最新招聘</div></div>
    <div class="label_contents">
        <ul class="label_pad mTop10">
            <?php

            $sql="select * from job where status=1 order by id desc limit 0,5";

            $result=mysqli_query($con,$sql);
            $i=1;
            while($row=mysqli_fetch_array($result)){
                ?>
                <div><a href="job.php?id=<?=$row['id']?>"><?=$row['title']?></a></div>

                <?php
                $i=$i+1;
            }



            ?>

        </ul>
    </div>
</div>
	
	
