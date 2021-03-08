<?php

     include 'returnTableau.php';


     echo '<table>
     <tr>
         <th>Nom</th>
     </tr>';
 
     for($i = 0; $i < count($personne); $i++){
         echo '<tr>';
             echo '<td> <a href="traitement2.php?choix=' . $i .'"> '. $personne[$i]['nom'] .'</a> </td>';
         echo '</tr>';
     }

     echo '</table>';


     
?>
