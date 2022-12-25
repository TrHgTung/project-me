<?php
    session_start();

    include("connection.php");
    include("functions.php");

   // $user_data = check_login($con);
?>
<!-- landing page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
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
    <!--  -->
    
</body>
</html>