<?php
session_start();
include("functions/connection.php");
include("functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['adminEmail'];
    $password = $_POST['adminPass'];

    $query = "select * from admin where email= '$email' limit 1;";
    $result = mysqli_query($con, $query);
    if($result){
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
                $_SESSION['user_id'] = $user_data['admin_id'];
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
        <title>Log In | ADMIN</title>
        <link rel="stylesheet" href="styles/panels.css?v=<?php echo time(); ?>">
        <link rel="icon" href="images/paw.png">
    </head>
    <body>
        <div class="loginPanel">
            <div class="loginPanLeft">
                <h1>PAWS & CLAWS</h1>
                <h4>Your Pet's Safe Haven</h4>
                <img src="images/logo.png" alt="">
            </div>
            <div class="divider"></div>
            <div class="loginPanRight">
                <div class="adminloginTitle">
                    <img src="images/admin.png" alt="">
                    <h1>Administrator<br>Account</h1>
                </div>
                <form method="post">

                    <div class="signInEmail">
                        <input type="text" name="adminEmail" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="signInPassword">
                        <input type="password" name="adminPass" placeholder="Password" required><br>                    
                    </div>
                    <div class="rememberMe">
                    <div class="checkbox">
                        <label for="rememberMe"><input type="checkbox" id="rememberMe">Remember me</label>
                    </div>
                    <div class="forgot">
                        <p><a href="recoverAccount.html">Forgot your password?</a></p>
                    </div>
                    </div>
                    <div class="loginbtns"><button type="button">Cancel</button> <button type="submit" class="loginbtn">Log In</button></div>
                </form>

                <p><i>or sign in using</i></p><br>
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