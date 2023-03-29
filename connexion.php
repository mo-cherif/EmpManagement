<?php 
    $localhost = "localhost";
    $database = "gestion_employe";
    $username = "root";
    $mdp = "";

    $connexion = new PDO("mysql:host=$localhost;
                        dbname=$database",
                        $username, $mdp);
    
    if (!$connexion) { 
        echo 'Server error. Please try again sometime. CON'; 
    }

?>