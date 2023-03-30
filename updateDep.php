<form action="addDep.php" method="post">
        <input autofocus type="text" name="code">
        <input type="text" name="libelle">
        <input type="text" name="adresse">
        <input type="submit" value= "Update">
        <input type="reset" value="reinitialiser">
</form>

<?php 
    include 'connexion.php';
    

    $code = $_REQUEST["codeD"];

    # Deleting data
    $connexion->query("update from departement where codeDept= '$code' ");

?>

