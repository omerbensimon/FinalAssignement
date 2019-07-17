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
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>שכונה</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="includes/style.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/userParams.js" ></script>
        <script src="js/main.js" async ></script>
        <script src="js/game.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
    <header>
      <script type="text/javascript">var playerID = "<?php echo $_SESSION["playerid"] ?>";</script>
      <script type="text/javascript" src="js/userParams.js"></script>  
      <script type="text/javascript">var teamID = "<?php echo $_SESSION["teamid"] ?>";</script>
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
              <?php if($_SESSION['role']==='Player')
                  $location="indexPlayer.php";
                  else{
                      $location="indexCoach.php";
                  }?>
          <span class=headNav>
          <a id="logo" href=<?php echo $location?>>    
             </a>
          <h2 id="">הטורניר השנתי</h2>
          </span>
    
      <nav>
         
              <ul>
                  <li><a href= <?php echo $location?>>בית</a></li>
                  <li><a href="#" target="_self">המאמן</a></li>
                  <li><a href="#" target="_self">הטורנירים</a></li>
                  <li><a href="#" target="_self">צפייה ישירה</a></li>
                  <li><a href="#" target="_self">ספונסרים</a></li>
                  <li><a href="#" target="_self">חנות</a></li>
              </ul>
      </nav>
  </header>
        <main class="wrapper game">
            <div class="top_line line"></div>
            <h4 class="turnament">הטורניר</h4>
            <div class="flex-container">
                <div>
                    <div class="eli">
                        <div class="ellipse1 color ellipse"></div>
                        <h3 class="first1">הגמר</h3>
                        <div class="ellipse2 color ellipse"></div>
                    </div>
                <section class="orang_line"></section>
                </div>
                <div>
                    <div class="eli">
                        <h3 class="sec">1/2</h3>
                        <div class="ellipse3 orange ellipse"></div>
                        <div class="ellipse4 color ellipse"></div>
                        <div class="ellipse5 color ellipse"></div>
                        <div class="ellipse6 color ellipse"></div>
                        <div class="ellipse7 color ellipse"></div>
                        <div class="ellipse8 color ellipse"></div>
                    </div>
                    <section class="sec_line line"></section>
                </div>
                <div>
                    <div class="eli elli">
                        <h3 class="three">1/4</h3>
                        <div class="ellipse9 ellipse"></div>
                        <div class="ellipse10 ellipse"></div>
                        <div class="ellipse11 ellipse"></div>
                        <div class="ellipse12 ellipse"></div>
                        <div class="ellipse13 ellipse"></div>
                        <div class="ellipse14 ellipse"></div>
                        <div class="ellipse15 ellipse"></div>
                        <div class="ellipse16 ellipse"></div>
                        <div class="ellipse17 ellipse"></div>
                        <div class="clear"></div>
                    </div>
                    <section class="three_line"></section>
                </div>
                <div>
                    <div class="eli elli">
                        <h3 class="forth">שלב הבתים</h3>
                        <div class="ellipse18 ellipse"></div>
                        <div class="ellipse19 ellipse"></div>
                        <div class="ellipse20 ellipse"></div>
                        <div class="ellipse21 ellipse"></div>
                        <div class="ellipse22 ellipse"></div>
                        <div class="ellipse23 ellipse"></div>
                        <div class="ellipse24 ellipse"></div>
                        <div class="ellipse25 ellipse"></div>
                        <div class="ellipse26 ellipse"></div>
                        <div class="ellipse27 ellipse"></div>
                        <div class="ellipse28 ellipse"></div>
                        <div class="ellipse29 ellipse"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <article class="five_line"></article>
                <img class="icon1" src="images/Filter_List_Icon_1.svg" alt="icon1">
                <h4 class="next_games">המשחקים העתידיים שלי</h4>
                <div class="my_next_games">
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <div class="modal-content set_game">
                                <span class="close_">&times;</span>
                                <div class="header_">
                                    <h1>בניית הרכב המשחק</h1>
                                    <ul class="team_compon">
                                        <li class="vs">vs</li>
                                        <li class="name">הכרם</li>
                                    </ul>
                                </div>
                                <div class="wrapper">
                                        <div class="top_line line"></div>
                                        <h4 class="turnament">השחקנים</h4>
                                        <div class="icon1"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                        <ul class="players">
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                            <li><a href="#" class="cir" target="_self"></a></li>
                                        </ul>
                                        <div class="top_line line eleven_line"></div>
                                        <h4 class="turnament">מערך 4-3-3</h4>
                                        <h3>המערכת מציגה את השיבוץ על"פ המלצות המערכת</h3>
                                        <h3 class="under_line"><a href="#">לחץ כאן כדי לראות את הרכב המשחק הקודם</a></h3>
                                        <div class="clear"></div>
                                        <div class="flex-container_">
                                            <div class="players_list">
                                        <ul>
                                        <?php
                                        $counter=1;
                                        $queryTeamPlayers="SELECT firstname,lastname FROM tb_users_214 WHERE teamid='"
                                        .$_SESSION["teamid"]
                                        ."'";
                                      $resultTeamPlayers = mysqli_query($connection, $queryTeamPlayers);
                                      while($row = mysqli_fetch_assoc($resultTeamPlayers)) {
                                        echo '<li><div class="colored">'." ".$counter.'</div><a href="#">'." ". $row["firstname"]." ".$row["lastname"].'</a></li></ul>';
                                        $counter++;  
                                     }
                                     $connection->close();
                                        ?>
                                                <div class="word_size"></div>
                                            </div>
                                            <div class="fild1">
                                                <div class="positions">
                                                    <img class="fild" src="images/Soccer_Court_Icon_1.svg" alt="soccer court">
                                                    <div class="cir1 pos"><a href="#">1</a></div>
                                                    <div class="cir2 pos"><a href="#">2</a></div>
                                                    <div class="cir3 pos"><a href="#">3</a></div>
                                                    <div class="cir4 pos"><a href="#">4</a></div>
                                                    <div class="cir5 pos"><a href="#">5</a></div>
                                                    <div class="cir6 pos"><a href="#">6</a></div>
                                                    <div class="cir7 pos"><a href="#">7</a></div>
                                                    <div class="cir8 pos"><a href="#">8</a></div>
                                                    <div class="cir9 pos"><a href="#">9</a></div>
                                                    <div class="cir10 pos"><a href="#">10</a></div>
                                                    <div class="cir11 pos"><a href="#">11</a></div>
                                            </div>
                                        </div>
                                    <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="allGames"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <section class="pages">
                <h4 class="curr"><a href="#" target="_self">1</a></h4>
                <h4 class="next_page"><a href="#" target="_self">2</a></h4>
                <a href="#" target="_self"><img src="images/Keyboard_Arrow_Down_Icon_2.svg" alt="tittle_arrow" class="tittle_arrow"></a>
            </section>
        </main>
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