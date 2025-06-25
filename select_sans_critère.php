<?php

$mysql_username = "root";
$mysql_password = "";
$mysql_db = "php_pdo";

// DSN: Data Source Name : URL de connexion
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
    
    $pdo = new PDO($dsn, $mysql_username, $mysql_password); // Etablir la connexion avec MySQL
    
    $select= "SELECT * FROM utilisateurs"; // chaine de caractère qui contient la requête SQL
    
    $query = $pdo->query($select); // Exécuter la requête: on passe par query

    // récupérer le premier tuple
    $resultat = $query->fetch();
    echo "\n $resultat[0] $resultat[1] $resultat[2] $resultat[3]";
    
    $resultat = $query->fetch();
    echo "\n" . $resultat['id'] . " " .  $resultat['username'];
    

   // Récuperer tous les tuples de la table
   // $resultat = $query->fetchAll();
   // foreach ($resultat as $key => $value) {
   //     echo "\n $value[0] $value[1] $value[2] $value[3]";
   // }  
   
} catch(PDOException $ex){
    echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
}

echo "\nFin";


