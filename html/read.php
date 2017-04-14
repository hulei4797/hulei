<?php 
$id = $_GET['id'];
 $id1=$id-1;
 $id2=$id+1;
header('Content-Type: text/html; charset=utf8');

$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql="select * from news where news_id=$id;"; 
$result=mysqli_query($conn,$sql); 
$arr=array();
while($row=mysqli_fetch_array($result)){ 
   array_push($arr,$row);
}

  $sql1 = "select count(news_id) from news";
  $res1 = mysqli_query($conn,$sql1);
   
  if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];
  }


  $sql3="select * from news order by news_date desc limit 5;";
  $result3=mysqli_query($conn,$sql3); 
  $arr3=array();
  while($row3=mysqli_fetch_array($result3)){ 
   array_push($arr3,$row3);
}
   

   $sql4="select * from news where news_id=$id1;"; 
$result4=mysqli_query($conn,$sql4); 
$arr4=array();
while($row4=mysqli_fetch_array($result4)){ 
   array_push($arr4,$row4);
}

   $sql5="select * from news where news_id=$id2;"; 
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
  <link rel="stylesheet" href="../assets/css/news.min.css" />

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
                    <a href=""><img src="../assets/images/logo.png" alt="" /></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
                        <div class="contact_mini">
                          <i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
                          <strong>400-800-7513</strong>
                          <span>周一~周五, 9:00 - 18:00</span>
                        </div>
                      </div>
                      <div class="header_contacts--item">
                      
                      </div>
                      <div class="header_contacts--item">
                        <div class="contact_mini">
                          <i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
                          <strong>金沙揽胜</strong>
                          <span>成都青阳区清江中路</span>
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
              <li class=""><a href="../index.php">首页</a></li>
               <li>
                <a href="example.php?imgId=1">主营业务</a>
                <!-- sub-menu start-->
                <!-- sub-menu end-->
              </li>
              <li><a href="cars.php?car_id=1">车辆信息</a></li>
              <li><a href="solution.php">解决方案</a></li>
              <li>
                <a href="news.php">公司动态</a>
        
              </li>
              <li><a href="about.php">关于我们</a></li>
              <li><a href="join.php">加入我们</a></li>
              <li><a href="contact.php">联系我们</a></li>
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
                  <li><a href="../index.php" class="" >首页</a></li>
                   <li>
                         <a href="example.php?imgId=1">主营业务</a>
                  </li>
                  <li class=""><a href="cars.php?car_id=1" class="" >车辆信息</a></li>
                  <li class=""><a href="solution.php" class="" >解决方案</a></li>
                  <li class="am-parent">
                    <a href="news.php" class="" >公司动态</a>
                
                  </li>
                  <li class=""><a href="about.php" class="" >关于我们</a></li>
                  <li class=""><a href="join.php" class="" >加入我们</a></li>
                  <li class=""><a href="contact.php" class="" >联系我们</a></li>
                
              </ul>

              </div>
            </div>
          </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href=""><img src="../assets/images/logo.png" alt=""></a>
          </div>
        </div>
      </div>
      <!--mobile header end-->
    </div>



    <!--===========layout-container================-->
    <div class="layout-container">
      

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="../index.php">首页</a></li>
            <li class="am-active"><a href="news.php">公司动态</a></li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section news-section">
      <div class="container">
        <!--news-section left start-->
        <div class="am-u-md-9">
          <div class="article">
            <header class="article--header">
              <h2 class="article--title" align="center"><a href="#" rel=""><?php echo $arr[0]['news_name'];?></a></h2>
              <ul class="article--meta">
                <li class="article--meta_item">发布日期：<?php echo $arr[0]['news_date'];?></li>
                <li class="article--meta_item">阅读次数：<?php echo $arr[0]['read_num'];?></li>
              </ul>
            </header>
            <div class="article--content">
      
     
             <?php echo $arr[0]['news_content'];?>
      
              
            </div>
            <div style="margin-top:20px;">
            <?php 
            if($id1>0){
            ?>
           <div style="width:50%;float:left;text-align:center;">
            上一篇：<a href="news_read.php?id=<?php echo $id1;?>"><?php echo $arr4[0]['news_name'];?></a>
            </div>
            <?php }else{?>
            <div style="width:50%;float:left;text-align:center;">
            上一篇：没有了</div>
            <?php }?>
            <?php 
            if($id1<$rowCount-1){
            ?>
            <div style="width:50%;float:left;text-align:center;">
            下一篇：<a href="news_read.php?id=<?php echo $id2;?>"><?php echo $arr5[0]['news_name'];?></a>
            </div>
            <?php }else{?>
            下一篇：没有了<?php }?>
            </div>
          </div>

          <div class="comments">
            <div class="comments">
							
							<div class="comment_form">
								

							</div>
						</div>
          </div>
        </div>
        <!--news-section left end-->

        <!--news-section right start-->
        <div class="am-u-md-3">
          <div class="blog_sidebar">
       
            <div class="widget">
           <h2 class="widget--title"><i class="am-icon-comments-o"></i>最新动态</h2>
              <ul>
								<li><a href="read.php?id=<?php echo $arr3[0]['news_id'];?>"><?php echo $arr3[0]['news_name'];?></a></li>
								<li><a href="read.php?id=<?php echo $arr3[1]['news_id'];?>"><?php echo $arr3[1]['news_name'];?></a></li>
								<li><a href="read.php?id=<?php echo $arr3[2]['news_id'];?>"><?php echo $arr3[2]['news_name'];?></a></li>
                                <li><a href="read.php?id=<?php echo $arr3[3]['news_id'];?>"><?php echo $arr3[3]['news_name'];?></a></li>
                                <li><a href="read.php?id=<?php echo $arr3[4]['news_id'];?>"><?php echo $arr3[4]['news_name'];?></a></li>
							</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-rss"></i>站内公告</h2>
              <ul>
								<li><a href="#">今天的应用号只是用了HTML技术中无需下载安装、跨平台的功能， 并没有用到HTML开发互联的精髓。 它只是一个...</a><span class="rss-date">November 10, 2015</span></li>
							</ul>
            </div>
          </div>
        </div>
        <!--news-section right end-->
      </div>
    </div>
  </div>


  <div class="section" style="margin-top:0px;background-image: url('../assets/images/pattern-light.png');">
    <div class="container">
      <!--index-container start-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-phone"></i>
							<strong class="contact_card--title">Contact Us</strong>
							<p class="contact_card--text">Feel free to call us on <br> <strong>0 (855) 233-5385</strong> <br> Monday - Friday, 8am - 7pm</p>
              <button type="button" class="am-btn am-btn-secondary">Order a Call Back</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-envelope-o"></i>
							<strong class="contact_card--title">Our Email</strong>
							<p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@financed.com">info@financed.com</a>,</strong> <br> and we’ll get back soon.</p>
              <button type="button" class="am-btn am-btn-secondary">Start Writing</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-map-marker"></i>
							<strong class="contact_card--title">Our Address</strong>
							<p class="contact_card--text">Come visit us at <br> <strong>Stock Building, New York,</strong> <br> NY 93459</p>
              <button type="button" class="am-btn am-btn-secondary">See the Map</button>
						</div>
          </div>
        </div>
      </div>
      <!--index-container end-->
    </div>
  </div>

  <!--===========layout-container================-->
  <div class="layout-footer">
    <div class="footer">
      <div style="background-color:#383d61" class="footer--bg"></div>
      <div class="footer--inner">
        <div class="container">
          <div class="footer_main">
            <div class="am-g">
              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">关于我们</strong>
                  <div class="footer_about">
                      <p class="footer_about--text">
                        云适配(AllMobilize Inc.) 是全球领先的HTML5企业移动化解决方案供应商，由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家在美国西雅图创立.
                      </p>
                      <p class="footer_about--text">
                        云适配跨屏云也成功应用于超过30万家企业网站，包括微软、联想等世界500强企业
                      </p>
                    </div>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">产品中心</strong>
                  <ul class="footer_navigation">
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Enterplorer 企业浏览器</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Xcloud 网站跨屏云</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
                  </ul>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">技术支持</strong>
                  <ul class="footer_navigation">
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                  </ul>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">联系详情</strong>
                  <ul class="footer_contact_info">
                    <li class="footer_contact_info--item"><i class="am-icon-phone"></i><span>服务专线：400 069 0309</span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span>yunshipei.com</span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-map-marker"></i><span>北京市海淀区海淀大街27号天使大厦（原亿景大厦）三层</span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-clock-o"></i><span>更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="../assets/js/amazeui.js" charset="utf-8"></script>
</body>

</html>
