<?php
$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql5="select * from company"; 
$result5=mysqli_query($conn,$sql5); 
$arr5=array();
while($row5=mysqli_fetch_array($result5)){ 
   array_push($arr5,$row5);
}
?>
<html>
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
              <li class=""><a href="../index.php">首页</a></li>
              <li>
               <a href="example.php?imgId=1">主营业务</a>
                <!-- sub-menu end-->
              </li>
              <li><a href="cars.php?car_id=1">车辆查询</a></li>
              <li><a href="solution.php">租车流程</a></li>
              <li>
                <a href="news.php">公司动态</a>
        
              </li>
              <li><a href="travel.php">旅游导航</a></li>
              <li><a href="join.php">关于我们</a></li>
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
                  <li class=""><a href="cars.php?car_id=1" class="" >车辆查询</a></li>
                  <li class=""><a href="solution.php" class="" >租车流程</a></li>
                  <li>
                  <a href="news.php">公司动态</a>
                 </li>
                   <li><a href="travel.php">旅游导航</a></li>
                   <li><a href="join.php">关于我们</a></li>
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
    </div>
    </body>