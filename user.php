<?php
    session_start();
    //check login session

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con); // re-enable this line to activate check session for user !!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poké-Dex</title>
    <script src="js/pokemon_api.JS" defer></script>
    <link rel="stylesheet" type="text/css" href="css/dexStyle.css" >
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    
    <style>
        @keyframes mountains_behind{
            0%   {left:-200px; top:400px;}
            25% {left: -125px; top: 250px;}
            50% {left: -75px; top: 150px;}
            75% {left: -25px; top: 75px;}
            100%  { left:0; top:0px;}
            /*25%  { left:0; top:0px;}*/
           /* 50%  { left: 200px; top:100px;} */
           /* 75%  { left:0px; top:200px;} */
            /*100% { left:0px; top:0px;}*/
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
            0%   {opacity: 0; }
            25%   {opacity: 0; }
            50%   {opacity: 0; }
            75%   {opacity: 0; }
            80%   {opacity: 0.5; }
            100%  { opacity: 1; }
        }
        @keyframes atext{
            0% {opacity: 0;}
            25%   {opacity: 0; }
            50%   {opacity: 0; }
            75%   {opacity: 0; }
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
            100%    {top:0px; left: 0px}

        }
    </style>
</head>
<body>
    <!-- FOR LOGGED IN USERS // LOGGED IN SESSION -->
    <header>
        <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon" class="logo">pokémon</a>
        <ul>
            <li><a href="user.php" class="active">Home</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="#">
                <?php //echo $user_data['user_name']; ?>
            </a></li>
            
        </ul>
    </header>
    <section>
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/moon.png" alt="" id="moon">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <!-- h2 id="text">Welcome</!-->
        <center>
             
            <form action="" id="form" name="form">
                <input type="text" name="searchBar" id="searchBox" size= 30 placeholder="Pokémon species.." align="right">
               
            </form>
            
        </center>
        <!-- <a href="pages/explorer.php" id="btn">to the Pokémon world</a> -->
        <img src="images/mountains_front.png" alt="" id="mountains_front">
    
        <img src="images/little-pkm.png" alt="" id="little-pkm">
        <img src="images/little-starters-pkm.png" alt="" id="little-starters-pkm">

    </section>
   

    <footer class="footer">
        <h1>You're looking for ..</h1>
        <div class="search__container" id="search__containerID">
            <!-- <input type="text" name="searchBar" id="searchBox" placeholder="Pokemon species.." align="right"> -->
        </div>
        <div class="pokemon__container" id="pokemon__containerID"></div>
        
    </footer>

        
    
</body>
</html>