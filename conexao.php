<?php
$localhost="127.0.0.1";
$username= "root";
$password="";
$database = "crud";

$conn = mysqli_connect($localhost,$username,$password,$database);

if ($conn) {
    # code...
    //echo "Banco de dados conectados  ";
} else {
    die ().mysqli_connect_error ($conn);
}

