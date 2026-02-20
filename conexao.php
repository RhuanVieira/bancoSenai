<?php

$dbname = "banco";
$user = "root";
$pass = "";
$host = "localhost";


    $conn = new mysqli($host, $user,$pass,$dbname);
        if(!$conn){
            die("erro na conexão: " . mysqli_connect_error());
        }




?>