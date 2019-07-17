<?php
include 'sqlDB.php';
include 'config.php';

session_start();
if(!empty($_POST["reg_un"])){
  $query="SELECT*FROM tb_users_214 WHERE username='"
  . $_POST["reg_un"]
  ."' and password='"
  .$_POST["reg_pass"]
  ."'";


$result = mysqli_query($connection , $query);
$rowPlayer = mysqli_fetch_array($result);

if(is_array($rowPlayer))
{
  $_SESSION=$rowPlayer;
  if($rowPlayer['role']==='Player')
  header('Location:indexPlayer.php');
  else{
  header('Location:indexCoach.php');
  }
}

else{
  $message="Invalid mail or password";
}
}

?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/styleForm.css">
    <script src="js/mainForm.js" async></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
      <body>
          <form method="post">
            <div class="login-page">
              <div class="topBounce">
                <img src="images/9.svg" id="ball">
                <img src="images/Asset1.svg" id="logo">
              </div>
                <h1 id="headline">הטורניר השנתי</h1>
                <div id="formWrapper">
                 <div id="form">
                  <form class="login-form">
                        <input type="text" placeholder="username" class="form-control" name="reg_un" />
                        <input type="password" placeholder="password" name="reg_pass"/>
                        <button>login</button>
                        <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div> 
                         <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
                      </form>
                    </div>
                  </div>
                  </div>
        </form>  
      </body>
</html>