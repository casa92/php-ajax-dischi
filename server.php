<?php

    require __DIR__ . '/database.php';

    $disc_genre = $_GET['genre'];

    if(empty($disc_genre)) {
        //se disc genre è vuoto o indefinito stampo tutto l'array
        $json = json_encode($database);
    } else {
        //se il genere è presente mostrerò i dischi del genere corrispondente
        //filtro i dischi
        $filtered_discs = [];
        foreach($database as $disc) {
            if($disc['genre'] === $disc_genre) {
                $filtered_discs[] = $disc;
            }
        }

        $json = json_encode($filtered_discs);
    }

    
    // $json = json_encode($database);

    header('Content-Type: application/json');

    echo $json;
?>