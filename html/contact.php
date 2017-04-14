<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>迅航商务-联系我们</title>
   <?php
  include 'comm_meta.php';
  ?>
  <link rel="stylesheet" href="../assets/css/amazeui.css" />
  <link rel="stylesheet" href="../assets/css/common.min.css" />
  <link rel="stylesheet" href="../assets/css/contact.min.css" />
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
  <?php
  include 'comm_header.php';
  ?>


    <!--===========layout-container================-->

    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title"> 企业文化</h2>
					<p class="section--description">
             办实事，求实效，创一流品牌，树良好企业形象。
            
					</p>
          <br>
				</div>

        <div class="section-container">
          <div class="am-g">
            <!--contact-left start-->
            <div class="am-u-md-5">
              <ul class="contact-left">
                <li class="contact-box-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-phone"></i>
										<h3 class="contact_item--title">电话</h3>
										<p class="contact_item--text">
											手机号： <strong>135-4714-9418</strong>
											<br>9：00-21：00
										</p>
									</div>
                </li>
                <li class="contact-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-envelope-o"></i>
										<h3 class="contact_item--title">邮箱</h3>
										<p class="contact_item--text">
                      849429962@qq.com, <br/>
										</p>
									</div>
                </li>
                <li class="contact-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-map-marker"></i>
										<h3 class="contact_item--title">地址</h3>
										<p class="contact_item--text">
											成都市青羊区清江中路金沙揽胜
										</p>
									</div>
                </li>
              </ul>
            </div>
            <!--contact-left end-->

            <!--contact-right start-->
              <div class="am-u-md-7">
                <div class="contact-form">
                  <h3 class="contact-form_title">咨询、反馈、建议</h3>
                  <br>
                  <form class="am-form" method="post" action="contact_mess.php" name="forma" onsubmit="return Validate()">
                    <div class="am-g">
                      <div class="am-u-md-6">
                        <input type="text" class="" name="name" id="doc-ipt-email-1" placeholder="姓名">
                      </div>
                      <div class="am-u-md-6">
                        <input type="email" class="" name="email" id="doc-ipt-email-2" placeholder="Email">
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-6">
                        <input type="name" class="" name="number" id="doc-ipt-email-3" placeholder="电话">
                      </div>
                      <div class="am-u-md-6">
                        <div class="am-form-group" style="background: #fcfcfc;">
                          <select id="doc-select-1" name="option" style="width: 100%;font-size: 16px;line-height: 20px;padding: 15px 20px;border-radius: 3px;color: #262626;border: 2px solid #e9e9e9;">
                            <option value="咨询">咨询</option>
                            <option value="反馈">反馈</option>
                            <option value="建议">建议</option>
                          </select>
                          <span class="am-form-caret"></span>
                        </div>
                      </div>
                    </div>

                    <div class=am-g>
                      <div class="am-u-md-12">
                        <div class="am-form-group">
                          <textarea class="" rows="5" name="text" id="doc-ta-1" placeholder="写下你想说的..."></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-9">
                       
                      </div>
                      <div class="am-u-md-3">
                        <p><button type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">提交</button></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            <!--contact-right end-->
          </div>
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
