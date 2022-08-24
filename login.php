<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        //
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];

                    header("Location: user.php");
                    die;
                }
            }
        }
        echo "Incorrect username/password! Enter again.";
            
    }else{
        echo "Incorrect username/password! Enter again.";
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
    <title>ĐĂNG NHẬP</title>
</head>
    <div>
        <form action="" method="POST">
            <input type="text" name="user_name" id="">
            <input type="password" name="password" id="">

            <input type="submit" value="Login">

            Don't have account? Just <a href="signup.php">sign up</a>

        </form>
    </div>
    <div>
        Don't wanna login? Click <a href="pages/explorer.php">at here</a> to skip.
    </div>
</body>
</html> 

