<?php require_once("../include/global.php"); ?>
<?php
	if($_POST["Submit"])
	{
		$username=$_POST["username"];
		$pwd=$_POST["pwd"];
		$code=$_POST["code"];
		if($code<>$_SESSION["auth"])
		{
		echo "<script language=javascript>alert('验证码不正确！');window.location='login.php'</script>";
		?>
		<?php
			die();
		}
		$sql="select * from admin where username='$username' and password='$pwd'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)==1)
		{
			$_SESSION["pwd"]=$_POST["pwd"];
			$_SESSION["admin"]=session_id();
			echo "<script language=javascript>alert('登陆成功！');window.location='H_gl.php'</script>";
		}
		else
		{
		echo "<script language=javascript>alert('用户名或密码错误！');window.location='login.php'</script>";
		?>
		<?php
		die();
		}
	}
?>
<?php 
if($_GET['tj'] == 'out'){
 session_destroy();
 echo "<script language=javascript>alert('退出成功！');window.location='login.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理员登录</title>

<style type="text/css">
body{ background-color:rgb(26,26,26); background-image:url(../images/dlbg.jpg); background-repeat:no-repeat; background-position:center;}
#frm {
		width:360px;
		height:370px;
		background:rgba(0,0,0,0.6);
		box-shadow:2px 1px 50px #3ff;
		border-radius:10px;
		margin-left:520px;
		margin-top:150px;
		text-align:center;
				color:#FFF;
		}
#username{height:26px;
		width:200px;
		color:#000;
		font-size:18px;
		margin-top:15px;}
#pwd{height:26px;
		width:200px;
		color:#000;
		font-size:18px;
		margin-top:15px;}
.chknumber_input{height:26px;
		width:200px;
		color:#000;
		font-size:18px;
		margin-top:15px;}

.submit{
		width:200px;
		height:40px;
		color:#FFF;
		font-size:20px;
		cursor:pointer;
		margin-top:20px;
		margin-left:30px;
		border-radius:5px;
		background:rgba(0,0,0,0.6);
		box-shadow:2px 1px 50px #3ff;
		}


</style>
</head>
<body>

<form id="frm" name="frm" method="post" action="" onSubmit="return check()">

      <div class="user">
        <label>用户名：
        <input type="text" name="username" id="username" />
        </label>
      </div>
      <div class="user">
        <label>密　码：
        <input type="password" name="pwd" id="pwd" />
        </label>
      </div>
      <div class="chknumber">
        <label>验证码：
        <input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
        </label><br/>
        <img src="verify.php" style="vertical-align:middle;width:100px;
		margin:15px 0 0 60px;" />
      </div>
    

      <input type="submit" name="Submit" class="submit" value="登录"><br/>

      <input type="reset" name="Submit" class="submit" value="重置">

</form>

</body>
</html>
