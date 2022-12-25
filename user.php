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
    <link rel="stylesheet" type="text/css" href="./css/dexStyle.css" >
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>
    <!-- FOR LOGGED IN USERS // LOGGED IN SESSION -->
    <header>
        <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon" class="logo">pokémon</a>
        <ul>
            <li><a href="user.php" class="active">Trang chủ</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
            <li><a href="#">
                <?php //echo $user_data['user_name']; ?>
            </a></li>
            
        </ul>
    </header>
    <section>
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/moon.png" alt="" id="moon">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <center>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="searchBar" id="searchBox" placeholder="Tìm Pokémon.." >
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            
        </center>
        <!-- <a href="pages/explorer.php" id="btn">to the Pokémon world</a> -->
        <img src="images/mountains_front.png" alt="" id="mountains_front">
    
        <img src="images/little-pkm.png" alt="" id="little-pkm">
        <img src="images/little-starters-pkm.png" alt="" id="little-starters-pkm">

    </section>
   

    <footer class="footer">
        <h1>Có phải bạn đang tìm ..</h1>
        <div class="search__container" id="search__containerID">
            <!-- <input type="text" name="searchBar" id="searchBox" placeholder="Pokemon species.." align="right"> -->
        </div>
        <div class="pokemon__container" id="pokemon__containerID"></div>
        
    </footer>

        
    
</body>
</html>