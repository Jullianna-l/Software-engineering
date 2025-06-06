<?php
include("config.php");
include("include/function.php");

if (!$_SESSION['id']) {
    header("Location: index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$filetype="";
$input="";
$filepath="";
$fileSize="";
$myform="";
$thumbh="";
$thumbw="";
if(isset($_REQUEST["type"]))$filetype=$_REQUEST["type"];
if(isset($_REQUEST["fz"]))$fz=$_REQUEST["fz"];
if(isset($_REQUEST["input"]))$input=$_REQUEST["input"];
if(isset($_REQUEST["filepath"]))$filepath=$_REQUEST["filepath"];
if(isset($_REQUEST["fileSize"]))$fileSize=$_REQUEST["fileSize"];
if(isset($_REQUEST["myform"]))$myform=$_REQUEST["myform"];
if(isset($_REQUEST["thumbw"]))$thumbw=$_REQUEST["thumbw"];
if(isset($_REQUEST["thumbh"]))$thumbh=$_REQUEST["thumbh"];

if(isset($_REQUEST["thumbw2"]))$thumbw2=$_REQUEST["thumbw2"];
if(isset($_REQUEST["thumbh2"]))$thumbh2=$_REQUEST["thumbh2"];

if ((isset($_POST['motion'])) && ($_POST['motion'] == "upload")){
srand((double)microtime()*1000000);
$randval = rand();
$f=&$_FILES['fileField'];
if (true){
	
$f['name']=substr($f['name'],strrpos($f['name'],'.')+1);
	
$f['name']=$randval.".".$f['name'];
 $s="4003200000";
 
 if(isset($fileSize)&&$fileSize!="")$s=$fileSize;

 if ($f['size']<$s){
  $dest_dir=$filepath;//设定上传目录
   $b=date("ymdhis")."_".$f['name'];
  $dest=$dest_dir.'/'.$b;
  //if(!IS_FORMAL){
    $f['tmp_name'] = str_replace('\\\\', '\\',$f['tmp_name']);
  //}
  $r=move_uploaded_file($f['tmp_name'],$dest);
  chmod($dest, 0755);//设定上传的文件的属性
     if($thumbw2&&$thumbh2){
	 
	  $dest1=$dest;
	  $bbb=CroppedThumbnail($dest1,$thumbw2,$thumbh2,'',0);
	  
	 
	  
  }
 
    if($thumbw&&$thumbh){
	 
	 
	  $b=CroppedThumbnail($dest,$thumbw,$thumbh,'');
	  
	 
	  
  }

  
  $jj= round($f['size']*0.001);
  $sz=$jj;
  
  
		  if($fz=="fs"){
		  ?>
		 
		  <script>window.close();window.opener.document.getElementById('<?php echo $input?>').value='<?php echo $filepath."/".$b?>';</script>
		
		  <?php 
		  }else{?>
		  
		  <script>window.close();window.opener.document.getElementById('<?php echo $input?>').value='<?php echo $filepath."/".$b?>';window.close();</script>
		
		  
		  <?php
		  
		  
		  }
  
  }else{ 
    echo "文件大小超过规定，上传错误";
	
  }
  
  
  }
   else
   {echo "上传错误";}
   }
   
   
?> 
<title>Upload</title>
<style type="text/css">
<!--
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF6600;
	text-decoration: none;
	font-weight: bold;
}
input {
	font-family: "宋体", "黑体", Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
	text-decoration: none;
	background-color: #F2F2F2;
	width: 230px;
}
-->
</style>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/overpic.js" type="text/javascript"></script>
<script>function isgoodok(){return true;}
window.onerror=isgoodok;
</script>

</head>
<?php 
function msgs($file_msg){

switch($file_msg){

case 8:
$msg="文件格式必须为：\\n \\PDF ";
break;
case 7:
$msg="文件格式必须为：\\n \\XLS ";
break;
case 6:
$msg="文件格式必须为：\\n \\FLV ";
break;
case 66:
$msg="文件格式必须为：\\n \\MP4 ";
break;
case 11:
$msg="文件格式必须为：\\n \\n JPG JPEG GIF PNG BMP SWF";
break;
case 1:
$msg="文件格式必须为：\\n \\n JPG JPEG GIF PNG BMP";
break;
case 2:
$msg="文件的格式必须为：\\n \\n ZIP,RAR,DOC,DOCX,XLS,SWF,XLSX,PDF";
break;
case 3:
$msg="文件格式必须为：\\n \\n WMA,MP3,RAM,RM,RMVB,MOV,\n \n ASF,WMV,MPG,AVI";
break;
default:
$msg="文件格式必须为：\\n \\n JPG JPEG GIF PNG BMP";
break;
}
return $msg;
}

function showtype($file_type){ 
switch($file_type){
case 8:?>
filename.indexOf(".PDF")!=-1 
<?php break;
case 66:?>
filename.indexOf(".MP4")!=-1 
<?php break;
case 7:?>
filename.indexOf(".XLS")!=-1 
<?php break;
case 6:?>
filename.indexOf(".FLV")!=-1 
<?php break;
case 11:?>
filename.indexOf(".GIF")!=-1 || filename.indexOf(".JPG")!=-1 || filename.indexOf(".JPEG")!=-1 || filename.indexOf(".PNG")!=-1 || filename.indexOf(".BMP")!=-1 || filename.indexOf(".SWF")!=-1
<?php break;
case 1:?>
filename.indexOf(".GIF")!=-1 || filename.indexOf(".JPG")!=-1 || filename.indexOf(".JPEG")!=-1 || filename.indexOf(".PNG")!=-1 || filename.indexOf(".BMP")!=-1
<?php break;
case 2: ?>
filename.indexOf(".DOCX")!=-1 || filename.indexOf(".RAR")!=-1 || filename.indexOf(".ZIP")!=-1 || filename.indexOf(".DOC")!=-1 || filename.indexOf(".MDB")!=-1 || filename.indexOf(".XLS")!=-1 || filename.indexOf(".XLSX")!=-1 || filename.indexOf(".PDF")!=-1 || filename.indexOf(".SWF")!=-1 || filename.indexOf(".DOCX")!=-1 
<?php break;
case 3: ?>

filename.indexOf(".MP3")!=-1 || filename.indexOf(".RAM")!=-1 || filename.indexOf(".RM")!=-1 || filename.indexOf(".WMA")!=-1 || filename.indexOf(".WMV")!=-1 || filename.indexOf(".MPEG")!=-1 || filename.indexOf(".MPG")!=-1 || filename.indexOf(".AVI")!=-1 || filename.indexOf(".MOV")!=-1 || filename.indexOf(".RMVB")!=-1 || filename.indexOf(".ASF")!=-1 || filename.indexOf(".SWF")!=-1
<?php break;
default:?>
filename.indexOf(".GIF")!=-1 || filename.indexOf(".JPG")!=-1 || filename.indexOf(".JPEG")!=-1 || filename.indexOf(".PNG")!=-1 || filename.indexOf(".BMP")!=-1
<?php break; }
}
function showimg($show_img){
 switch($show_img){
case 8:?>
View();<?php break;
case 7:?>
View();<?php break;
case 6:?>
View();<?php break;
case 11:?>
View();<?php break;
case 1:?>
View();
<?php break;
case 2:?>
document.getElementById('face2').src="images/img/nopic1.gif";
<?php break;
case 22:?>
document.getElementById('face2').src="images/img/nopic1.gif";

<?php break;
case 3:?>
document.getElementById('face2').src="images/img/nopic1.gif";
<?php break;
default:?>
View();
<?php break;} 
}
?>		
<script language="Javascript">
function pic()
{ 
    var tmp_html="";
	var filenames=document.getElementById("fileField").value;
	var filename = document.getElementById("fileField").value.toUpperCase();
	//	
	if(filename!=""){
	  if(<?php echo showtype($filetype)?>){
	  
		 <?php echo showimg($filetype)?>
		
	   }else{
		   alert("<?php echo msgs($filetype)?>");
		   document.getElementById('form1').reset();
		   document.getElementById("face").style.display="none";
		   document.getElementById("face2").style.display="block";
		   document.getElementById('face2').src="images/img/nopic1.gif";
		}
	 }
		
}
</script>
<script language="javascript">
<!--
function mysub()
{
		document.getElementById("esave").style.visibility="visible";
}

-->
</script>

<script>
function upLoad(){

    var filename = document.getElementById("fileField").value.toUpperCase();
	//var filetype=<?php echo $filetype?>
    if(filename!="")
	{	  

		if (<?php echo showtype($filetype)?>)		
	 	 {
	 	   document.getElementById("esave").style.visibility="visible";
	 	   document.getElementById('form1').submit();
   	 	 }
		   else
	 	   {
	 	     alert("请选择正确的文件，文件格式错误！");
	 	     return;
		    }
	 }
	
}	

function focusme(){
 
 document.getElementById("fileField").focus();
}

 function View(){
            //关键代码
		var filename = document.getElementById('fileField').value.toUpperCase();
		
		if(filename.indexOf(".GIF")!=-1 || filename.indexOf(".JPG")!=-1 || filename.indexOf(".PNG")!=-1 || filename.indexOf(".BMP")!=-1 ){
			
		
		if(document.all){
		    document.getElementById("face2").style.display="none";
		    document.getElementById("face").style.display="block";
		 	document.getElementById("face").filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src=document.getElementById("fileField").value;
			
		}else{
		    document.getElementById("face").style.display="none";
		    document.getElementById("face2").style.display="block";
            document.getElementById("face2").src = document.getElementById("fileField").files[0].getAsDataURL();
		}
		}else{
		   document.getElementById("face").style.display="none";
		   document.getElementById("face2").style.display="block";
		
		}
    }
	
</script>

<script type="text/javascript">  
        $(document).ready(function() {  
            //建议在#imgDiv的父元素上加个overflow:hidden;的css样式  
            $("#fileField").uploadPreview({width:118,height:71,imgDiv:"#imgDiv",imgType:["bmp","gif","png","jpg"],maxwidth:3169,maxheight:4759});  
        });  
    </script>  

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0"  onload="javascript:focusme();" >
<div id="esave" style="position:absolute; top:10px; left:30px; z-index:10; width: 197px; height: 118px; visibility:hidden"> 
    <TABLE WIDTH=200 BORDER=0 CELLSPACING=0 CELLPADDING=0>
      <TR><td> 
	    <TABLE WIDTH=106% height=120 BORDER=0 CELLPADDING=1 CELLSPACING=1 bgcolor="#086DCE">
	  <TR> 
              <td bgcolor=#eeeeee align=center><marquee align="middle" behavior="alternate" scrollamount="5"><font color=red class="textred">...上传中...</font></marquee></td>
	  </tr>
        </table></td>
	</tr></table>
</div>
      <form name="form1" method="post" action="upload.php" target="_self" id="form1" enctype="multipart/form-data" >
<table width="251" height="150" border="0" cellpadding="5" cellspacing="1">
	  <tr align="center" bgcolor="#efefef">
        <td height="27" colspan="2" class="menutitle">请选择文件</td>
        </tr>
      <tr>
        <td height="35" colspan="2" bgcolor="#FFFFFF"><input name="fileField"  id="fileField" type="file" class="input_reg" size=20  ></td>
        </tr>
      <tr>
        <td valign="top" nowrap bgcolor="#FFFFFF">
            <input  type="button" id="input1" value="保存" style="cursor:hand;width: 80px "  onClick="return upLoad()">
            <input  type="button" id="input2" value="关闭" style="cursor:hand;width: 80px " onClick="self.close()">


<!--            <img src="images/img/G03.gif" width="51" height="20" style="cursor:hand " onClick="return upLoad()">&nbsp;&nbsp;<img src="images/img/G06.gif" width="51" height="20"  style="cursor:hand" onClick="self.close()">-->
          <input name="input" type="hidden" id="input" value="<?php echo $input?>">
		  <input name="myform" type="hidden" id="myform" value="this.form">
		  <input type="hidden" name="filepath" value="<?php echo $filepath?>">
	    <input type="hidden" name="thumbw2" value="<?php echo @$thumbw2?>"> 
        <input type="hidden" name="thumbh2" value="<?php echo @$thumbh2?>"> 
		  
	    <input type="hidden" name="thumbw" value="<?php echo @$thumbw?>"> 
        <input type="hidden" name="thumbh" value="<?php echo @$thumbh?>"> 
	    <input type="hidden" name="filetype" value="<?php echo $filetype?>"> 
		<input type="hidden" name="fz" value="<?php echo $fz?>"> 
		<input type="hidden" name="fileSize" value="<?php echo $fileSize?>"><input type="hidden" name="motion" value="upload"> 
		</td>
        <td valign="top" nowrap bgcolor="#FFFFFF"><div style="width: 118px; height: 71px; overflow: hidden; ">  
        <div id="imgDiv">  
        </div>  
    </div> 
    
      </td>
      </tr>
</table>
</form>
</body>
</html>