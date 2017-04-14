<?php 

$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['text'];
$car_name=$_POST['car_name'];
date_default_timezone_set('PRC');
$now=date('Y-m-d H:i:s',time());

header('Content-Type: text/html; charset=utf8');

$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO cust_order(order_name,order_tel,order_message,car_name,order_time)VALUES('$name','$number','$message','$car_name','$now')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>