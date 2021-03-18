<?php 
     $personne = array (
            'toavina' => array('nom' => 'toavina' , 'Prenom' => 'Ralambo', 'age' => 25, 'lieu' => 'Antsirabe'),
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

        $lettre_rechercher = "";

        foreach($personne as $clef => $valeur){
            //     foreach($valeur as $cley => $valeurs){
            // // echo $cley. ': ' .$valeurs. ' <br>';
            if($lettre_rechercher ==   $clef[0]){
                        echo $clef . '<br>';
                }
        }
        if ($lettre_rechercher == ""){
            echo 'introvable';
        }

?>


  
