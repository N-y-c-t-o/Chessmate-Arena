<?php
ob_start();
include("db.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
    <!-- css stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <header>
        <a href="http://localhost/Chess_Ai_Project/homePage.php" class="logo"><img width=100px src="chess_img/main6.png" alt=""><h1>Checkmate Arena</h1></a>
    </header>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h1>Create Account</h1>
                <div class="infield">
                  
                </div>  <input type="text" placeholder="👤 Username"name="username" />
                    <label></label>
                <div class="infield">
                    <input type="email" placeholder="📩  Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" maxlength='20' minlength="8"placeholder="🔒 Password"name="password" />
                    <i class="bi bi-eye-slash eye-icon" onclick="openeye(this)"></i>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="🔒 Confirm Password"name="cmpassword" />
                    <i class="bi bi-eye-slash eye-icon" onclick="openeye(this)"></i>
                    <label></label> 
                </div>
                <input type="submit" name="Confirm"value="Sign Up">
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h1>SIGN IN</h1>
                <div class="infield">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="👤  Username" name="username"/>
                    <label></label>
                </div>
                <div class="infield">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="🔒  Password"name="password"/>
                    <i class="bi bi-eye-slash eye-icon" onclick="openeye(this)"></i>
                    <label></label>          
                </div>
                <a href="noaccess.php" class="forgot">Forgot your password?</a>                
                <input type="submit" name="Confirm" value="Sign In">
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Friend!</h1>
                    <p>Ready to start something new? Register now to become part of a thriving community where endless possibilities await.</p>
                    <button onclick="CleanSignUp()">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back!</h1>
                    <p>Log in to rediscover the excitement and opportunities awaiting you. We're glad to have you back on board!</p>
                    <button onclick="CleanSignIn()">Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn" onclick="audio.play()"></button>
        </div>
    </div>

    
    <!-- js code -->
    <script>
        
        const container=document.getElementById('container');
        const overlayCon=document.getElementById('overlayCon');
        const overlayBtn=document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click',()=>{
            container.classList.toggle('right-pannel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame(()=>{
                overlayBtn.classList.add('btnScaled');
            })
        })
        const audio=new Audio();
        audio.src="Voice/voice.mp3";
        

        function openeye(element) {
            var passwordField =element.parentElement.querySelector('input');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                element.classList.remove('bi-eye-slash');
                element.classList.add('bi-eye');
            } else {
                passwordField.type = "password";
                element.classList.add('bi-eye-slash');
                element.classList.remove('bi-eye');
            }
        }

    </script>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Confirm']) && $_POST['Confirm'] == "Sign In") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username) || empty($password)) {
        echo '<script>alert("Please fill all the blank!!")</script>';
    } else {
        $sql = "SELECT name,password FROM user WHERE name='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if($username==$row["name"] && $password==password_verify($password, $row['password'])){
                    
                    $_SESSION["username"]=$username;
                    $_SESSION["login_success"] = true;
                    // Check if login was successful
                    if (isset($_SESSION['login_success']) && $_SESSION['login_success'] == true){
                        header("Location: homePage.php");
                    }
                    exit();
                }else{
                    echo '<script>alert("Incorrect username/password!!!")</script>';
                }
            }
        } else {
            echo '<script>alert("Incorrect username/password!!!")</script>';
        }
    }
    mysqli_close($conn);
}else if (isset($_POST['Confirm']) && $_POST['Confirm'] == "Sign Up"){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $cmpassword=filter_input(INPUT_POST,"cmpassword",FILTER_SANITIZE_SPECIAL_CHARS);
        if($password!=$cmpassword){
            echo '<script>alert("Password does not match!")</script>';
        }else{
            if(empty($username)||empty($email)||empty($password)||empty($cmpassword)){
            echo '<script>alert("Please fill all the blank!!")</script>';
            }else{
                $avatorId=rand(1,25);
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO user  (name,email,password,avatorId)
                    VALUES ('$username','$email','$hash','$avatorId')";
                    
                try{
                    mysqli_query($conn,$sql);
                    $_SESSION["username"]=$username;
                    $_SESSION["login_success"] = true;
                    header("Location: homePage.php");
                    exit();
                }catch(mysqli_sql_exception){
                    echo '<script>alert("User Name has taken!!")</script>';
                }
                mysqli_close($conn);
            }
        }
}
}
ob_end_flush();
?>
