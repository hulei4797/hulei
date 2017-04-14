
<?php
$id=$_GET["imgId"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>迅航商务-主营业务</title>
<?php
  include 'comm_meta.php';
  ?>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/example.min.css" />
  <script type="text/javascript" language="javascript">
    jQuery.noConflict();  
    function initFirstTab(){
        jQuery('#iframepage').attr("src","rentcar<?php echo $id;?>.php");
    }
  </script>
  <script type="text/javascript" language="javascript"> 
function iFrameHeight() { 
var ifm= document.getElementById("iframepage"); 
var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument; 
if(ifm != null && subWeb != null) { 
ifm.height = subWeb.body.scrollHeight; 
} 
} 
</script> 

</head>
<body onload="initFirstTab()">
 <?php
  include 'comm_header.php';
  ?>
    <!--===========layout-container================-->


    <div class="section">
      <div class="container">
        <div class="section--header">
		
					<p class="section--description">
						“诚信”是我们立足之本，“创新”是我们生存之源，“便捷”是我们努力的方向，
						<br>用户的满意是我们的收益、用户的信赖是我们的成果。
					</p>
				</div>


        <div class="example-container">
          <div class="am-tabs" data-am-tabs>
            <ul class="am-nav am-nav-tabs am-g">
              <li  style="width:12.5%;"><a href="rentcar1.php" target="iframepage">个人租车</a></li>
              <li  style="width:12.5%;"><a href="rentcar2.php" target="iframepage">单位租车</a></li>
              <li  style="width:12.5%;"><a href="rentcar3.php" target="iframepage">团体租车</a></li>
              <li  style="width:12.5%;"><a href="rentcar4.php" target="iframepage">房车出租</a></li>
              <li  style="width:12.5%;"><a href="rentcar5.php" target="iframepage">商务用车</a></li>
              <li  style="width:12.5%;"><a href="rentcar6.php" target="iframepage">旅游租车</a></li>
              <li  style="width:12.5%;"><a href="rentcar7.php" target="iframepage">机场接送</a></li>
              <li  style="width:12.5%;"><a href="rentcar8.php" target="iframepage">班车接送</a></li>
            </ul>
            </div>
               

              <div class="am-tab-panel" >
              <iframe  name="iframepage" id="iframepage"  frameBorder=0 scrolling=no width="100%" onLoad="iFrameHeight()" ></iframe>

              </div> 
     </div></div>

  <!--===========layout-footer================-->
     <?php
  include 'comm_footer.php';
  ?>
  <script src="../assets/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="../assets/js/amazeui.js" charset="utf-8"></script>
  <script src="../assets/js/common.js" charset="utf-8"></script>
<?php
  include 'qq.php';
  ?>
</body>

</html>
