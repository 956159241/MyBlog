<?php
	require("include/global.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���԰�</title>

<link href="images/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/mutual.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="ibody">
 <!--top�ײ���ʼ-->
  <header>
 		<div id="logo">
 			�л�����
 		</div>
    <nav id="topnav">
		<a href="../../index.html" target="_self">��ҳ</a>
		<a href="../../life.html" target="_self">����־</a>
		<a href="../../it.html" target="_self">IT�Ӽ�</a>
		<a href="../../literature.html" target="_self">����ī��</a>
		<a href="../../works.html" target="_self">��������</a>
        <a href="../../php/liuyanban/index.php" target="_self">���԰�</a>
	</nav>
  </header>
 <!--top����-->
<div class="lyb" style="margin:0 auto;">
<div class="nav">
<ul>
    <li><a href="../../index.html">������ҳ</a></li>
     <li><a href="admin/login.php">����Ա��½</a></li>
    <li><a href="fk1.php">��������</a></li>
   
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
//ʹ�÷�����
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc"; // ��ѯ�����ݿ��
 }else{
 $sql="select * from leavewords order by id desc"; // ��ѯ�����ݿ�� 
 }
 $queryc=mysql_query($sql); //ִ��SQL���
 $nums=mysql_num_rows($queryc); ////����Ŀ��
 $each_disNums=$page=$db->ly_system("system",6);  //ÿҳ��ʾ����Ŀ�� 
 $sub_pages=2; //�� $subPage_type Ϊ 2 ʱ��ÿ����ʾ��ҳ��
 $pageNums = ceil($nums/$each_disNums); //��ҳ��
 $subPage_link="index.php?&page="; //ÿ����ҳ������
 $subPage_type=1;//Ϊ1ʱ,��ʾ���1,Ϊ2ʱ,��ʾ���2,��ʾ��ҳ������
 $current_page=$_GET['page']!=""?$_GET['page']:1; //��ǰ��ѡ�е�ҳ
 $currentNums=($current_page-1)*$each_disNums; //limit��������
 if($db->ly_system("system",7)==1){
 $sql="select * from leavewords where is_audit=1 order by id desc limit $currentNums,$each_disNums"; //SQL��䣬�˴���ҳ����
 }else{
 $sql="select * from leavewords order by id desc limit $currentNums,$each_disNums"; //SQL��䣬�˴���ҳ����
 }
 $query=mysql_query($sql); // ִ��SQL����
 while($rows=mysql_fetch_array($query)){
 ?>
  <tr>

    <td width="101" height="100" rowspan="2" align="center" ><img src="images/face/face<?php echo $rows["face"]?>.gif" /></td>

    <td width="304" align="left">���Ա���:<?php  if($db->ly_system("system",8)==1){echo strip_tags($rows["leave_title"]);}else{echo $rows["leave_title"];}?></td>
    <td width="211" align="left">������:<?php echo $rows["leave_time"]?></td>
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
			echo "<span style='color:red;'>���޻ظ�</span>";
		}
		else
		{
			while($rows_reply=mysql_fetch_assoc($rs_reply))
			{
				?>
           </div>
				<table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
   <div class="hh"><?php echo "<font color='red'>����Ա�ظ�:</font><br/>&nbsp;&nbsp;&nbsp;".$rows_reply['reply_contents']."<br>";?></div>
  </tr>
</table>

				<?php
			}
		}
	?></td>
  </tr>
  <tr>
    <td align="center">�ǳ�:<?php echo $rows["username"]?></td>
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
    	
      ��Ȩ����@ 2016.3-2016.5<br/>
      ��ϵվ��	z@iotzzh.com<br/>
      ��ICP��	16004270��-1 
      <br/>
      ���ڱ�վ|վ������|�֧��|�������� 
      </div>

</div>
</body>
</html>
