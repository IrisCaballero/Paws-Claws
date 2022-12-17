<?php
session_start();
include("functions/connection.php");
include("functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['signupEmail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!is_numeric($fname) and !is_numeric($lname) and !is_numeric($email) and ($password == $cpassword)){
        $query = "insert into users (fname,lname,email,password,status) values ('{$fname}', '$lname','$email', '$password', 'active');";
        echo "<script>alert(\"Succcess\")</script>";
        mysqli_query($con, $query);
        header("Location: clientLogin.php");
        die;
    }
    else if(!($password == $cpassword)){
        echo "<script>alert(\"Password does not match\")</script>";
    }
    else if(is_numeric($fname) or is_numeric($lname) or is_numeric($email)){
        echo "<script>alert(\"Invalid Input Detected! Try again\")</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="styles/panels.css?v=<?php echo time(); ?>">
        <link rel="icon" href="images/paw.png">
    </head>
    <body>
        <div class="signupPanel">
            <div class="signupPanelLeft">
                <div class="signupTitle">
                    <img src="images/logo.png" alt="">
                    <span>PAWS & CLAWS</span><br>
                </div>
                <h4>New Clients</h4>
                <h2>Welcome to Our Clinic</h2>
                <h4>We offer premier veterenary health care services to dogs, cats, birds,rabbits, and other unusual pets. You can trust us to give your pets the love they deserve!</h4>
                <img src="images/dog.png" alt="" id="dogModel">
            </div>
            <div class="divider"></div>
            <div class="signupPanelRight">
                <h2>Create an Account</h2>
                <form name="SignUp" method="POST" class="signupForm">
                    <div class="items">
                        <label for="fname">First name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="items">
                        <label for="lname">Last name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                    <div class="items">
                        <label for="signupEmail">E-mail Address</label>
                        <input type="text" name="signupEmail" id="signupEmail" required>
                    </div>
                    <div class="items"></div>
                    <div class="items">
                        <label for="password">Password <br><sub>At least 8 characters</sub></label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="items">
                        <label for="cpassword">Confirm Password <br><sub>Must be an exact match</sub></label>
                        <input type="password" name="cpassword" required>
                    </div>
                    <i>or sign-up using</i>
                    <div class="signupAccountPlatform">
                        <a href="https://www.facebook.com"><img src="images/facebook.png" alt=""></a>
                        <a href="https://accounts.google.com"><img src="images/google.png" alt=""></a>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>