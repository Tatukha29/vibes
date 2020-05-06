<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
$result=mysqli_query($connect, "SELECT * FROM users1");
$res=$result->fetch_assoc();
 ?>
 <form  method="POST" class="dropdown-item" action="login1.php" enctype="multipart/form-data">
 	<div class="col-8">
 		<input style="height: 100px; font-size: 50px; width: 550px;margin-left: 35px" placeholder="username" type="" name="user" class="form-control">;
 	<input style="height: 100px; font-size: 50px; width: 550px;margin-left: 35px" placeholder="password" type="password" name="password" class="form-control">;
 	 <button style="height: 60px; width: 150px; font-size: 40px; margin-left: 29px; margin-top: 10px">
 	 	Войти
 	 </button>
 	   
 	 <?php
 	 echo '<h6>' . $_GET['error'] . '</h6>'; ?>
 	 <h1 class="center">
        Нет аккаунта? 
        <a class="center" href="registr.php">Регистрация</a>
        </h1>

 	</div>
 	</form>
<script type="text/javascript" src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="/__/firebase/7.14.2/firebase-app.js"></script>
<script src="/__/firebase/7.14.2/firebase-analytics.js"></script>
<script src="/__/firebase/init.js"></script>
</body>
</html>