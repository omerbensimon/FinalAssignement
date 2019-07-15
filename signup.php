<?php
include 'sqlDB.php';
  include 'config.php';
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="includes/styleForm.css">
		<meta charset="UTF-8">
  </head>
  <body>
    <form class="signup-form" method="POST" action="">
      <div class="login-page">
        <img src="images/Asset 1.svg" id="logo2">
        <h1 id="headline2">הטורניר השנתי</h1>
        <div id="form2">
          <form class="register-form">
            <input type="text" name="f_name" class="input-text" required placeholder="First Name">
            <input type="text" name="l_name" class="input-text" required placeholder="Last Name">
            <input type="password" name="pass" class="input-text" required placeholder="Choose A password" minlength="8"/>
            <input type="text" name="reg_name" class="input-text" placeholder="User Name">
            <input type="number" name="group_id" class="input-text" placeholder="Group Id" minlength="1">
            <label for="position">Usual Position On The Team</label>
            <label class="text">חלוץ <input class="check" type="radio" name="position" value="חלוץ"></label>
            <label class="text">שוער <input class="check" type="radio" name="position" value="שוער"></label>
            <label class="text">קשר <input class="check" type="radio" name="position" value="קשר"></label>
            <label class="text">מגן <input class="check" type="radio" name="position" value="מגן"></label>
            <label class="text">קיצוני <input class="check" type="radio" name="position" value="קיצוני"></label>
            <input type="url" name="website" class="input-text" required placeholder="Link To Personal Image">
            <label for="role">Head/Player</label>
            <label class="text">Head<input class="check" type="radio" name="role" value="head"></label>
            <label class="text">Player<input class="check" type="radio" name="role" value="Player"></label>
            <button name="save">submit</button>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div> 
          </form>
        </div>
      </div>
    </form>  
  </body>
</html>
<?php

$fn=0;
$ln=0;
$group=0;
$pas=0;
$pos=0;
$webs=0;
$result=0;
$rol=0;



  if(isset($_POST["f_name"]))
  {    
    $fn=$_POST['f_name'];
    $ln=$_POST['l_name'];
    $pas=$_POST['pass'];
    $reg=$_POST['reg_name'];
    $group=$_POST['group_id'];
    $pos=$_POST['position'];
    $webs=$_POST['website'];
    $rol=$_POST['role'];
    $query="INSERT INTO tb_users_214 (firstname,lastname,password,username,teamid,position,image_link,role) VALUES ('$fn' , '$ln' , '$pas' , '$reg' , '$group' , '$pos' , '$webs' , '$rol');";

    $result = mysqli_query($connection,$query);?>
<script>location.replace ("indexlogin.php")</script>
<?php
  } 
  else {
    $message="Invalid Data. Try Again";
  }

?>