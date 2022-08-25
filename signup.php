<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else{
            echo "Please enter some value";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="./css/validate.css?v=<?php echo time(); ?>"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0591fa8989.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/login-style/favicon.png">
    <title>ĐĂNG KÝ</title>
</head>
   <body>

    <header>
        <a href="#" class="logo">Đăng nhập</a>
        <ul>
            <li><a href="login.php" class="active">Quay về Đăng nhập</a></li>
            
        </ul>
    </header>
    <section>
        <img src="images/login-style/stars.png" alt="" id="stars">
        <img src="images/login-style/moon.png" alt="" id="moon">
        <img src="images/login-style/mountains_behind.png" alt="" id="mountains_behind">
        
        <!-- a href="login.php" id="btn">to the Pokémon world</!-->
        <img src="images/login-style/mountains_front.png" alt="" id="mountains_front">
    
        <img src="images/login-style/little-pkm.png" alt="" id="little-pkm">
        <img src="images/login-style/little-starters-pkm.png" alt="" id="little-starters-pkm">
        
<!--- downer here --->
        <center>
        
            <form action="" method="POST">
                <p>Tên đăng nhập:</p><input type="text" name="user_name" id="user_name" size=35 placeholder= " VD: ash_ketchum123"><br><br>
                <p>Mật khẩu:</p> <input type="password" name="password" id="password" size=35 placeholder=" VD: AnhTungDzVjpPr02002"><br><br><br>
                <p>Ngày sinh:</p>  <input type="date" value="Ngày sinh" id="datetime-picker" ><br><br>

                <p id="purpose">Bằng cách nhấn Đăng ký, bạn đã chấp thuận với tất cả các Điều khoản của trang web, các dữ liệu cá nhân này sẽ luôn được lưu trữ với duy nhất <a href="#" id="url-none">một mục đích nghiên cứu phi lợi nhuận</a>.</p>

                <input type="submit" value="Đăng ký" id="btn">
                
            </form>
            <div>
                <p>Bạn đã có tài khoản? Vậy thì <a href="#">chỉ cần đăng nhập</a>.</p>
            </div>
    
            
        </center>
    


    <!-- upper here -->
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

