<?php 
    include 'connexion.php';

    # getting input values
    $code = $_REQUEST["code"];
    $libelle = $_REQUEST["libelle"];
    $adresse = $_REQUEST["adresse"];

    # Inserting data
    $connexion->query("insert into Departement(codeDept, libelle,adresse) 
    values('$code', '$libelle' , '$adresse')");

    header("location: vueDep.php");



    
?>