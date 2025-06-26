<?php

$mysql_username = "root";
$mysql_password = "";
$mysql_db = "php_pdo"; 


// DSN: Data Source Name : URL de connexion
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
    
    $pdo = new PDO($dsn, $mysql_username, $mysql_password); // Etablir la connexion avec MySQL
    
    $select= "SELECT * FROM utilisateurs";
    } catch(PDOException $ex){
    echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
}

echo "\nFin";
