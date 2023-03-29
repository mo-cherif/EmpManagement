<?php 
    include 'connexion.php';

    # getting input values
    $code = $_REQUEST["code"];
    $libelle = $_REQUEST["libelle"];
    $adresse = $_REQUEST["adresse"];

    # Inserting data
    $connexion->query("insert into Departement(Matricule, Nom, Prenom, Moyenne) 
    values('$code', '$libelle' , '$adresse')");



    
?>