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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板</title>
 <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script type="text/javascript" src="../assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>

<link href="../assets/css/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../assets/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="../assets/js/base.js"></script>
 <link rel="stylesheet" href="../assets/css/amazeui.css" />
<link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/contact.min.css" />
  <script type="text/javascript" src="../assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
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
</head>
<body>

  <div class="section">
      <div class="container">
  

        <div class="section-container">
          <div class="am-g">
            <!--contact-left start-->
            <div class="am-u-md-5">

            <!--展示图片-->
<div class="right-extra" >
  <!--产品参数开始-->
  <div>
    <div id="preview" class="spec-preview"> <span class="jqzoom"><img  src=<?php echo $arr1[0]['car_img1'];?> /></span> </div>
    <!--缩图开始-->
    <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
      <div class="items">
        <ul>
          <li><img alt="迅航"  src=<?php echo $arr1[0]['car_img1'];?> onmousemove="preview(this);"></li>
          <li><img alt="迅航"  src=<?php echo $arr1[0]['car_img2'];?> onmousemove="preview(this);"></li>
          <li><img alt="迅航"  src=<?php echo $arr1[0]['car_img3'];?> onmousemove="preview(this);"></li>
          <li><img alt="迅航"  src=<?php echo $arr1[0]['car_img4'];?> onmousemove="preview(this);"></li>
        </ul>
      </div>
    </div>
    <!--缩图结束-->
  </div>
 
</div>

 <!--展示图片end-->

            </div>
            <!--contact-left end-->


            <!--contact-right start-->
              <div class="am-u-md-7" >
                <div class="contact-form" style="margin-top:20px;">
                  <h3 class="contact-form_title"><?php echo $arr[0]['car_name'];?></h3>
                  <form class="am-form" method="post" action="message.php" name="forma" onsubmit="return Validate()">
                    <div class="am-g" style="margin-top:20px;">
                      <div class="am-u-md-6">
                        品牌：<?php echo $arr[0]['car_type'];?>
                      </div>
                      <div class="am-u-md-6">
                        座位：<?php echo $arr[0]['car_seat'];?>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-6">
                        费用：<?php echo $arr[0]['car_price'];?>元/天
                      </div>
                      <div class="am-u-md-6">
                        排量：
                      </div>
                    </div>

                     <div class="am-g">
                      <div class="am-u-md-6">
                        押金：
                      </div>
                      <div class="am-u-md-6">
                        档位：
                      </div>
                    </div> 

                     <div class="am-g">
                      <div class="am-u-md-6">
                        日限里程：
                      </div>
                      <div class="am-u-md-6">
                        燃料类型：
                      </div>
                    </div> 
                      
                    <div class="am-g" style="margin-top:20px;">
                      <div class="am-u-md-6">
                        <input type="name" class="" name="name" id="doc-ipt-email-2" placeholder="姓名">
                      </div>
                      <div class="am-u-md-6">
                       <input type="name" class="" name="number"  placeholder="电话">
                      </div>
                    </div>
                  
                    <input type="hidden" name="car_name" value=<?php echo $arr[0]['car_name'];?>>
                    <div class=am-g>
                      <div class="am-u-md-12">
                        <div class="am-form-group" style="align:left;">
                          <textarea class="" rows="1" id="doc-ta-1" name="text" placeholder="备注"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-9">
                        
                      </div>
                      <div class="am-u-md-3">
                        <p><button type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">预约</button></p>
                      </div>
                    </div>
                  </form>
                  <span style="color:red;font-size:14px;">注：在预约之后，工作人员会立即与您取得联系！</span>
                </div>
              </div>
            <!--contact-right end-->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>