<?php
    session_start();
    //check login session

    include("connection.php");
    include("functions.php");

   // $user_data = check_login($con); // re-enable this line to activate check session for user !!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script type="text/javascript" src="jquery.js">  
        // js 2.x.x is now old version // been added on 30 July 2022
    </script>
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
            0%   {left:0px; top:-200px;opacity: 0;}
            25%   {left:0px; top:-200px;opacity: 0;}
            50%   {left:0px; top:-200px; opacity: 1;}
            /*25% {left: 05px; top: 250px;}*/
            /*50% {left: 0px; top: 150px;}*/
            /*75% {left: 0px; top: 75px;}*/
            100%  { left:0; top:0px;}
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
            <li> <?php echo $_SESSION['username']; ?> </li>
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
           
            <script type="text/javascript">

            </script>
             
            <form action="" name="form">
                <input type="text" placeholder="Search for .." id="name">
                <input type="submit" value='Search'  id="btn" onClick="get();">
            </form>
        </center>
        <!-- <a href="pages/explorer.php" id="btn">to the Pokémon world</a> -->
        <img src="images/mountains_front.png" alt="" id="mountains_front">
    
        <img src="images/little-pkm.png" alt="" id="little-pkm">
        <img src="images/little-starters-pkm.png" alt="" id="little-starters-pkm">
        <img src="images/little-pokeball.png" alt="" id="little-pokeball">

    </section>
    <!-- Downner added at 11:27 30th July 2022 -->
    
    <!-- <script type="text/javascript">

    </script>
    <form action="" name="form">
        <input type="text" placeholder="Search for .." name="name">
        <input type="button" value="Search" onClick="get();">
    </form>
-->

    <!--- Upper added on 30 July 2022 -->

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
                    <!-- 
                     and is centered on fictional creatures called "Pokémon". In Pokémon, humans, known as Pokémon Trainers, 
                     catch and train Pokémon to battle other Pokémon for sport. All media works within the franchise are set in the Pokémon universe. 
                     --->
                    
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