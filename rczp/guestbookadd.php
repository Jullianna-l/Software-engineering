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
    <title>留言 - 在线人才招聘</title>
</head>

<body>




<?php

include("header.php");

?>

<div class="clear"></div>
<div class="wt1002 fwmain">
    <div class="fwmain_nright r mTop10">
        <div class="label">
            <div class="label_head"><div class="label_title">留言发布</div></div>
            <ul class="label_pad mTop10"  id="all">
                <form  class="form"  method="post" action="guestbookadd_do.php">
                    <TABLE class="table table-hover text-center" >
                        <TBODY>

                        <tr>
                            <th>留言</th>
                            <td>
                                <textarea class="input" name="content" cols="80" rows="5" required></textarea>

                            </td>
                        </tr>
                        <tr>
                            <th>用户</th>
                            <td><input class="input" type="text" name="username" value="<?=$_SESSION["name"]?>" required></td>
                        </tr>


                        <tr>
                            <td align=middle width=100 height=30></td>
                            <td ><input type="submit" value="发布留言">&nbsp;
                                <input type="button" value="返回" onclick="history.back()">
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
