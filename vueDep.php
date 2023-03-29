<?php 
   include 'connexion.php';
   $res = $connexion->query("select * from Departement");
?>

    <style>
        body   {
            padding: 2rem 2rem;
        }
        table, th, td {
            border: 1px solid;
        }
    </style>
   <table>
            <thead>
                <th>Code</th>
                <th>Libelle</th>
                <th>Adresse</th>
                <th>Action</th>
                <th>Action</th>
            </thead>

            <tbody>
                <tr>
                    <?php
                        while($ligne = $res->fetch(PDO:: FETCH_ASSOC)) {?>
                            <td> <?php echo $ligne["codeDept"]; ?> </td>
                            <td> <?php echo $ligne["libelle"]; ?> </td>
                            <td> <?php echo $ligne["adresse"]; ?> </td>
                            <td><a href="">Modifer</a></td>
                            <td><a href="">Supprimer</a></td>
                        <?php } ?>
                    
                </tr>

                
            </tbody>
    </table> 
  



