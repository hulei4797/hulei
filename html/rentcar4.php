    <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板</title>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/example.min.css" />
</head>
<body>
    <div style="margin-top:13px;">
 <div class="am-tab-panel" id="tab-4-3">
 <div class="am-g">

     <?php
    $conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
  $pageSize = 8;   //每页显示的数量
  $rowCount = 0;   //要从数据库中获取
  $pageNow = 1;    //当前显示第几页
   
  //如果有pageNow就使用，没有就默认第一页。
  if (!empty($_GET['pageNow'])){
    $pageNow = $_GET['pageNow'];
  }
   
  $pageCount = 0;  //表示共有多少页
   
  $sql1 = "select count(car_id) from car where car_classify like '%房车出租%'";
  $res1 = mysqli_query($conn,$sql1);
   
  if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];
  }
   if($rowCount<1){
    echo '<p style="font-size:18px;text-align:center;margin-top:20px;">没有相关记录!<p>';
  }else{
  //计算共有多少页，ceil取进1
  $pageCount = ceil(($rowCount/$pageSize));
   
  //使用sql语句时，注意有些变量应取出赋值。
  $pre = ($pageNow-1)*$pageSize;
   
  $sql2 = "select * from car where car_classify like '%房车出租%' limit $pre,$pageSize";
  $res2 = mysqli_query($conn,$sql2);
 
  while($row=mysqli_fetch_assoc($res2)){

  ?>
             
   
                   <div class="am-u-md-3" style="height:300px;">
                   
                 
                     <a href="car_message.php?car_id=<?php  echo $row['car_id']; ?>">  <img src=<?php  echo $row['car_img']; ?> style="width:100%;height:200px;"> </a>
                     <div style="margin-top:20px;text-align:center;"></div>
                     <div style="text-align:right;">
                  <table border="0" width=100%>
                 <td  margin-left="10px";><a href="car_message.php?car_id=<?php  echo $row['car_id']; ?>" style="color:#4F4F4F"><?php  echo $row['car_name'];?></a></td>
                 <td align="right"><?php  echo $row['car_price'];?>元/天</td>
                  </table>
                     </div>
                   </div>          
          
       <?php   
      } 
      ?>
      </div>
        <p>
      <div style="text-align:center;" >
      第
      <?php 
      echo $pageNow;
      ?>页
      <?php
      for ($i=1;$i<=$pageCount;$i++){
  
      echo "<a href='rentcar1.php?pageNow=$i'>$i</a> ";
    }?>&nbsp;共<?php
     echo $pageCount;
       ?>页</div>
         <?php }?>
      </p>
    </div>
    </div>
    </body>
    </html>