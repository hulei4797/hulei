<?php
header('Content-Type: text/html; charset=utf8');
$conn = mysqli_connect("localhost","root","","xunhang");
  $sql3="select * from news order by read_num desc limit 5;";
  $result3=mysqli_query($conn,$sql3); 
  $arr3=array();
  while($row3=mysqli_fetch_array($result3)){ 
   array_push($arr3,$row3);
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>迅航商务-公司动态</title>
   <?php
  include 'comm_meta.php';
  ?>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/news.min.css" />

</head>
<body>
  <?php
  include 'comm_header.php';
  ?>


    <!--===========layout-container================-->
    <div class="layout-container">
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title">公司动态</h1>
        </div>
      </div>

      
    </div>

    <div class="section news-section">
      <div class="container">
        <!--news-section left start-->
        <div class="am-u-md-9">
          <div class="article">
            
            <div class="article--content"> 
         <div style="height:50px;width:100%;background:#F0F0F0;color:#4F4F4F;font-family:华文黑体;text-align:left;line-height:50px;padding-left:20px;">
            所在位置：<a href="../index.php" style="color:#4F4F4F">首页</a>&nbsp;>>&nbsp;<a href="#" style="color:#4F4F4F">公司动态</a>
         </div>
              <table width="100%" border="0" style="border-collapse:separate; border-spacing:1px 15px;border:1px #F0F0F0 solid;">
        
                  <?php
    $conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
  $pageSize = 10;   //每页显示的数量
  $rowCount = 0;   //要从数据库中获取
  $pageNow = 1;    //当前显示第几页
   
  //如果有pageNow就使用，没有就默认第一页。
  if (!empty($_GET['pageNow'])){
    $pageNow = $_GET['pageNow'];
  }
   
  $pageCount = 0;  //表示共有多少页
   
  $sql1 = "select count(news_id) from news";
  $res1 = mysqli_query($conn,$sql1);
   
  if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];
  }
   
  //计算共有多少页，ceil取进1
  $pageCount = ceil(($rowCount/$pageSize));
   
  //使用sql语句时，注意有些变量应取出赋值。
  $pre = ($pageNow-1)*$pageSize;
   
  $sql2 = "select * from news limit $pre,$pageSize";
  $res2 = mysqli_query($conn,$sql2);
 
  while($row=mysqli_fetch_assoc($res2)){
              
  ?>
                <tr>
                <td width="15%"><div style="margin-left:30px;"><?php  echo $row['news_id']; ?></div></td>
                <td width="50%"><a href="news_read.php?id=<?php  echo $row['news_id']; ?>" style="color:#4F4F4F"><?php  echo $row['news_name']; ?></a></td>
                <td width="35%" align="center"><?php  echo $row['news_date']; ?></td>
              </tr> 
              <tr><td style="border-bottom:1px dashed #ccc"></td><td style="border-bottom:1px dashed #ccc"></td><td style="border-bottom:1px dashed #ccc"></td></tr>
           <?php
      }
           ?>

              <tr><td ></td><td align="center" width="50%">  <div style="text-align:center;" >
      第
      <?php 
      echo $pageNow;
      ?>页
      <?php
      if($pageCount<=5){
      for ($i=1;$i<=$pageCount;$i++){
  
      echo "<a href='rentcar1.php?pageNow=$i'>$i</a> ";
    }}
      else{
        for ($i=1;$i<=5;$i++){
  
      echo "<a href='rentcar1.php?pageNow=$i'>$i</a> ";
    }
      }
    ?>&nbsp;共<?php
     echo $pageCount;
       ?>页</div></td><td width="25%"></td></tr>
              </table>

            </div>

          </div>
 
          <div class="comments">
            <div class="comments">	
						</div>
          </div>
        </div>
        <!--news-section left end-->

        <!--news-section right start-->
        <div class="am-u-md-3">
          <div class="blog_sidebar">
       
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-comments-o"></i>热门动态</h2>
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
