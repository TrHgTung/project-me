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
        // save to database
        $user_id = random_num(20);
        $query = "insert into users ('user_id','user_name','password') values ('$user_id','$user_name','$password')";
    
    
        mysqli_query($con,$query);

        header('Location: login.php');
        die;
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
    <title>Đăng ký</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&family=Roboto+Slab:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Play:wght@700&family=Poppins&family=Roboto+Slab:wght@600&display=swap');
    </style>
</head>
<body>
    
    <div class="main">
        <div class="container">
            <div class="mini-container">
                <h1>SIGN UP</h1>
                <h3 align="center">Create new account</h3>
            </div>
            <br>
            <form method="POST">
                <div class="input">
                    <input id="text" name="text" type="text" placeholder="Enter a username you like"> <br> <br><br>
                    <input id="password" name="password" type="password" placeholder="Enter a password you can remember easily"> <br>
                    <br><br>
                    
                    <div class="login-btn">
                        <input id="button" type="submit" value="REGISTER"> <br>
                    </div>
                </div>
                <div class="signup">
                    
                    <p>You've had an account already? So, <a href="login.php">log-in</a> now!!</p>
                </div>
            </form>
       </div>
        
        
    </div> 
  
    
</body>
</html>