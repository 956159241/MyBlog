<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>留言板</title>
<META name=keywords content="<?php echo $db->ly_system("system",3)?>">
<meta name="description" content="<?php echo $db->ly_system("system",4)?>">
<link href="images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="images/check.js"></script>
<style type="text/css">
<!--

-->
</style>
</head>
<body>
<div class="liuyanban">
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="lyb_max">
 
      <tr>
        <td height="350" align="center" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="lyb_middle">
          <tr>
            <td height="0">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
             
              <tr>
              
                <td>
                 
				 <table width="100%" height="100%" border="0" align="center" cellpadding="0">
        <tr>
          <td height="470" align="left" valign="top" ><?php
	$ip=$_SERVER['REMOTE_ADDR'];
	$sql="select * from lockip where lockip='$ip'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
		?>
		<script language="javascript">
			alert("抱歉!您已经被管理员锁定,可能因为您发表了不合适言论!\n请与管理员联系");
			location.href="index.php"
		</script>
		<?php
		die();
	}
	if($_POST["Submit"])
	{
		$username=$_POST["username"];
		$qq=$_POST["qq"];
		$email=$_POST["email"];
		$homepage=$_POST["homepage"];
		$face=$_POST["face"];
		$title=$_POST["title"];
		$content=$_POST["content"];
		$time=date('Y-m-d H:i:s');
		$ip=$_SERVER['REMOTE_ADDR'];
		$sql="insert into leavewords (username,qq,email,homepage,face,leave_title,leave_contents,leave_time,ip) values ('$username',$qq,'$email','$homepage','$face','$title','$content','$time','$ip')";
		mysql_query($sql);
		echo "<script language=javascript>alert('您的留言已在审核中，请稍等！');window.location='index.php'</script>";
		?>
		<?php
	}
?>
<form id="form1" name="form1" method="post" action="" onsubmit=return(CheckInput()) style="margin-top:0px;">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td colspan="2" align="right" ><a href="index.php">返回留言板</a>&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2" >添加留言(带 * 号为必填项)</th>
    </tr>
    <tr>
      <td width="74" align="center">网友昵称:</td>
      <td width="604"><input name="username" type="text" id="username" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr>
      <td align="center" >网友扣扣:</td>
      <td><input name="qq" type="text" id="qq" /></td>
    </tr>
    <tr>
      <td align="center">您的邮箱:</td>
      <td><input name="email" type="text" id="email" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr>
      <td align="center">个人主页:</td>
      <td><input name="homepage" type="text" id="homepage" value="http://" /></td>
    </tr>
    <tr>
      <td height="60" align="center">留言头像:</td>
      <td > 
	 					    <input type="radio" value="1" name="face" checked="checked" />
                            <img src="images/face/face1.gif" border="0" />
                            <input type="radio" value="2" name="face" />
                            <img src="images/face/face2.gif" border="0" />
                            <input type="radio" value="3" name="face" />
                            <img src="images/face/face3.gif" border="0" />
                            <input type="radio" value="4" name="face" />
                            <img src="images/face/face4.gif" border="0" />
                            <input type="radio" value="5" name="face" />
                            <img src="images/face/face5.gif" border="0" />
                            <input type="radio" value="6" name="face" />
                            <img src="images/face/face6.gif" border="0" />
                            <input type="radio" value="7" name="face" />
                            <img src="images/face/face7.gif" border="0" />
							</td>
    </tr>
    <tr>
      <td align="center" >留言标题:</td>
      <td ><input name="title" type="text" id="title" />
        &nbsp;<span class="style1">*</span></td>
    </tr>
	<tr>
		<td colspan="2" >留言内容:		</td>
	</tr>
    <tr>
     <td  colspan="2" > <textarea name="content" cols="60" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Submit" value="提交" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form></td>
        </tr>
      </table>
				  
				 
				 </td>
                
              </tr>
              
            </table>
			  </td>
          </tr>
        </table></td>
      </tr>
    </table></td>

  </tr>
</table>
</div>
</body>
</html>
