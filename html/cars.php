<?php
$car_id=$_GET["car_id"];
header('Content-Type: text/html; charset=utf8');

$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql="select * from car where car_id=$car_id"; 
$result=mysqli_query($conn,$sql); 
$arr=array();
while($row=mysqli_fetch_array($result)){ 
   array_push($arr,$row);
}

$sql1="select * from car_img where car_id=$car_id"; 
$result1=mysqli_query($conn,$sql1); 
$arr1=array();
while($row1=mysqli_fetch_array($result1)){ 
   array_push($arr1,$row1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>迅航商务-车辆查询</title>
 <?php
  include 'comm_meta.php';
  ?>
 <link rel="stylesheet" type="text/css" href="../assets/css/style.css">


<link href="../assets/css/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../assets/js/base.js"></script>
 <link rel="stylesheet" href="../assets/css/amazeui.css" />
<link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/contact.min.css" />  
  <link rel="stylesheet" href="../assets/css/example.min.css" />
  <script type="text/javascript" src="../assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>

  <script type="text/javascript" language="javascript"> 
function iFrameHeight() { 
var ifm= document.getElementById("iframepage"); 
var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument; 
if(ifm != null && subWeb != null) { 
ifm.height = subWeb.body.scrollHeight; 
} 
} 
</script> 
<script type="text/javascript">
  
  function Validate(){

    var phoneNumReg = /(^[0-9]{3,4}\-[0-9]{7}$)|(^[0-9]{7}$)|(^[0-9]{3,4}[0-9]{7}$)|(^0{0,1}13[0-9]{9}$)/;
  if(!phoneNumReg.test(document.forma.number.value)) {
      alert('电话号码不正确!!');
      document.forma.number.focus();
      return false;
  }
  return true;
  }
</script>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}

/* searchbox */
.searchbox{width:100%;height:40px;}
.bodys input{ height:36px;line-height:36px;width:200px;padding:0 10px;float:left;}
.bodys .three{ border:#66B3FF 3px solid}
.bodys .three3{ background-color:#66B3FF;}
.bodys button{float:left;border:0;height:36px;width:100px; color:#FFF; line-height:36px;text-align:center;overflow:hidden;}
</style>

</head>
<body>
 
<?php
  include 'comm_header.php';
  ?>



    <!--===========layout-container================-->

  <ul class="select">
    <li class="select-list">
      <dl id="select1">
   
        <dt>品牌：</dt>
        <dd class="select-all selected"><a href="#">全部</a></dd>
           <?php 
     $sql2="select distinct car_type from car";
     $res2 = mysqli_query($conn,$sql2);
     while($row2=mysqli_fetch_assoc($res2)){
      ?>
        <dd><a href="#"><?php echo $row2['car_type'];?></a></dd>
        <?php }?>
      </dl>
    </li>




    <li class="select-list">
      <dl id="select2">
        <dt>用途：</dt>
        <dd class="select-all selected"><a href="#">全部</a></dd>
           <?php 
     $sql3="select * from classify";
     $res3 = mysqli_query($conn,$sql3);
     while($row3=mysqli_fetch_assoc($res3)){
      ?>
        <dd><a href="#"><?php echo $row3['car_classify'];?></a></dd>
        <?php }?>
      </dl>
    </li>




    <li class="select-list">
      <dl id="select3">
        <dt>日租金：</dt>
        <dd class="select-all selected"><a href="#">全部</a></dd>
           <?php 
     $sql4="select distinct car_price from car";
     $res4 = mysqli_query($conn,$sql4);
     while($row4=mysqli_fetch_assoc($res4)){
      ?>
        <dd><a href="#"><?php echo $row4['car_price'];?></a></dd>
        <?php }?>
      </dl>
    </li>




    <li class="select-list">
      <dl id="select4">
        <dt>座位数：</dt>
        <dd class="select-all selected"><a href="#">全部</a></dd>
           <?php 
     $sql5="select distinct car_seat from car";
     $res5 = mysqli_query($conn,$sql5);
     while($row5=mysqli_fetch_assoc($res5)){
      ?>
        <dd><a href="#"><?php echo $row5['car_seat'];?></a></dd>
        <?php }?>
      </dl>
    </li>



    <li class="select-result">
      <dl>
        <dt>已选条件：</dt>
        <dd class="select-no"></dd>

      </dl>
      <div class="searchbox" style="width:100%;">
    <div class="bodys" style="float:left;width:70%;">
    <p><button class="three3" id="btn" name="butt">查询</button>
   

    </p>
  </div>
  <div class="bodys">
    <p><form action="found2.php" method="post" target="iframepage">
    <input type="text" class="three" name="text" placeholder="输入关键字" />
   <input type="submit" style="background-color:#66B3FF;float:left;border:0;height:36px;width:100px; color:#FFF; line-height:36px;text-align:center;overflow:hidden;" value="搜索">
     </form>
   </p>
  </div>
</div>  
    </li>
  </ul>
  <!--button-->
  <a id ="butt" name="butt" href="found3.php" target="iframepage"></a>
  <script>
document.getElementById("btn").onclick=function(){
　　document.getElementById("butt").click();
}
</script>




<div style="text-align:center;clear:both">
</div>


    <div class="section">
      <div class="container">
  

        <div class="section-container">
          <div class="am-g">
         
<iframe  name="iframepage" src="found1.php" id="iframepage"  frameBorder=0 scrolling=no width="100%" onLoad="iFrameHeight()" ></iframe>
        </div>
      </div>
    </div>
  </div>




  <!--===========layout-container================-->
       <?php
  include 'comm_footer.php';
  ?>
  <script src="../assets/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="../assets/js/amazeui.js" charset="utf-8"></script>
  <?php
  include 'qq.php';
  ?>
</body>
</html>
