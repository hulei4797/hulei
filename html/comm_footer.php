 <?php
$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql5="select * from company"; 
$result5=mysqli_query($conn,$sql5); 
$arr5=array();
while($row5=mysqli_fetch_array($result5)){ 
   array_push($arr5,$row5);
}

?>
 <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板</title>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/solution.min.css" />
</head>
<body>

 <div class="layout-footer">
    <div class="footer">
      <div style="background-color:#383d61" class="footer--bg"></div>
      <div class="footer--inner">
        <div class="container">
          <div class="footer_main">
            <div class="am-g">
              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">迅航商务</strong>
                  <div class="footer_about">
                      <p class="footer_about--text">
                        成都迅航商务服务有限公司是一家集租车，会议、展览、旅游接待的综合性公司。主要承接会议旅游接待，大型活动策划，展览展示等各类活动的组织安排和租车业务！
                      </p>
                
                    </div>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">产品中心</strong>
                  <ul class="footer_navigation">
                    <li class="footer_navigation--item"><a href="html/example.php?imgId=1" class="footer_navigation--link">主营业务</a></li>
                    <li class="footer_navigation--item"><a href="html/cars.php?car_id=1" class="footer_navigation--link">车辆信息</a></li>
                    <li class="footer_navigation--item"><a href="html/solution.php" class="footer_navigation--link">租车流程</a></li>
                  </ul>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">了解迅航</strong>
                  <ul class="footer_navigation">
                    <li class="footer_navigation--item"><a href="html/news.php" class="footer_navigation--link">公司动态</a></li>
                    <li class="footer_navigation--item"><a href="html/join.php" class="footer_navigation--link">关于我们</a></li>
                    <li class="footer_navigation--item"><a href="html/contact.php" class="footer_navigation--link">联系我们</a></li>
              
                  </ul>
                </div>
              </div>


                <div class="am-u-md-3 ">
                  <div class="footer_main--column">
                    <strong class="footer_main--column_title">联系详情</strong>
                    <ul class="footer_contact_info">
                      <li class="footer_contact_info--item"><i class="am-icon-phone"></i><span>服务专线：<?php echo $arr5[0]['company_tel'];?></span></li>
                      <li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span><?php echo $arr5[0]['company_email'];?></span></li>
                      <li class="footer_contact_info--item"><i class="am-icon-map-marker"></i><span><?php echo $arr5[0]['company_add'];?></span></li>
            
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>