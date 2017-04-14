
<?php
header('Content-Type: text/html; charset=utf8');

$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql="select fla_name from flash"; 
$result=mysqli_query($conn,$sql); 
$arr=array();
while($row=mysqli_fetch_array($result)){ 
   array_push($arr,$row);
}


$sql1="select fla_explain from flash"; 
$result1=mysqli_query($conn,$sql1); 
$arr1=array();
while($row1=mysqli_fetch_array($result1)){ 
   array_push($arr1,$row1);
}


$sql2="select fla_img from flash"; 
$result2=mysqli_query($conn,$sql2); 
$arr2=array();
while($row2=mysqli_fetch_array($result2)){ 
   array_push($arr2,$row2);
}

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

$sql5="select * from company"; 
$result5=mysqli_query($conn,$sql5); 
$arr5=array();
while($row5=mysqli_fetch_array($result5)){ 
   array_push($arr5,$row5);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $arr5[0]['company_title'];?></title>
<meta name="Keywords" content=<?php echo $arr5[0]['company_keywords'];?>/>
<meta name="Description" content=<?php echo $arr5[0]['company_descr'];?>/>
<link rel="SHORTCUT ICON" href="xunhang.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/css/kefu.css">
<script src="assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="assets/css/amazeui.css" />
  <link rel="stylesheet" href="assets/css/common.min.css" />
  <link rel="stylesheet" href="assets/css/index.min.css" />

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
  <div class="layout">
    <!--===========layout-header================-->
    <div class="layout-header am-hide-sm-only">


      <div class="header-box" data-am-sticky>
        <!--header start-->
          <div class="container">
            <div class="header">
              <div class="am-g">
                <div class="am-u-lg-2 am-u-sm-12">
                  <div class="logo">
                    <a href=""><img src="assets/images/logo.png" alt="" /></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
  												<strong><?php echo $arr5[0]['company_tel'];?></strong>
  												<span>周一~周五, 9:00 - 18:00</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  										
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
  												<strong>金沙揽胜</strong>
  												<span><?php echo $arr5[0]['company_add'];?></span>
  											</div>
  										</div>
                    </div>
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--header end-->


        <!--nav start-->
        <div class="nav-contain">
          <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
              <li class=""><a href="./index.php">首页</a></li>
              <li>
                  <a href="html/example.php?imgId=1" class="" >主营业务</a>
                <!-- sub-menu end-->
              </li>
              <li><a href="html/cars.php?car_id=1">车辆查询</a></li>
              <li><a href="html/solution.php">租车流程</a></li>
              <li>
                <a href="html/news.php">公司动态</a>
           
              </li>
              <li><a href="html/travel.php">旅游导航</a></li>
              <li><a href="html/join.php">关于我们</a></li>
              <li><a href="html/contact.php">联系我们</a></li>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>
    </div>

    <!--mobile header start-->
  <div class="m-header">
      <div class="am-g am-show-sm-only">
        <div class="am-u-sm-2">
          <div class="menu-bars">
            <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
            <!-- 侧边栏内容 -->
            <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
            <a href="javascript: void(0)" class="am-menu-toggle"></a>

            <div class="am-offcanvas" >
              <div class="am-offcanvas-bar">
              <ul class="am-menu-nav am-avg-sm-1">
                  <li><a href="./index.php" class="" >首页</a></li>
                  <li>
                    <a href="html/example.php?imgId=1" class="" >主营业务</a>
                  </li>
                  <li class=""><a href="html/cars.php?car_id=1" class="" >车辆查询</a></li>
                  <li class=""><a href="html/solution.php" class="" >租车流程</a></li>
                  <li class="am-parent">
                    <a href="html/news.php" class="" >公司动态</a>
              
                  </li>
                  <li class=""><a href="html/travel.php" class="" >旅游导航</a></li>
                  <li class=""><a href="html/join.php" class="" >关于我们</a></li>
                  <li class=""><a href="html/contact.php" class="" >联系我们</a></li>
                
              </ul>

              </div>
            </div>
          </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href=""><img src="assets/images/logo.png" alt=""></a>
          </div>
        </div>
      </div>
    <!--mobile header end-->
    </div>




    <!--===========layout-container================-->
    <div class="layout-container">
      <div class="index-page">
        <div data-am-widget="tabs" class="am-tabs am-tabs-default">
          <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active">
              <div class="index-banner" style="background:url(<?php echo $arr2[0]['fla_img'];?>)">
                <div class="index-mask">
                  <div class="container">
                    <div class="am-g">
                      <div class="am-u-md-10 am-u-sm-centered">
                        <h1 class="slide_simple--title">众多车型任您选！</h1>
                        <p class="slide_simple--text am-text-left">
												  公司经营有品牌大巴车、考斯特、新锐、别克商务、瑞风商务、奥迪A6L、大白鲨、保时捷帕拉美纳、保时捷911，法拉利等各类车型多辆供客户选择使用！
											  </p>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-tab-panel-1 class="am-tab-panel ">
              <div class="index-banner" style="background:url(<?php echo $arr2[1]['fla_img'];?>)">
                <div class="index-mask">
                  <div class="container">
                    <div class="am-g">
                      <div class="am-u-md-10 am-u-sm-centered">
                        <h1 class="slide_simple--title">专业驾驶！</h1>
                        <p class="slide_simple--text am-text-left">
												  公司拥有一批专业素质强，敬职敬业，诚实守信的专业团队和一批安全驾驶、技术精湛、意识强、对成都市郊区的路况非常熟悉的司机队伍，给您的旅行、商务会议活动保驾护航！
											  </p>
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
              <div class="index-banner" style="background:url(<?php echo $arr2[2]['fla_img'];?>)">
                <div class="index-mask">
                  <div class="container">
                    <div class="am-g">
                      <div class="am-u-md-10 am-u-sm-centered">
                        <h1 class="slide_simple--title">价格优惠！</h1>
                        <p class="slide_simple--text am-text-left">
												  我公司主要承接会议旅游接待，大型活动策划，展览展示等各类活动的组织安排和租车业务，是一家专业化、系统化运作的商务服务公司！
											  </p>
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-tab-panel-3 class="am-tab-panel ">
              <div class="index-banner" style="background:url(<?php echo $arr2[3]['fla_img'];?>)">
                <div class="index-mask">
                  <div class="container">
                    <div class="am-g">
                      <div class="am-u-md-10 am-u-sm-centered">
                        <h1 class="slide_simple--title">诚信服务！</h1>
                        <p class="slide_simple--text am-text-left">
												 们以专业、高效、可靠的服务理念赢得了广大客户的信任。目前已经成为众多知名企的长期合作伙伴并建立了长期稳定的合作关系！
											  </p>
                   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <ul class="am-tabs-nav am-cf index-tab">
            <li class="am-active">
              <a href="[data-tab-panel-0] am-g">
                <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                  <i class="am-icon-cog"></i>
                </div>
                <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                  <strong class="promo_slider_nav--item_title"><?php echo $arr[0]['fla_name'];?></strong>
                  <p class="promo_slider_nav--item_description"><?php echo $arr1[0]['fla_explain'];?></p>
                </div>
              </a>
            </li>
            <li class="a">
              <a href="[data-tab-panel-1] am-g">
                <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                  <i class="am-icon-lightbulb-o"></i>
                </div>
                <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                  <strong class="promo_slider_nav--item_title"><?php echo $arr[1]['fla_name'];?></strong>
                  <p class="promo_slider_nav--item_description"><?php echo $arr1[1]['fla_explain'];?></p>
                </div>
              </a>
            </li>
            <li class="">
              <a href="[data-tab-panel-2] am-g">
                <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                  <i class="am-icon-line-chart"></i>
                </div>
                <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                  <strong class="promo_slider_nav--item_title"><?php echo $arr[2]['fla_name'];?></strong>
                  <p class="promo_slider_nav--item_description"><?php echo $arr1[2]['fla_explain'];?></p>
                </div>
              </a>
            </li>
            <li class="">
              <a href="[data-tab-panel-3] am-g">
                <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                  <i class="am-icon-hourglass-end"></i>
                </div>
                <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                  <strong class="promo_slider_nav--item_title"><?php echo $arr[3]['fla_name'];?></strong>
                  <p class="promo_slider_nav--item_description"><?php echo $arr1[3]['fla_explain'];?></p>
                </div>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>


    <div class="section">
      <div class="container" >
        <div class="section--header">
					<h4 class="section--title">核心业务</h4>
				</div>

        <!--index-container start-->
        <div class="index-container">
          <div class="am-g">
 <?php
    $conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
    $sql = "select * from classify";
  $res = mysqli_query($conn,$sql);
  
  while($row=mysqli_fetch_assoc($res)){

  ?>

            <div class="am-u-md-3">
              <div class="features_item">
              <a href="html/example.php?imgId=<?php  echo $row['imgId'];?>">
								<img src=<?php  echo $row['imgAdd'];?>>
								<h3 class="features_item--title"><?php  echo $row['car_classify']; ?></h3>
								<p class="features_item--text">
									<?php  echo $row['classify_explain']; ?>
								</p>
                </a>
							</div>
            </div>

<?php }?>


           
          </div>
        </div>
        <!--index-container end-->
      </div>
    </div>

  </div>

  <hr>
  <!--promo_detailed end-->

  <div class="section"  style="border-bottom: 1px solid #e9e9e9;">
    <div class="container">
      <div class="section--header">
        <h2 class="section--title">我们的服务</h2>
  
      </div>

      <!--index-container start-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-3">
            <div class="service_item" style="padding:82px 15px 18px;">
              <i class="service_item--icon am-icon-diamond"></i>
              <h3 class="service_item--title">自驾&代驾</h3>
              <div class="service_item--text" >
								<p>租车可以选择自驾或者我们的司机代驾，我们有多种车型满足你的自驾，也有经验丰富的司机为您全程代驾，想去哪儿就去哪儿！</p>
							</div>
              <footer class="service_item--footer"><a href="html/example.php?imgId=1" class="link -blue_light">开始选车>></a></footer>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item" style="padding:82px 15px 18px;">
              <i class="service_item--icon am-icon-user"></i>
              <h3 class="service_item--title">商务用车</h3>
              <div class="service_item--text">
								<p>我们的服务不仅提供全天候的用车服务，迅航还能为您提供机场接送、市内、市郊的各类主要景点路线，让您的出行更轻松、更便捷。</p>
							</div>
              <footer class="service_item--footer"><a href="html/example.php?imgId=5" class="link -blue_light">开始选车>></a></footer>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item" style="padding:82px 15px 18px;">
              <i class="service_item--icon am-icon-umbrella"></i>
              <h3 class="service_item--title">个人用车</h3>
              <div class="service_item--text">
								<p>当您需要参加各种高档聚会时，穿着正式礼服却因为无法及时打到出租车而焦急万分吗？迅航商务可以为您节省时间和彰显尊贵。    </p>
							</div>
              <footer class="service_item--footer"><a href="html/example.php?imgId=1" class="link -blue_light">开始选车>></a></footer>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item" style="padding:82px 15px 18px;">
              <i class="service_item--icon am-icon-briefcase"></i>
              <h3 class="service_item--title">外出包车</h3>
              <div class="service_item--text">
								<p>单位、学校、朋友准备一起出去放松，迅航商务是你最好的选择，有各种空间大小的车供你选择，再也没有人多座位不够的烦恼！</p>
							</div>
              <footer class="service_item--footer"><a href="html/example.php?imgId=8" class="link -blue_light">开始选车>></a></footer>
            </div>
          </div>
        </div>
      </div>
      <!--index-container end-->
    </div>
  </div>







<hr>
  <div class="section"  style="border-bottom: 1px solid #e9e9e9;">
    <div class="container">
      <div class="section--header">
        <h2 class="section--title">租车流程</h2>
    
      </div>

      <!--index-container start-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-3">
            <div class="service_item">
       
              <h3 class="service_item--title">第一步</h3>
              <div class="service_item--text">
                <p>来电或联系客服告知用车需求（租期、车型、行程等），也可以在网站车辆信息页面预约。</p>
              </div>
             
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
           
              <h3 class="service_item--title">第二步</h3>
              <div class="service_item--text">
                <p>我们工作人员会立即回电为您提供报价等信息咨询，并收取用车人的相关证件原件图和押金！</p>
              </div>

            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
    
              <h3 class="service_item--title">第三步</h3>
              <div class="service_item--text">
                <p>订车成功：公司会提前一天把司机信息发送给订车人，届时驾驶员会和用车人取得联系。</p>
              </div>

            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
   
              <h3 class="service_item--title">第四步</h3>
              <div class="service_item--text">
                <p>费用结算：用车结束后，驾驶员或交接工作人员当场和用车人结清费用退还押金，可开发票。</p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--index-container end-->
    </div>
  </div>


  <!--customer-logo start-->
    <div class="customer-logo">
      <div class="container">
        <div class="am-g">
          <div style="margin-top:10px;margin-bottom:10px;font-size:15px;">
           友情链接：
           <?php
           $sql6="select * from link"; 
$result6=mysqli_query($conn,$sql6); 
while($row6=mysqli_fetch_array($result6)){ 
 

?>
            <a target="_blank" href=<?php echo 'http://'.$row6['link_add'];?> style="color:#000"> <?php echo $row6['link_name'];?></a>&nbsp;&nbsp;
<?php }?>
          </div>
          
        </div>
      </div>
    </div>
  <!--customer-logo end-->

  <!--===========layout-footer================-->
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
  <script src="assets/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="assets/js/amazeui.js" charset="utf-8"></script>
  <script src="assets/js/common.js" charset="utf-8"></script>




  <div id="floatTools" class="rides-cs" style="height:246px;">
  <div class="floatL">
    <a style="display:block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px" href="javascript:void(0);">展开</a>
    <a style="display:none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:287px;width: 140px;margin-top:20px;">
    <div class="cn">
    
      <ul>
        <li><span><?php echo $arr3[0]['kf_name'];?>:</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $arr3[0]['kf_qq'];?>&site=qq&menu=yes"><img border="0" src="assets/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
       
        <li><span>手机：<?php echo $arr3[0]['kf_tel'];?></span></li>
         <li><span><?php echo $arr4[0]['kf_name'];?>:</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $arr4[0]['kf_qq'];?>&site=qq&menu=yes"><img border="0" src="assets/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>手机：<?php echo $arr4[0]['kf_tel'];?></span></li>
        <li style="border:none;"><span>座机：<?php echo $arr3[0]['kf_number'];?></span> </li>
      </ul>

    </div>
  </div>
</div>
</body>

</html>
