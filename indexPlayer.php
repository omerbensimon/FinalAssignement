<?php
include 'sqlDB.php';
include 'config.php';

session_start();
$counter=0;
$query="SELECT teamid FROM tb_users_214 WHERE teamid='"
.$_SESSION["teamid"]
."'";
$resultTeam = mysqli_query($connection, $query);

if (mysqli_num_rows($resultTeam) > 0) {
   while($row = mysqli_fetch_assoc($resultTeam)) {
      $counter++;  
   }

  }

  $queryManager="SELECT * FROM tb_users_214 WHERE teamid='"
  .$_SESSION["teamid"]
  ."'and role='head'";
  $resultManager = mysqli_query($connection, $queryManager);
  $rowHead = mysqli_fetch_array($resultManager);


  $queryTeamPlayers="SELECT teamid FROM tb_users_214 WHERE teamid='"
  .$_SESSION["teamid"]
  ."'";
$resultTeam = mysqli_query($connection, $queryTeamPlayers);
$rowPlayers = mysqli_fetch_array($resultTeam);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>שכונה</title>
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />   
    <link rel="stylesheet" href="includes/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/userParams.js" ></script>
    <script src="js/main.js" ></script>
    <script src="js/game.js" ></script>
    <script src="js/image-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="includes/image-slider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
      <header>
      <script type="text/javascript">var playerID = "<?php echo $_SESSION["playerid"] ?>";</script>
      <script type="text/javascript" src="js/userParams.js"></script>  
      <script type="text/javascript">var teamID = "<?php echo $_SESSION["teamid"] ?>";</script>
      <script type="text/javascript" src="js/userParams.js"></script>  
      <script type="text/javascript">var rowPlayers = "<?php echo json_encode($rowPlayers); ?>";</script>
      <script type="text/javascript" src="js/userParams.js"></script> 
      <div id=userLogged>
          <div class="dropdown">
    <label>
              <span class=userLogo><label><i class="fa fa-user" aria-hidden="true"></i></span> </label>
              <span class="user">שלום </span>
              <span class="user"><?php echo $_SESSION["firstname"]?></span>
              <br>
              <span class="user">כדורגל </span>
</label>
    <ul>
    <li><span>פרופיל אישי</span></li>
    <li><a href="indexlogin.php"><span>התנתק</span></a></li>
  </ul>
</div>
              </div>
          <span class=headNav>
          <img src="images/Asset 1.svg" id="logo" alt="logo">
          <h2>הטורניר השנתי</h2>
          </span>
    
      <nav>
         
              <ul>
                  <li><a href="#" target="_self">בית</a></li>
                  <li><a href="#" target="_self">המאמן</a></li>
                  <li><a href="#" target="_self">הטורנירים</a></li>
                  <li><a href="#" target="_self">צפייה ישירה</a></li>
                  <li><a href="#" target="_self">ספונסרים</a></li>
                  <li><a href="#" target="_self">חנות</a></li>
              </ul>
      </nav>
  </header>
 
  <div id="slider-main">
    <div id="slider"></div>
    <div id="circles"></div> 
    <div id="SliderTitle">
    <div id="GrayRectangle">  הכדור בידיים שלנו </div>
    <a href="#" target="_self"><div id="YellowRectangle">לכל משחקי שכונה בעולם
        <span class="arrow1"><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>
    </div>

    </div>
</div>


<div class="countdown" id="countdown1">
    <span class="timeel seconds">00</span>
  <span class="timeel minutes">00</span>
  <span class="timeel hours">00</span>
  <span class="timeel days">00</span>
  <br>
  <span class="timeel timeRefSeconds">שניות</span>
  <span class="timeel timeRefMinutes">דקות</span>
  <span class="timeel timeRefHours">שעות</span>
  <span class="timeel timeRefDays">ימים</span>
  <br>
 <span class="timell final"> למשחק הגמר</span>
</div>

<div class="AllGames"></div>
<section class="turnament">המשחקים שלי
    <section class="top_line"></section>
    </section>

    <div class="GamesAndPractice">
      <div class="Game">
        <div class="head">למשחק הבא
        <a href="#" target="_self"><span class="arrowGame"><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>
        </div>
        <div class="topinfo">
        <span class="RegDark" id="place"></span>
        <span class="RegDark" id="date"></span>
        <span class="RegDark" id="hour"></span>
        
          <div class="GameVS">
          <span class="headcontent" id="firstGame"> </span>
        <span class="BottomVS">VS</span>
        <span class="headcontent" id="secondGame"></span>
        </div>
      </div>
     <div><a href="game.php" target="_self"> <button class="b">לצפייה בכל המשחקים</button></a></div>
      </div>
 
        <div class="Practice"><div class="head">לאימון הבא
           <a href="#" target="_self"><span class="arrowGame"><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>
        </div>
        <div class="topinfo">
            <span class="RegDark">טרם נקבע אימון</span>
            <div class="sadSmile"><i class="far fa-frown"></i></div>
            </div>
            <a href="#" target="_self"><div class="leftb"><button class="b">לכל האימונים שלך</button></div></a>
          </div>
      
    </div>


      <div class="MyteamHeadLine"><div id=YellowRectangle>הקבוצה שלי</div>
      </div>
      <p class="Yellowsmall"></p>
      <div class="myteam">
      <div class="Technical">
      <p class="Bold">פרטים טכניים</p>
      <p class="Reg">מנהל הקבוצה: <?php echo $rowHead["firstname"].' '.$rowHead["lastname"]?></p>
      <p class="Reg">מספר שחקנים: <?php echo $counter?> </p>
      <p class="Reg">מיקום בטורניר כרגע: 3/25 </p>
      </div>

      <div class="Games">
          <p class="Bold">משחקים</p>
          <p class="YellowBig">1/3</p>
          <p class="Bold">מאזן ניצחונות</p>
          <p class="Reg" id="gamesleft"> </p>
          </div>

          <div class=pictures>
          <?php
          $counter=0;
                                        $queryTeamPlayers="SELECT * FROM tb_users_214 WHERE teamid='"
                                        .$_SESSION["teamid"]
                                        ."'";
                                      $resultTeamPlayers = mysqli_query($connection, $queryTeamPlayers);
                                      while($counter<3 && $row = mysqli_fetch_assoc($resultTeamPlayers)) {
                                        echo '<div class="photoPlayer"><div class="picture"><img src="'.$row["image_link"].'"  id="photoPlayer" alt="PhotoPlayer"></div><div class="playerData">'. $row["firstname"]." ".$row["lastname"].'<div class="role">'.$row["position"]. '</div></div></div>';
                                        $counter++;  
                                     }
                                        ?>

        </div>
      </div>
        </div>
      </div>

      <section class="turnament">פרופיל אישי
          <section class="top_line"></section>
          </section>

<div class="PersonalInfo">
  <div class="PersonalDataItems">
    <div class="PersonalData"><img src="images/Rectangle_241_Icon_1.png" id="gameslogo" alt="icon">
      <div class="inline">
      <div class="YellowBig"> <?php  echo $_SESSION["numberofgames"]?></div>
      <div class="GrayHead">משחקים </div>
      </div>
      </div>


<div class="PersonalData"><img src="images/Soccer_Ball_Icon_1.png" id="scorelogo" alt="icon">
<div class="inline">
<div class="YellowBig"> <?php  echo $_SESSION["goals"]?></div>
<div class="GrayHead">גולים </div>
</div>
</div>

<div class="PersonalData"><img src="images/Whistle_Icon_1.png" id="violations" alt="icon">
<div class="inline">
<div class="YellowBig"> <?php  echo $_SESSION["violations"]?></div>
<div class="GrayHead">הפרות משחק </div>
</div>
</div>
</div>
<br>
<a href="#" target="_self"><button class="b">לצפייה בפרופיל המלא</button></a>
</div>
<footer>
            <div class="footer_nav">
                <nav> 
                    <ul>   
                        <li><a href="#" target="_self">צרו קשר</a></li>
                        <li><a href="#" target="_self">תנאים והגבלות</a></li>
                        <li><a href="#" target="_self">מדיניות פרטיות</a></li>
                    </ul>
                    <div class="clear"></div>
                </nav>
            </div>            
            <div class="rights"><a href="#" target="_self">כל הזכויות שמורות לשכונה@</a></div>
            <img class="image" src="images/Background.svg" alt="grop pic">
        </footer>
  </body>
</html>