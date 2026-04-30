<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "task4";
try{
    $connection = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Connection failed" . $err->getMessage();
}
?>