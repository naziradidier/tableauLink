<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pageSearch.php" method="GET">
        Votre recherche : <input type="text" name="tape">
        <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "search">recherche</button>
    </form>
<?php 
     $personne = array (
            'Toavina' => array('nom' => 'Toavina' , 'Prenom' => 'Ralambo', 'age' => 25, 'lieu' => 'Antsirabe'),
            'Nazirah' => array('nom' => 'Nazirah' , 'Prenom' => 'Rambo', 'age' => 20, 'lieu' => 'Antsiranana'),
            'Tamby' =>  array('nom' => 'Tamby' , 'Prenom' => 'Raly', 'age' => 21, 'lieu' => 'Antsinanana'),
            'Miora' =>  array('nom' => 'Miora' , 'Prenom' => 'Rabe', 'age' => 26, 'lieu' => 'Antsiraka'),
            'Ny Aary' => array('nom' => 'Ny Aary' , 'Prenom' => 'Rasoa', 'age' => 70, 'lieu' => 'Ankazomanga'),
            'Jind' => array('nom' => 'Jind' , 'Prenom' => 'Andrien', 'age' => 27, 'lieu' => 'Diego'),
            'Rojo' => array('nom' => 'Rojo' , 'Prenom' => 'ketty', 'age' => 24, 'lieu' => 'Ambatoroka'),
            'Ore' => array('nom' => 'Ore' , 'Prenom' => 'Vavaigny', 'age' => 25, 'lieu' => 'Ankadifotsy'),
            'Brisa' => array('nom' => 'Brisa' , 'Prenom' => 'Raharimalala', 'age' => 30, 'lieu' => 'BEFELANTANANA'),
            'Jirany' => array('nom' => 'Jirany' , 'Prenom' => 'Elina', 'age' => 19, 'lieu' => 'Morafeno'),
            'Tiffany' => array('nom' => 'Tiffany' , 'Prenom' => 'Prisca', 'age' => 18, 'lieu' => 'Ambodimbonara'),
            'Moanazena' => array('nom' => 'Moanazena' , 'Prenom' => '', 'age' => 69, 'lieu' => 'Ambanja'),
            'Eliza' => array('nom' => 'Eliza' , 'Prenom' => 'Moanazena', 'age' => 32, 'lieu' => 'Ambalavola'),
            'Antonia' => array('nom' => 'Antonia' , 'Prenom' => 'Beandalana', 'age' => 23, 'lieu' => 'ambalakaza'),
            'Sonia' => array('nom' => 'Sonia' , 'Prenom' => 'Charla', 'age' => 22, 'lieu' => 'Fianarantsoa'));
        // var_dump($personne);

        // $lettre_rechercher = "n";
        if( isset($_GET['search'] ) && !empty($_GET['tape'])){
            $lettre_rechercher = $_GET['tape'];

            foreach($personne as $clef => $valeur){
                //     foreach($valeur as $cley => $valeurs){
                // // echo $cley. ': ' .$valeurs. ' <br>';
                if(strtoupper($lettre_rechercher) ==   $clef[0]){
                            echo $clef . '<br>';
                    }
            }
        }
        // elseif ($lettre_rechercher) == $clef) {
        //     echo 'le mot est introvable <br>';
        // }
        else{
                echo 'enter a letter please';
                        // echo 'le mot est introvable <br>';
                        // foreach($personne as $clef => $valeur){
                        //     echo $clef. '<br>';
        }
        // {
//             x = "Gaetan"

// if x.startswith("Gae") : 
//    pass
          
        // }
        // if( isset($_GET['search'] ) && empty($_GET['tape'])){
        //     $lettre_rechercher = $_GET['tape'];
        //     if ($lettre_rechercher == ""){
        //         echo 'le mot est introvable <br>';
        //         // foreach($personne as $clef => $valeur){
        //         //     echo $clef. '<br>';
        
        //     // }
        // }
    // }


?>
   
</body>
</html>




  
