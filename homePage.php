<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/homePage.css">
    <title>Portfolio Website</title>
</head>
<body>
    <header>
        <a href="http://localhost/Chess_Ai_Project/homePage.php" class="logo"><img width=100px src="chess_img/main6.png" alt=""><h1>Checkmate Arena</h1></a>

        <nav>
            <a href="#home" > Home</a>
            <a href="#startGame" >Start Game</a>
            <a href="#learn" >Learn</a>
            <a href="#chess-news" >News</a>
            <select  id="options"onchange="handleSelect()">
                <option value="">Settings</option>
                <option value="Register">Register</option>
                <option value="LogOut">Log Out</option>  
            </select>
            <div class="account">
                <?php
                
                if(empty($_SESSION["username"])){
                    $username="Guest";
                    $_SESSION["avatorId"]=$avatorId=0;  
                }else{
                    $username=$_SESSION["username"];
                }
                $sql = "SELECT name,avatorId FROM user  WHERE name='$username'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['avatorId']=$avatorId=$row["avatorId"];
                        echo '<span>'. $_SESSION["username"].'</span>';
                        echo '<img  width=50px; src="avatorImg/'.$avatorId.'.jpg" alt=""class="avatorImg">';
                    }
                }else{
                    echo '<span>'. $username.'</span>';
                        echo '<img  width=50px; src="avatorImg/'.$avatorId.'.png" alt=""class="avatorImg">';
                }
                ?>
            </div>
        </nav>
    </header> 
    <section id="home">
                <div class="chessBoard">        
      <!-- Add the pawn div element -->
      <div class="square white">
        <div class="piece rook" color="black"  >
            <img src="chess_img/Black-Rook.png" alt="Rook" >
          </div>
      </div>
      <div class="square black">
        <div class="piece knight" color="black" >
            <img src="chess_img/Black-Knight.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece bishop" color="black" >
            <img src="chess_img/Black-Bishop.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece queen" color="black" >
            <img src="chess_img/Black-Queen.png" alt="Queen" >
          </div>
      </div>
      <div class="square white">
        <div class="piece king" color="black" >
            <img src="chess_img/Black-King.png" alt="King" >
          </div>
      </div>
      <div class="square black">
        <div class="piece bishop" color="black" >
            <img src="chess_img/Black-Bishop.png" alt="Bishop" >
          </div>
      </div>
      <div class="square white">
        <div class="piece knight" color="black">
            <img src="chess_img/Black-Knight.png" alt="Knight" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">8</div>

        <div class="piece rook" color="black" >
            <img src="chess_img/Black-Rook.png" alt="Rook" >
          </div>
      </div>
     <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black" >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black"  >
            <img src="chess_img/Black-Pawn.png" alt="pawn">
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="coordinate rank blackText">7</div>

        <div class="piece pawn" color="black"  >
            <img src="chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
    <!-- ------------------------------------------------------------------------- -->
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black">
        <div class="coordinate rank whiteText">6</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white">
        <div class="coordinate rank blackText">5</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black">
        <div class="coordinate rank whiteText">4</div>

      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white"></div>
      <div class="square black"></div>
      <div class="square white">
        <div class="coordinate rank blackText">3</div>
      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white"  >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white">
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">2</div>

        <div class="piece pawn" color="white" >
            <img src="chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="coordinate whiteText">a</div>

        <div class="piece rook" color="white">
            <img src="chess_img/White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div class="square white"> 
        <div class="coordinate blackText">b</div>

        <div class="piece knight" color="white">
            <img src="chess_img/White-Knight.png" alt="Knight" >
           </div>
    </div>
      <div class="square black">
        <div class="coordinate whiteText">c</div>

        <div class="piece bishop" color="white">
            <img src="chess_img/White-Bishop.png" alt="Bishop">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">d</div>

        <div class="piece queen" color="white" >
            <img src="chess_img/White-Queen.png" alt="Queen" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">e</div>

        <div class="piece king" color="white">
            <img src="chess_img/White-King.png" alt="King">
        </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">f</div>
        <div class="piece bishop" color="white" >
            <img src="chess_img/White-Bishop.png" alt="Bishop" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">g</div>

        <div class="piece knight" color="white" >
            <img src="chess_img/White-Knight.png" alt="Knight">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate rank blackText">1</div>
        <div class="coordinate blackText">h</div>     
        <div class="piece rook" color="white" >
            <img src="chess_img/White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div id="alert">
     
    </div>

    </div>
                <div class="welcome-message">
                  <h4>Checkmate Arena</h4>
                    <h1>Each chess move is a step towards mastery, where strategy shapes your legacy.</h1>
                    <p>Free to use. Easy to try. Just ask and <span>Checkmate Arena</span> can help with  learning, brainstorming, and more.!</p>
                </div>
    </section>
    <section id="startGame">     
            
            <div class="container">
               
                <nav>
                    <h2>Welcome to ChessMate Arena</h2>
                    <button onclick="startGame()">Start New Game</button>
                    <button onclick="PlaywithAi()">Play with AI</button>
                </nav>
                
            </div>
    </section>
    <section id="learn">
      <h1>Learn with Checkmate Arena</h1>
      <div class="video">
        
        <div class="row">
        <iframe width="420" height="280" src="https://www.youtube.com/embed/AshEhLcPHqU?si=Yzy7lz-EAfuSMJA9" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="420" height="280" src="https://www.youtube.com/embed/GQvR_fLkNKo?si=OCLLg2ntMVT-LfdQ" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="420" height="280" src="https://www.youtube.com/embed/6WD2NOJN4TQ?si=stld9gWJGZuxGv8Z" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        
        <div class="row">
        <iframe width="420" height="280" src="https://www.youtube.com/embed/nODmo9PPXz4?si=o7uVSXSclArmRUm9" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="420" height="280" src="https://www.youtube.com/embed/1FhcXDyyDts?si=r6eq0Uyx2wdxcZn9" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="420" height="280" src="https://www.youtube.com/embed/cqa8Z2GSR80?si=n6B4bT_m-yfwzYR0" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="row">
        <iframe width="420" height="280" src="https://www.youtube.com/embed/0EqJeujhrpM?si=NpuQfLgHaZfBlmvJ" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="420" height="280" src="https://www.youtube.com/embed/KnQm1wgAN4Q?si=ntUEb7J9dAM_XFLA" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <iframe width="420" height="280" src="https://www.youtube.com/embed/VwJFi1_ghts?si=2qeljbxYa0tRJDtM" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="btnContainer">
      <button class="button-classic" onclick="window.location.href='https://www.youtube.com/watch?v=VwJFi1_ghts&list=PLQKBpQZcRycrvUUxLdVmlfMChJS0S5Zw0&index=9';">More >>></button>
      </div>
      
    </section>
    <section id="chess-news">
      <h1>Chess News</h1>
      <article>
          <h2>Chess Olympiad in Budapest:</h2>
          <p>The 45th Chess Olympiad in Budapest is set to have a record number of teams, with 197 registered for the open section. This prestigious event is drawing worldwide attention due to its scale and the diversity of participating teams ​(
ChessBase
).</p>
          <time datetime="2024-09-5">Published on September 5, 2024</time>
      </article>
      
      <article>
          <h2>Ganguly vs. Shankland:</h2>
          <p>Surya Shekhar Ganguly defeated Sam Shankland in an 8-game online match with a unique scoring system that incentivizes fighting chess. Ganguly won 26-11, with 5 wins compared to Shankland's 1 win​(
ChessBase
).</p>
          <time datetime="2024-09-5">Published on September 5, 2024</time>
      </article>
    
      <article>
          <h2>Niemann vs. Carlsen Showdown:</h2>
          <p>Hans Niemann is set to face Magnus Carlsen in the Chess.com Speedchess Championship semi-finals in Paris. The match is highly anticipated due to past controversies involving cheating allegations and legal disputes between the two ​(
ChessBase
).</p>
          <time datetime="2024-09-4">Published on September 4, 2024</time>
      </article>

      <article>
          <h2>Carlsen's Victory in Casablanca Chess:</h2>
          <p>Magnus Carlsen recently won the Casablanca Chess Tournament, showcasing his ability to turn even equal positions into victories, further solidifying his legacy as one of the greatest chess players ​(
Chess.com
).</p>
          <time datetime="2024-05-19">Published on May 19, 2024</time>
      </article>
    </section>
    

    <footer>
    <p>&copy; 2024 Chessmate Arena. Follow us on social media.</p>
      <div class="social-icons">
          <a href="noaccess.php"><i class="fa-brands fa-linkedin"></i></a>
          <a href="noaccess.php"><i class="fa-brands fa-github"></i></a>
          <a href="noaccess.php"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="noaccess.php"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </footer>
    <script src="homePage.js"></script>
        
    
</body>
</html>
