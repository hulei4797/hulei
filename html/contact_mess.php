<?php 

$mess_name = $_POST['name'];
$mess_tel = $_POST['number'];
$mess_email = $_POST['email'];
$mess_content = $_POST['text'];
$mess_type=$_POST['option'];
date_default_timezone_set('PRC');
$now=date('Y-m-d H:i:s',time());


header('Content-Type: text/html; charset=utf8');

$conn = mysqli_connect("localhost","root","","xunhang");//ip   用户名  密码 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO message(mess_name,mess_email,mess_tel,mess_content,mess_type,mess_date)VALUES('$mess_name','$mess_email','$mess_tel','$mess_content','$mess_type','$now')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>