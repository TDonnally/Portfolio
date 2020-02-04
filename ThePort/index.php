<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>The Port</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/portfolio.css">
    </head>
    <body>
        <div id = icons>
            <?=@$thankYou?>
            <a onclick="openContent('portfolio')"><img class = iconImg id = "portfolioIcon" src="images/files-and-folders.svg"/></a>
            <a onclick="openContent('contact')"><img class = iconImg id = "contactIcon" src="images/support.svg"/></a>
            <a onclick="openContent('about')"><img class = iconImg id = "aboutIcon" src="images/chat.svg"/></a>
        </div>
        <div class = "outerShell" style = "background-color: rgba(101,234,255,.3);">
            <div class = "content" id = "portfolio" style = "background-color: #085AAE;">
                <a class = "closeMenuButton" onclick="closeContent('portfolio')">X</a>
                <h1>My Work:</h1>
                <div id = "photoHolder">
                    <a href="https://tdonnally.github.io/RestaurantMenu/menu/"><img class = "thumbnail" src = "images/menuIcon.png"></a>
                    <a href="https://tdonnally.github.io/Wormhole/Space/space.html"><img class = "thumbnail" src = "images/spaceIcon.png"/></a>
                    <a href="https://tdonnally.github.io/Radio/Radio/radio.html"><img class = "thumbnail" src = "images/radioIcon.png"></a>
                    <a href="https://tdonnally.github.io/RPS/RPS/RPS.html"><img class = "thumbnail" src = "images/rpsIcon.png"/></a>
                </div>
            </div>
        </div>
        <div class = "outerShell" style = "background-color: rgba(255,158,214,.3);">
            <div class = "content" id = "contact" style = "background-color: #242424;">
                <a class = "closeMenuButton" onclick="closeContent('contact')">X</a>
                <form action="index.php" method="post" enctype="text/plain">
                    Email: 
                    <br><input class = "info" name="senderEmail" type = text/>
                    <br>
                    Phone Number:
                    <br><input class = "info" name="senderPhonenumber" type = text/>
                    <br>
                    Message: 
                    <br></bn><textarea rows="20" cols="50" name="message"></textarea>
                    <br>
                    <button type = submit value="Send" name="submit">Submit</button>
                    
                </form>
            </div>
        </div>
        <div class = "outerShell" style = "background-color: rgba(101,234,255,.3);">
            <div class = "content" id = "about" style = "overflow: auto; background-color: #085AAE;">
                <a class = "closeMenuButton" onclick="closeContent('about')">X</a>
                <h1>About Me</h1>
                <h3>Hey there! My name is Tristan Donnally and 
                I am a web developer working out of Atlanta, Georgia.
                </h3>
                <h3>Skills:</h3>
                <div style = "width: 100%; background-color: #DFFBFF;">
                    <div style = "width: 60%; margin: auto;">
                        <img style = "width: 100%;"src = "images/languageLogos.png"/>
                        <img style = "width: 50%;" src = "images/php.png"/><img style = "width: 50%;" src = "images/MySQL.png"/>
                    </div>
                </div>
                <h3>Currently Learning:</h3>
                <div style = "width: 100%; background-color: #DFFBFF;">
                    <div style = "width: 60%; margin: auto;">
                        <img style = "width: 50%;"src = "images/nodejs.png"/>
                    </div>
                </div>
            </div>
        </div>
        <canvas class = "canvas" id="canvas" width="1080" height="1080">
            Your browser does not support the HTML5 canvas tag.</canvas>

    </body>
    <script src="scripts/dots.js"></script>
    <script src="scripts/contentAnimation.js"></script>
</html>
<?php
$thankYou = "";
     
if(@$_POST["submit"]) {
    $recipient="dristantonnally@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["senderPhonenumber"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>