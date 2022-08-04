<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
   // $dbname = 'pokemondb';

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass)){
        die("Failed to connect!");
    }
