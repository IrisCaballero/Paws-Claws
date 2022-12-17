<!DOCTYPE html>
<html>
    <head>
        <title>Paws and Claws | HOME</title>
        <link rel="icon" href="images/paw.png" type="image/x-icon">
        <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
        <script src="functions/animations.js"></script>
        <script src="functions/functions.js"></script>
    </head>

    <body onkeypress="KeyPress(e);">
        <div class="titleUnderline"></div>
        <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a><h1>PAWS AND CLAWS</h1></div>
        <div id="active"></div>
        <nav class="topNav">
            <ul>
                <li><a href="javascript:home();">HOME</a></li>
                <li><a href="javascript:about();">About</a></li>
                <li><a href="javascript:contact();">Contacts</a></li>
                <li ><a href="ClientLogin.php" class="loginbtn">Log In</a></li>
                <li ><a href="signUp.php" class="signupbtn">Sign Up</a></li>
            </ul>
        </nav>
        <div id="home">
            <div class="float-container">
                <div class="float-child">
                    <img src="images/healthcare.png" alt="" id="homeImage">
                </div>
                <div class="float-child">
                    <div class="homecontent">
                        <h1>Your Pet is Part of Our Family!</h1>
                        <p>Let us treat your pet like our own family with best service and special package. Connect with us to make an appointment.</p>
                        <br>
                        <h2><a href="contactVet.php">Connect with Vet</a></h2>
                        <img src="images/young.png" alt="" id="mainpageFC">
                    </div>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="float-container">
                <div class="float-child">
                    <img src="images/aboutdoc.png" alt="">
                </div>
                <div class="aboutcontent">
                    <h1>Welcome to <span>Paws & Claws</span></h1>
                    <p>Your pet's health and well-being are our top priority. As a pet parent, you deserve to have access to the most accurate, reliable, up-to-date pet health information, tools, tips, and insights you need to keep your pets healthy. With us, you’ll find answers you can trust from qualified veterinarians.
                    </p>
                    <div class="ftlist">
                        <div class="ftItem">
                            <img src="images/quirky-blue-and-pink-heart-1.png" alt="">
                            <h2>First Aid <br><span><p>Can't go to the nearest vet clinic yet?
                                Our vets can advise what to do and what not to do.<p></span></h2>
                        </div>
                        <div class="ftItem">
                            <img src="images/quirky-thumb-up-hand-1.png" alt="">
                            <h2>Pet Advice <br><span><p>Find out if it's okay to spay, what vaccines are needed, how to have healthy pregnancy, anything!<p></span></h2>
                        </div>
                        <div class="ftItem">
                            <img src="images/quirky-light-bulb-idea-1.png" alt="">
                            <h2>Getting Ideas<br><span><p>Not sure why your pet is acting strange? Vets can tell you possible scenario.<p></span></h2>
                        </div>
                        <div class="ftItem">
                            <img src="images/quirky-two-people-symbol.png" alt="">
                            <h2>Second Opinion <br><span><p>An easy access to confirming opinions.<p></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <div class="float-container">
                <div class="float-child">
                    <img src="images/isn't-it-just-lovely,-huh_ 1.png" alt="">
                </div>
                <div class="contactcontent">
                    <h1>OPENING HOURS</h1>
                    <h4>We have vets available till 10 pm.
                        Last call 9:30 pm.
                        <br><br><br>
                        Mon - Sun : 8:00 am - 11:00 pm
                        </h4><br>
                    <h1>CONTACT INFO</h1>
                    <h4>Get the best veterinary care for your pet.</h4>
                    <div class="contactinfo">
                        <img src="images/icons8-marker-o-50 (1) 1.png" alt="">
                        <h4>Malolos, Bulacan</h4>
                    </div>
                    <div class="contactinfo">
                        <img src="images/icons8-mail-50 1.png" alt="">
                        <h4>paws&claws@gmail.com</h4>
                    </div>
                    <div class="socials">
                        <img src="images/icons8-facebook-96 1.png" alt="">
                        <img src="images/icons8-inshot-96 1.png" alt="">
                        <img src="images/icons8-twitter-circled-96 1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>