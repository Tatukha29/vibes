<?php
$connect = mysqli_connect('127.0.0.1','root','','Tanya29'); 
$result = mysqli_query($connect, "INSERT INTO news (name,service,post_text,img)  VALUES ('". $_POST['name'] ."','". $_POST['service'] ."','". $_POST['post_text'] ."','images/". $_FILES['img']['name'] ."')");
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "images/".$_FILES['img']['name']);
header('location:http://localhost/artvibe/news.php');
echo $connect->query($result);

?>