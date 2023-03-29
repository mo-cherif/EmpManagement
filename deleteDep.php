<?php 
    include 'connexion.php';
    
    $code = $_REQUEST["codeD"];

    # Deleting data
    $connexion->query("delete from departement where codeDept= '$code' ");

?>