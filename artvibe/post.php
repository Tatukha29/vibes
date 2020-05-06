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
    $result=mysqli_query($connect, "SELECT * FROM news");
    $result2=mysqli_query($connect, "SELECT * FROM vibes");
    $result3=mysqli_query($connect, "SELECT * FROM users1");
    $res3=$result3->fetch_assoc();
    $userid=$res3['user'];
  ?>
  <div class="header fixed-top" width="4em">
    keep calm and wait for the logo to appear
  </div>
  <div class="main">
    <div class="row publ">
      <div class="col publbtn bisnesbtn">
        <p>
          Бизнес
        </p>
      </div>
      <div class="col publbtn projectbtn">
         <p>
          Проект
        </p>
      </div>
    </div>
    <div class="bisnes"> 
    <form  method="POST" class="dropdown-item" action="post1.php" enctype="multipart/form-data">
        <input placeholder="Введите название" type="" name="name"  class="postinput">
        <div class="input-group mb-7">
  <div class="input-group-prepend">
  </div>
  <select class="postinput" name="service" id="inputGroupSelect01">
    <option style="height: 10px;width: 650px;font-size: 10px;" selected>Выберите категорию</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="1">Музыка</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="2">Фотография</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="3">Живопись</option>
  </select>
</div>
<div class="input-group">
  <textarea name="post_text" style="width: 650px;height: 160px;font-size: 40px;"class="form-control" aria-label="With textarea"></textarea>
</div>
<input type="file" name="img" class="postinput">
<button class="postbtn">  
Опубликовать1</button>
    </form>
  </div>
<div class="project"> 
    <form  method="POST" class="dropdown-item" action="post2.php" enctype="multipart/form-data">
        <input placeholder="Введите название" type="" name="name"  class="postinput">
        <div class="input-group mb-7">
  <div class="input-group-prepend">
  </div>
  <select class="postinput" name="service" id="inputGroupSelect01">
    <option style="height: 10px;width: 650px;font-size: 10px;" selected>Выберите категорию</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="1">Музыка</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="2">Фотография</option>
    <option  style="height: 10px;width: 650px;font-size: 10px;" value="3">Живопись</option>
  </select>
</div>
<div class="input-group">
  <textarea name="post_text" style="width: 650px;height: 160px;font-size: 40px;"class="form-control" aria-label="With textarea"></textarea>
</div>
<input type="file" name="img" class="postinput">
<button class="postbtn">  
Опубликовать2</button>
    </form>
  </div>
   </div>

	<div class="block fixed-bottom">
    <div class="row">
      <div class="col justify-content-center">
        <a href="index.php">
        <svg class="justify-content-center bi bi-justify" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg>
</a>
      </div>
      <div class="col">
         <a href="news.php">
        <svg class="bi bi-pencil-square" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
</svg>
</a>
      </div>
      <div class="col">
        <a href="post.php">
        <svg class="bi bi-plus-square" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
</svg>
</a>
      </div>
      <div class="col">
        <a href="notif.php">
       <svg class="bi bi-bell" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 16a2 2 0 002-2H6a2 2 0 002 2z"/>
  <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 004 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 00-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 111.99 0A5.002 5.002 0 0113 6c0 .88.32 4.2 1.22 6z" clip-rule="evenodd"/>
</svg>
</a>
      </div>
      <div class="col">
        <a href="account.php">
     <svg class="bi bi-people-circle" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
</svg>
</a>
      </div>
      
    </div>
  </div>

<script type="text/javascript" src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="/__/firebase/7.14.2/firebase-app.js"></script>
<script src="/__/firebase/7.14.2/firebase-analytics.js"></script>
<script src="/__/firebase/init.js"></script>
</body>
</html>