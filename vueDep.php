<?php 
   include 'connexion.php';
   $res = $connexion->query("select * from Departement");
?>

    <style>
        h1 {
            color: green;
            font-size: 50px;
        }
        body   {
            padding: 2rem 2rem;
        }
        table, th, td {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ddd;
        }
    </style>
    <?php
    
        if ( ($ligne = $res->fetch(PDO:: FETCH_ASSOC)) == '' ) {
            echo "<h1>Empty with no employee !</h1>";
        } else {
    ?>
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
                            <td> <?php echo $ligne["codeDept"]  ?> </td>
                            <td> <?php echo $ligne["libelle"]; ?> </td>
                            <td> <?php echo $ligne["adresse"]; ?> </td>
                            <td><a href="">Modifer</a></td>
                            <td><a href="deleteDep.php?codeD=<?php echo $ligne["codeDept"];
                            ?>">Supprimer</a></td>

                        <?php } 
                    
                    
                    }?>
                        
                </tr>

                
            </tbody>
    </table> 
  



