<?php
   $connect = mysqli_connect('127.0.0.1','root','','tanya29');
	$result=mysqli_query($connect, "SELECT * FROM users1 WHERE user='" . $_POST['user'] ."' AND password = '" . $_POST['password'] . "' ");
	$res=$result->fetch_assoc();
	if($_POST['user']==$res['user'] && $_POST['password']==$res['password'] && $_POST['user']!='admin'){
	header('location:http://localhost/artvibe/index.php?id='.$res['user'].'');
	}
	if($_POST['user']!=$res['user'] && $_POST['password']!=$res['password'] ){
	header('location:http://localhost/artvibe/login.php?error="Неверно введены логин или пароль"');
	}
	?>
	<meta charset="utf-8">