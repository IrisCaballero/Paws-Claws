<?php
session_start();
include("functions/connection.php");
include("functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['clientEmail'];
    $password = $_POST['clientPass'];

    $query = "select * from users where email= '$email' limit 1;";
    $result = mysqli_query($con, $query);
    if($result){
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: clientDashboard.php");
                die;
            }
            else{
                echo "<script>alert(\"Invalid E-mail or Password\")</script>";
            }
        }
    }
    else{
        echo "<script>alert(\"Invalid E-mail or Password\")</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In | CLIENT</title>
        <link rel="icon" href="images/paw.png">
        <link rel="stylesheet" href="styles/panels.css?v=<?php echo time(); ?>">
        <script src="functions/functions.js"></script>
    </head>
    <body onkeypress="KeyPress(e)">
        <div class="loginPanel">
            <div class="loginPanLeft">
                <h1>PAWS & CLAWS</h1>
                <h4>Your Pet's Safe Haven</h4>
                <img src="images/logo.png" alt="">
            </div>
            <div class="divider"></div>
            <div class="loginPanRight">
                <div class="loginTitle">
                    <img src="images/client.png" alt="">
                    <h1>Client<br>Account</h1>
                </div>
                <form method="post">
                    <input type="text" name="clientEmail" placeholder="E-mail" required class="clientEmailInput">
                    <br>
                    <input type="password" name="clientPass" placeholder="Password" required class="clientPassInput"><br>   
                    <div class="loginOptions">
                        <label for="rememberMe"><input type="checkbox" id="rememberMe">Remember me</label>
                        <p><a href="recoverAccount.html">Forgot your password?</a></p>
                    </div>
                    <div>
                        <div class="loginbtns"><button type="submit">Cancel</button> <button type="submit" class="loginbtn">Log In</button></div>
                    </div>                 
                </form>

                <p><i>or sign in using</i></p>
                <div class="signinAccount">
                    <div>
                        <a href="https://www.facebook.com"><img src="images/facebook.png" alt=""></a>
                    </div>
                    <div>
                        <a href="https://accounts.google.com"><img src="images/google.png" alt=""></a>
                    </div>
                </div>
                <div class="signupMessage">
                    <p>Not and admin yet? <a href="signUp.php"><strong>SIGN UP</strong></a></p>
                </div>
            </div>
        </div>
    </body>
</html>