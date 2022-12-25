<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
            crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Home Page</title>
    <style>
        @keyframes mountains_behind{
            0%   {left:-200px; top:400px;}
            
            50% {left: -75px; top: 150px;}
            
            100%  { left:0; top:0px;}
            
        }
        @keyframes moon{
            0%   {opacity: 0;}
            
            50%  {  opacity:1; }

            100% { opacity: 0.5}
        }

        @keyframes mountains_front{
            0%   {opacity: 0; top: 20px}
            100%  { opacity: 1; top: 0px}
        }
        @keyframes little-starters-pkm{
       
            75%   {opacity: 0; }
            80%   {opacity: 0.5; }
            100%  { opacity: 1; }
        }
        @keyframes atext{
            80%   {opacity: 0.5; }
            100% {opacity: 1;}
        }
        @keyframes acontent{
            0% {opacity: 0;}
            100% {opacity: 1;}
        }
        @keyframes aball {
            0%  {opacity: 0;  top:-100px; left:-40px}
            30% {opacity: 0.5; top: 0px; left: 0px}
            60% {opacity: 1;}
            100% {top:0px; left: 0px}

        }
    </style>
  </head>

  <body>
    <header>
        <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon" class="logo">pokémon</a>
        <ul>
            <li><a href="user.php" class="active">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about-me.php">About Me!</a></li>
        </ul>
    </header>
    <section>
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/moon.png" alt="" id="moon">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <img src="images/mountains_front.png" alt="" id="mountains_front">
        <img src="images/little-pkm.png" alt="" id="little-pkm">
        <img src="images/little-starters-pkm.png" alt="" id="little-starters-pkm">
        
        <div>
            <div >
                <p class="fs-1 text text-white">Welcome</p>
            </div>
            <div>
                <a href="login.php" class="btn btn-primary button" role="button" >to the Pokémon world</a>
            </div>  
        </div>
    </section>
    <footer class="footer">
        <div class="grid footer__container">
        <div class="grid footer__container">
        <ul>
            <li>
                <h3>Pokémon</h3>
                <ul class="foot-item-box">
                    <li>Pokémon (an abbreviation for Pocket Monsters in Japan) is a Japanese media franchise managed by The Pokémon Company, Game Freak, and Creatures. The franchise was created by Satoshi Tajiri in 1996 </li>
                    <li>The English slogan for the franchise is "Gotta Catch ‘Em All!". There are currently 913 Pokémon species (2019).</li>
                    <li>Email: <a href="mailto:tungng14@gmail.com"><b>tungng14@gmail.com</b></a></li>               
                </ul>
            </li>
            <li>
                <h3>Contact Me: </h3>
                <ul>
                    <li>Facebook: <a href="https://www.facebook.com/nguyentuanhung12345" target="_blank">Nguyen Tuan Hung</a></li>
                    <li>instagram: <a href="https://www.instagram.com/hoangtung_2710" target="_blank">Hoang Tung</a></li>
                </ul>
            </li>
            <li>
                <h3>Detail:</h3>
                <ul>
                    <li>SĐT của bố mày: <b>090******0</b></li>
                   
                    
                </ul>
            </li>
            <li>
            <h3>Donate UwU:</h3>
            <ul>
                <li><a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">Buy Me A Coffee!</a></li>
               
            </ul>
        </div>
    </footer>
  </body>
</html>