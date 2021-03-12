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

        if($i>=0){
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
           

          echo '</table>';
        }

// ******************************************************************************************************************
          if ($i >= 0 and $i < count($personne) -1) {
            echo '<table>
        
            <tr>
                <th>Nom</th>
            </tr>';

            echo '<tr>';
            echo '<td> '. $personne[$i++]['nom'] .'</td>';
             echo '</tr>';

             echo '<tr>';
             echo '<td> <a href="traitement2.html.php?choix=' . $i  .'"> <button type="submit">'. "next" .'</button> </a> </td>';
             echo '</tr>';

             echo '</table>';
 
        }
        
        if($i >= 0 and $i < count($personne) -1){
            // echo  "we are in the first item";
            echo '<table>
                        <tr>
                            <th>Nom</th>
                        </tr>';

                    echo '<tr>';
                    echo '<td> '. $personne[$i--]['nom'] .'</td>';
                    echo '</tr>';

                    echo '<tr>';
                    echo '<td> <a href="traitement2.html.php?choix=' . $i -1 .'"> <button type="submit">'. "previous" .'</button> </a> </td>';
                    echo '</tr>';
             echo '</table>';
        }
        else{
            echo '<table>';
            echo '<tr>';
            echo '<td> '. 'la fin de liste' .' </td>';
            echo '</tr>';
            echo '</table>';
        } 
   }
   echo '<table>';
        echo '<tr>';
        echo '<td> <a href="traitement1.php"> <button type="submit">'. "retour" .'</button> </a> </td>';
        echo '</tr>';
   echo '</table>';
?>

</body>
</html>
