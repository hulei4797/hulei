<?php
$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql3="select * from kefu where kf_id=1"; 
$result3=mysqli_query($conn,$sql3); 
$arr3=array();
while($row3=mysqli_fetch_array($result3)){ 
   array_push($arr3,$row3);
}

$sql4="select * from kefu where kf_id=2"; 
$result4=mysqli_query($conn,$sql4); 
$arr4=array();
while($row4=mysqli_fetch_array($result4)){ 
   array_push($arr4,$row4);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线客服</title>
<link rel="stylesheet" type="text/css" href="../assets/css/kefu.css">
<script src="../assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();				
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();	
		});
	});
</script>
</head>
<body>
<!--kefu-->
<div id="floatTools" class="rides-cs" style="height:246px;font-size:12px;">
  <div class="floatL">
  	<a style="display:block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px" href="javascript:void(0);">展开</a>
  	<a style="display:none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:287px;width: 140px;margin-top:20px;">
    <div class="cn">
      <ul>
        <li><span><?php echo $arr3[0]['kf_name'];?>:</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $arr3[0]['kf_qq'];?>&site=qq&menu=yes"><img border="0" src="../assets/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>   
        <li><span>手机：<?php echo $arr3[0]['kf_tel'];?></span></li>

         <li><span><?php echo $arr4[0]['kf_name'];?>:</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $arr4[0]['kf_qq'];?>&site=qq&menu=yes"><img border="0" src="../assets/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>手机：<?php echo $arr4[0]['kf_tel'];?></span></li>
        <li style="border:none;"><span>座机：<?php echo $arr3[0]['kf_number'];?></span> </li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
