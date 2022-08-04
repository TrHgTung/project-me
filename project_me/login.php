<?php
//check login session
session_start();

include("connection.php");
include("functions.php");

//$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password)){
        // read from database
        //$user_id = random_num(20);
        $query = "select * from users where user_name = '$user_name' limit 1";
    
    
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                //return $user_data;
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    
                    header('Location: user.php');
                    die;
                }
            }
        }
        echo "Please enter correct information!";
        
    }
    else{
        echo "Please enter information";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <title>Đăng nhập vào index</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&family=Roboto+Slab:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Play:wght@700&family=Poppins&family=Roboto+Slab:wght@600&display=swap');
    </style>
</head>
<body>
    
    <div class="main">
        <div class="container">
            <div class="mini-container">
                <h1>LOGIN</h1>
                <h3 align="center">Just once login</h3>
            </div>
            <form method="POST">
                <div class="input">
                    <input id="text" name="text" type="text" placeholder="Your username"> <br> <br>
                    <input id="password" name="password" type="password" placeholder="Your password"> <br>
                    <!-- <a href="restore-info.php">Bạn quên mật khẩu?</a> <br><br><br><br> -->
                    
                    <div class="login-btn">
                        <input id="button" type="submit" value="LET ME IN"> <br>
                    </div>
                </div>
                <div class="signup">
                    
                    <p>Don't have an account <a href="signup.php">Create one</a> now!!</p>
                </div>
            </form>
        </div>
        
        
    </div>
  
    
</body>
</html>