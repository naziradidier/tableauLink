<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    include 'returnTableau.php';

    if( isset($_GET['choix'] ) ){
        $i = $_GET['choix'];

        echo '<table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Lieu</th>
            </tr>';
  
      
          echo '<tr>';
              echo '<td> '. $personne[$i]['nom'] .' </td>';
              echo '<td>' . $personne[$i]['Prenom'] . '</td>';
              echo '<td> '. $personne[$i]['age'] .' </td>';
              echo '<td>' . $personne[$i]['lieu'] . '</td>';
          echo '</tr>';

// *******************************************************************************************************************
          if ($i < count($personne) -1) {
            echo '<table>
        
            <tr>
                <th>Nom</th>
            </tr>';

            echo '<tr>';
            echo '<td> '. $personne[$i ++]['nom'] .'</td>';
             echo '</tr>';

             echo '<tr>';
             echo '<td> <a href="traitement2.html.php?choix=' . $i .'"> <button type="submit">'. "next" .'</button> </a> </td>';
             echo '</tr>';

             echo '</table>';
 
        }
        elseif($i >= count($personne)){
            echo '<table>
                        <tr>
                            <th>Nom</th>
                        </tr>';

                    echo '<tr>';
                    echo '<td> '. $personne[$i --]['nom'] .'</td>';
                    echo '</tr>';

                    echo '<tr>';
                    echo '<td> <a href="traitement2.html.php?choix=' . $i .'"> <button type="submit">'. "previous" .'</button> </a> </td>';
                    echo '</tr>';
        }
        else{
            echo '<tr>';
            echo '<td> '. 'y en a plus' .'</td>';
            echo '</tr>';
        } 

      echo '</table>';
   }
   
?>
        <button type="submit">
        <a href="http://localhost/test/traitement1.php" ><p>retour</p></a>
        </button>

</body>
</html>
