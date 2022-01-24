<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
    echo "Falha na conexâo: ".mysqli_connect_error();
}