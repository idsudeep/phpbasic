<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "phpbasic";

$connect = mysqli_connect($hostname,$user ,$password ,$dbname);


if(!$connect){
    echo "Error in Db connection Please check the database Server.";
    die();
}

?>