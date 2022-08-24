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
    <link rel="stylesheet" href="./css/login-style.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="./css/validate.css?v=<?php echo time(); ?>"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">  
    <link rel="icon" href="./img/Logo/Icon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0591fa8989.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>ĐĂNG KÝ</title>
</head>
    <div>
        <form action="" method="POST">
            <input type="text" name="user_name" id="">
            <input type="password" name="password" id="">

            <input type="submit" value="Signin">

            Have an account already? Just <a href="login.php">log in</a>
            
        </form>
    </div>

</body>
</html> 

