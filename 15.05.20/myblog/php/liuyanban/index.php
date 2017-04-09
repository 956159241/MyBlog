<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>留言板</title>

<link href="images/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/mutual.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="ibody">
 <!--top首部开始-->
  <header>
 		<div id="logo">
 			中华博客
 		</div>
    <nav id="topnav">
		<a href="../../index.html" target="_self">首页</a>
		<a href="../../life.html" target="_self">生活志</a>
		<a href="../../it.html" target="_self">IT杂记</a>
		<a href="../../literature.html" target="_self">文人墨客</a>
		<a href="../../works.html" target="_self">劳有所获</a>
        <a href="../../php/liuyanban/index.php" target="_self">留言板</a>
	</nav>
  </header>
 <!--top结束-->
<div class="lyb" style="margin:0 auto;">
<div class="nav">
<ul>
    <li><a href="../../index.html">返回首页</a></li>
     <li><a href="admin/login.php">管理员登陆</a></li>
    <li><a href="fk1.php">发表留言</a></li>
   
</ul>

</div>

<div class="lyb_ly">
<table class="max">
  
      <tr>
        <td height="350" align="center" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="middle">
          <tr>
            <td height="0">
			
<table  style=" border:0; width:100%; border-spacing:0;" class="min">
 <?php
//使用方法：
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc"; // 查询的数据库表
 }else{
 $sql="select * from leavewords order by id desc"; // 查询的数据库表 
 }
 $queryc=mysql_query($sql); //执行SQL语句
 $nums=mysql_num_rows($queryc); ////总条目数
 $each_disNums=$page=$db->ly_system("system",6);  //每页显示的条目数 
 $sub_pages=2; //当 $subPage_type 为 2 时，每次显示的页数
 $pageNums = ceil($nums/$each_disNums); //总页数
 $subPage_link="index.php?&page="; //每个分页的链接
 $subPage_type=1;//为1时,显示结果1,为2时,显示结果2,显示分页的类型
 $current_page=$_GET['page']!=""?$_GET['page']:1; //当前被选中的页
 $currentNums=($current_page-1)*$each_disNums; //limit计算来用
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc limit $currentNums,$each_disNums"; //SQL语句，此处分页计算
 }else{
 $sql="select * from leavewords order by id desc limit $currentNums,$each_disNums"; //SQL语句，此处分页计算
 }
 $query=mysql_query($sql); // 执行SQL主句
 while($rows=mysql_fetch_array($query)){
 ?>
  <tr>

    <td width="101" height="100" rowspan="2" align="center" ><img src="images/face/face<?php echo $rows["face"]?>.gif" /></td>

    <td width="304" align="left">留言标题:<?php  if($db->ly_system("system",8)==1){echo strip_tags($rows["leave_title"]);}else{echo $rows["leave_title"];}?></td>
    <td width="211" align="left">发表于:<?php echo $rows["leave_time"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
	
	<table class="lyb_content">
  <tr>
    <td><br/><?php if($db->ly_system("system",8)==1){echo strip_tags($rows["leave_contents"]);}else{echo $rows["leave_contents"];}?></td>
  </tr>
</table>

	<div class="hh">
    <?php
		$id=$rows["id"];
		$sql="select * from reply where leaveid=$id order by id desc";
		$rs_reply=mysql_query($sql);
		if(mysql_num_rows($rs_reply)==0)
		{
			echo "<span style='color:red;'>暂无回复</span>";
		}
		else
		{
			while($rows_reply=mysql_fetch_assoc($rs_reply))
			{
				?>
           </div>
				<table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
   <div class="hh"><?php echo "<font color='red'>管理员回复:</font><br/>&nbsp;&nbsp;&nbsp;".$rows_reply['reply_contents']."<br>";?></div>
  </tr>
</table>

				<?php
			}
		}
	?></td>
  </tr>
  <tr>
    <td align="center">昵称:<?php echo $rows["username"]?></td>
    <td colspan="2" align="right">
    	<a href="mailto:<?php echo $rows["email"]?>" title="<?php echo $rows["email"]?>">
        	<img src="images/face/email.gif" width="16" height="16" border="0"/></a>
            &nbsp;&nbsp;&nbsp;<a href="<?php echo $rows["homepage"]?>" title="<?php echo $rows["homepage"]?>"><img src="images/face/homepage.gif" width="16" height="16" border="0" /></a>&nbsp;&nbsp;<a href="http://sighttp.qq.com/msgrd?v=1&;uin=<?php echo $rows["qq"]?>%20&site=http://www.qq.com&menu=yes" title="<?php echo $rows["qq"]?>" target="_blank"><img src="images/face/oicq.gif" width="16" height="16"  border="0"/></a>&nbsp;&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="3"height="15"></td>
  </tr>
	<?php
	}
  ?>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" align="center"><?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?></td>
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
</div>

<!--footer-->
	<div class="foot">
    	
      版权所有@ 2016.3-2016.5<br/>
      联系站长	z@iotzzh.com<br/>
      皖ICP备	16004270号-1 
      <br/>
      关于本站|站点留言|活动支持|链接友情 
      </div>

</div>
</body>
</html>
