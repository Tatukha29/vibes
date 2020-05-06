<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
//$result=mysqli_query($connect, "SELECT * FROM users1");
 ?>
 
<div class="" >
	
	<div class="">
		<div>
			<form  method="POST" class="dropdown-item" action="registr1.php" enctype="multipart/form-data">
			<?php 
 					echo '<input placeholder="mail" type="" name="mail" class="form-control">';
 	 				echo '<input placeholder="name"  type="" name="name" class="form-control">';
 					echo '<input placeholder="username" type="" name="user" class="form-control">'; 
 					echo '<input placeholder="password" type="password" name="password"class="form-control">';
 					echo '<input placeholder="avatar" type="file" name="avatar" class="form-control">'; 
 	 			?>
 	 			<button class="rgbtn">
 	 				<h6>
 	 					Регистрация
 	 				</h6>
 	 			</button>
 			</form>
 	 		<h6 class="center">
 	 			Есть аккаунт? 
 	 			<a href="login.php">Вход</a>
 	 			</h6>
 		</div>
	</div>
</div>
</body>
</html>