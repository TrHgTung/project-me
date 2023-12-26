
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
  </head>

  <body oncontextmenu="return false;">
    <header>
        <div class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="logo navbar-brand" href="index.php" >pokémon</a>
            </div>   
        </div>
       <div>
            <ul>
                <li class="nav-item"><a class="active" href="user.php">PokéDex</a></li>
                <li class="nav-item"><?php 
                                        include "./check-user-session/check-auth.php";
                                    ?>
                </li>
            </ul>
       </div>
        
    </header>
    <section class="text-center">
        <img src="images/stars.png" alt="" id="stars">
        <img src="images/moon.png" alt="" id="moon">
        <img src="images/mountains_behind.png" alt="" id="mountains_behind">
        <img src="images/mountains_front.png" alt="" id="mountains_front">
        <!-- <img src="images/little-pkm.png" alt="" id="little-pkm"> -->
        <img src="images/combo-pokemon.png" alt="" id="little-starters-pkm">
        
        <div class="face-container">
            <div >
                <p class="fs-1 text text-white">Welcome</p>
            </div>
            <div>
            <?php
    include("connection.php");

    function check_login_btn($con){ // this func will check user's session, if logged in ? show login btn : no login btn
        if( isset($_SESSION['user_id']) ){
                $id = $_SESSION['user_id'];
                $query = "select * from users where user_id = '$id' limit 1";      
                $result = mysqli_query($con,$query);
    
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    return $user_data;
                }
            } 
            // header("Location: ../../login.php"); // rm this shit
            // die; // and rm this also
        }

        // session_start();

          $user_data = check_login_btn($con);

          if(!isset($_SESSION['user_id'])){
            echo '<form class="d-flex" action="login.php">
              <a href="login.php" class="btn btn-warning button rounded-pill" role="button">Đăng nhập cá nhân</a>
            </form>';
          }
          else{
            echo '<form class="d-flex" action="logout.php">
                <a href="./news/navigator.php" class="btn btn-warning button rounded-pill" role="button" >Trang điều hướng</a>
            </form>';
          }
          ?>
                
            </div>  
        </div>
    </section>
    <footer class="footer">
        <?php include './components/footer.php'; ?>
    </footer>
  </body>
</html>