<?php 
header('Content-Type: text/html; charset=utf8');
$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql="select * from company;"; 
$result=mysqli_query($conn,$sql); 
$arr=array();
while($row=mysqli_fetch_array($result)){ 
   array_push($arr,$row);
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>迅航商务-关于我们</title>
   <?php
  include 'comm_meta.php';
  ?>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/join.min.css" />
</head>
<body>
 <?php
  include 'comm_header.php';
  ?>
    <!--===========layout-container================-->
    
    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">我们的优势</h2>
					<p class="section--description">
						公司自2009年成立以来，我们以专业、高效、可靠的服务理念赢得了广大客户的信任!
					</p>
				</div>

        <div class="join-container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="careers--articles">
									
									<div class="careers_articles">
										<div class="careers_article">
											<i class="careers_article--icon am-icon-diamond"></i>
											<h3 class="careers_article--title">合作伙伴</h3>
											<div class="careers_article--text" style="text-align:left;">
												<p>
													中铁、飞利浦、中旅、全有家私、康富来等，以及多家企事业单位、外资企业、高科技民营企业及金融、制造业等行业建立了长期稳定的合作关系。
												</p>
											</div>
									
										</div>
										<div class="careers_article">
											<i class="careers_article--icon am-icon-key"></i>
											<h3 class="careers_article--title">立足之本</h3>
											<div class="careers_article--text" style="text-align:left;">
												<p>
                          一、客户至上，诚信服务、安全便捷<br>
                          二、没有最好，只有更好<br>
                          三、开放、文明、和谐、进取
												</p>
											</div>
										
										</div>
									
									</div>
								</div>
            </div>

            <div class="am-u-md-9">
        
              <div class="careers--vacancies">
                <div class="am-panel-group" id="accordion">
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
                        公司简介
                      </h4>
                    </div>
                    <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
                      <div class="am-panel-bd">
                        <div class="vacancies--item_content js-accordion--pane_content" style="">
														<?php echo $arr[0]['company_about'];?>
													</div>
                      </div>
                    </div>
                  </div>
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">
                        公司特色
                      </h4>
                    </div>
                    <div id="do-not-say-2" class="am-panel-collapse am-collapse">
                      <div class="am-panel-bd">
                        <?php echo $arr[0]['company_feature'];?>
                      </div>
                    </div>
                  </div>
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">
                        公司业务
                      </h4>
                    </div>
                    <div id="do-not-say-3" class="am-panel-collapse am-collapse">
                      <div class="am-panel-bd">
                       <?php echo $arr[0]['company_yewu'];?>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <!--===========layout-footer================-->
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
