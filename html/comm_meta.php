<?php
$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
$sql5="select * from company"; 
$result5=mysqli_query($conn,$sql5); 
$arr5=array();
while($row5=mysqli_fetch_array($result5)){ 
   array_push($arr5,$row5);
}
?>
  <meta name="Keywords" content=<?php echo $arr5[0]['company_keywords'];?>/>
  <meta name="Description" content=<?php echo $arr5[0]['company_descr'];?>/>
  <link rel="SHORTCUT ICON" href="../xunhang.ico"/>