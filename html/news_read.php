<?php 
$id = $_GET['id']; //接收ID值 
$conn = mysqli_connect("localhost","root","","xunhang");
$sql = "UPDATE news SET read_num=read_num+'1' WHERE news_id = '$id'"; //执行更新点击数的语句 
$result = mysqli_query($conn,$sql); //执行语句 
$url = "read.php?id={$id}"; //执行更新后要跳转的地址,就是去文章页面 
header("location: $url"); //执行跳转
?> 
