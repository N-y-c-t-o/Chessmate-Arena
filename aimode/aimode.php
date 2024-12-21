<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Chess Board</title>
      <link rel="stylesheet" href="../css/aimode.css">
  </head>
  <body>
    <audio id="myAudio" src="../Voice/voice.mp3"></audio>
    <header>
        <a href="http://localhost/Chess_Ai_Project/homePage.php" class="logo"><img width=100px src="../chess_img/main6.png" alt=""><h1>Checkmate Arena</h1></a>
    </header>
     <div class="container">
      <div class="buttonContainer">
        <div>
          <div id="levelLabel">
            <span>Level:</span>
         </div>
       
        <select id="level">
          <option value="1">Level 1</option>
          <option value="2">Level 2</option>
          <option value="3">Level 3</option>
          <option value="4">Level 4</option>
          <option value="5">Level 5</option>
          <option value="6">Level 6</option>
          <option value="7">Level 7</option>
          <option value="8">Level 8</option>
          <option value="9">Level 9</option>
          <option value="10">Level 10</option>
        </select>
      </div>
      <div>
        <button id="newGame">New Game</button>
      </div>
      <div>
        <button id="switchSides">Switch Sides</button>
      </div>
      <div>
        <button id="logout">Back</button>
      </div>
     </div>
   

    <div class="chessBoard">        
      <!-- Add the pawn div element -->
      <div class="square white">
        <div class="piece rook" color="black"  >
            <img src="../chess_img/Black-Rook.png" alt="Rook" >
          </div>
      </div>
      <div class="square black">
        <div class="piece knight" color="black" >
            <img src="../chess_img/Black-Knight.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece bishop" color="black" >
            <img src="../chess_img/Black-Bishop.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece queen" color="black" >
            <img src="../chess_img/Black-Queen.png" alt="Queen" >
          </div>
      </div>
      <div class="square white">
        <div class="piece king" color="black" >
            <img src="../chess_img/Black-King.png" alt="King" >
          </div>
      </div>
      <div class="square black">
        <div class="piece bishop" color="black" >
            <img src="../chess_img/Black-Bishop.png" alt="Bishop" >
          </div>
      </div>
      <div class="square white">
        <div class="piece knight" color="black">
            <img src="../chess_img/Black-Knight.png" alt="Knight" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">8</div>

        <div class="piece rook" color="black" >
            <img src="../chess_img/Black-Rook.png" alt="Rook" >
          </div>
      </div>
     <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black" >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black" >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="piece pawn" color="black"  >
            <img src="../chess_img/Black-Pawn.png" alt="pawn">
          </div>

      </div>
      <div class="square black">
        <div class="piece pawn" color="black"  >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
          </div>

      </div>
      <div class="square white">
        <div class="coordinate rank blackText">7</div>

        <div class="piece pawn" color="black"  >
            <img src="../chess_img/Black-Pawn.png" alt="pawn" >
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
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white"  >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white">
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="piece pawn" color="white" >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square white">
        <div class="piece pawn" color="white" >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
      <div class="square black">
        <div class="coordinate rank whiteText">2</div>

        <div class="piece pawn" color="white" >
            <img src="../chess_img/white-pawn.png" alt="pawn" >
          </div>
      </div>
    <!-- ------------------------------------------------------------------------- -->

      <div class="square black">
        <div class="coordinate whiteText">a</div>

        <div class="piece rook" color="white">
            <img src="../chess_img/White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div class="square white"> 
        <div class="coordinate blackText">b</div>

        <div class="piece knight" color="white">
            <img src="../chess_img/White-Knight.png" alt="Knight" >
           </div>
    </div>
      <div class="square black">
        <div class="coordinate whiteText">c</div>

        <div class="piece bishop" color="white">
            <img src="../chess_img/White-Bishop.png" alt="Bishop">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">d</div>

        <div class="piece queen" color="white" >
            <img src="../chess_img/White-Queen.png" alt="Queen" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">e</div>

        <div class="piece king" color="white">
            <img src="../chess_img/White-King.png" alt="King">
        </div>
      </div>
      <div class="square white">
        <div class="coordinate blackText">f</div>
        <div class="piece bishop" color="white" >
            <img src="../chess_img/White-Bishop.png" alt="Bishop" >
           </div>
      </div>
      <div class="square black">
        <div class="coordinate whiteText">g</div>

        <div class="piece knight" color="white" >
            <img src="../chess_img/White-Knight.png" alt="Knight">
           </div>
      </div>
      <div class="square white">
        <div class="coordinate rank blackText">1</div>
        <div class="coordinate blackText">h</div>     
        <div class="piece rook" color="white" >
            <img src="../chess_img/White-Rook.png" alt="Rook" >
           </div>
      </div>
      <div id="alert">
        Draw 
       </div>
    </div>
  </div>
  <div class="computer">  
      <img src="../avatorImg/0.png" alt=""class="cm_avator">
  <?php
if(!file_exists("prolog.pl")) die("Files doesn't exist.");  

// Point Difference > 1200 :Dominating
$dominating1 = shell_exec('swipl -s prolog.pl -g "dominating1" -t halt.');
$dominating2 = shell_exec('swipl -s prolog.pl -g "dominating2" -t halt.');
$dominating3 = shell_exec('swipl -s prolog.pl -g "dominating3" -t halt.');

// Point Difference 600-1200 :Strong Lead
$strongLead1 = shell_exec('swipl -s prolog.pl -g "strongLead1" -t halt.');
$strongLead2 = shell_exec('swipl -s prolog.pl -g "strongLead2" -t halt.');
$strongLead3 = shell_exec('swipl -s prolog.pl -g "strongLead3" -t halt.');

// Point Difference 300-600:Advantage
$advantage1 = shell_exec('swipl -s prolog.pl -g "advantage1" -t halt.');
$advantage2 = shell_exec('swipl -s prolog.pl -g "advantage2" -t halt.');
$advantage3 = shell_exec('swipl -s prolog.pl -g "advantage3" -t halt.');

// Point Difference 100-300:Slight Lead
$slightLead1 = shell_exec('swipl -s prolog.pl -g "slightLead1" -t halt.');
$slightLead2 = shell_exec('swipl -s prolog.pl -g "slightLead2" -t halt.');
$slightLead3 = shell_exec('swipl -s prolog.pl -g "slightLead3" -t halt.');

// Point Difference  -100 to +100:Even
$even1 = shell_exec('swipl -s prolog.pl -g "even1" -t halt.');
$even2 = shell_exec('swipl -s prolog.pl -g "even2" -t halt.');
$even3 = shell_exec('swipl -s prolog.pl -g "even3" -t halt.');

// Point Difference -300 to -100:Falling Behind
$fallingBehind1 = shell_exec('swipl -s prolog.pl -g "fallingBehind1" -t halt.');
$fallingBehind2 = shell_exec('swipl -s prolog.pl -g "fallingBehind2" -t halt.');
$fallingBehind3 = shell_exec('swipl -s prolog.pl -g "fallingBehind3" -t halt.');

// Point Difference -600 to -300:Losing Ground
$losingGround1 = shell_exec('swipl -s prolog.pl -g "losingGround1" -t halt.');
$losingGround2 = shell_exec('swipl -s prolog.pl -g "losingGround2" -t halt.');
$losingGround3 = shell_exec('swipl -s prolog.pl -g "losingGround3" -t halt.');

// Point Difference   < -600 :Struggling
$struggling1 = shell_exec('swipl -s prolog.pl -g "struggling1" -t halt.');
$struggling2 = shell_exec('swipl -s prolog.pl -g "struggling2" -t halt.');
$struggling3 = shell_exec('swipl -s prolog.pl -g "struggling3" -t halt.');

// Point Difference < -1200:Trouble
$trouble1 = shell_exec('swipl -s prolog.pl -g "trouble1" -t halt.');
$trouble2 = shell_exec('swipl -s prolog.pl -g "trouble2" -t halt.');
$trouble3 = shell_exec('swipl -s prolog.pl -g "trouble3" -t halt.');

// Execute Prolog command to get each greeting
$greetingCommands = [
  'swipl -s prolog.pl -g "greeting1" -t halt.',
  'swipl -s prolog.pl -g "greeting2" -t halt.',
  'swipl -s prolog.pl -g "greeting3" -t halt.',
  'swipl -s prolog.pl -g "greeting4" -t halt.', 
  'swipl -s prolog.pl -g "greeting5" -t halt.',
  'swipl -s prolog.pl -g "greeting6" -t halt.',
  'swipl -s prolog.pl -g "greeting7" -t halt.',
  'swipl -s prolog.pl -g "greeting8" -t halt.',
  'swipl -s prolog.pl -g "greeting9" -t halt.',
  'swipl -s prolog.pl -g "greeting10" -t halt.'
];

$randomIndex = rand(0, count($greetingCommands) - 1);
$greeting = shell_exec($greetingCommands[$randomIndex]);

$randomNumber=rand(1,3);
switch ($randomNumber) {
  case 1:
      $dominating = $dominating1;
      $strongLead = $strongLead1;
      $advantage = $advantage1;
      $slightLead = $slightLead1;
      $even = $even1;
      $fallingBehind = $fallingBehind1;
      $losingGround = $losingGround1;
      $struggling = $struggling1;
      $trouble = $trouble1;
      break;
  case 2:
      $dominating = $dominating2;
      $strongLead = $strongLead2;
      $advantage = $advantage2;
      $slightLead = $slightLead2;
      $even = $even2;
      $fallingBehind = $fallingBehind2;
      $losingGround = $losingGround2;
      $struggling = $struggling2;
      $trouble = $trouble2;
      break;
  case 3:
      $dominating = $dominating3;
      $strongLead = $strongLead3;
      $advantage = $advantage3;
      $slightLead = $slightLead3;
      $even = $even3;
      $fallingBehind = $fallingBehind3;
      $losingGround = $losingGround3;
      $struggling = $struggling3;
      $trouble = $trouble3;
      break;
}

?>
      <div class="ms_box">
        <div class="square"></div>
        <p style="display: none;" id="greeting"><?php echo $greeting; ?></p>
        <p style="display: none;" id="dominating"><?php echo $dominating; ?></p>
        <p style="display: none;" id="strongLead"><?php echo $strongLead; ?></p>
        <p style="display: none;" id="advantage"><?php echo $advantage; ?></p>
        <p style="display: none;" id="slightLead"><?php echo $slightLead; ?></p>
        <p style="display: none;" id="even"><?php echo $even; ?></p>
        <p style="display: none;" id="fallingBehind"><?php echo $fallingBehind; ?></p>
        <p style="display: none;" id="losingGround"><?php echo $losingGround; ?></p>
        <p style="display: none;" id="struggling"><?php echo $struggling; ?></p>
        <p style="display: none;" id="trouble"><?php echo $trouble; ?></p>
      </div>
  </div>
 

    <script src="aimode.js"></script>
  </body>
</html>
