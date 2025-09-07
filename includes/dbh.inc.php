<?php

$dsn ="mysql:host=localhost;dbname=myfirstdatabase";
$dbuser ="root";
$dbpassword ="";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
