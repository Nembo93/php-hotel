<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // var_dump($hotels);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Hotel</title>
</head>
<body>
    
    <header>
        <h1>I nostri Hotels</h1>
    </header>
    <!-- Stampa in un listato gli hotel dell'array con le info -->

    <main>
        <div class="disp_flex">
            <div class="cell_name">
                <h2>Hotels</h2>
            </div>
            <div class="cell_desc">
                <h3>Info sull'hotel</h3>
            </div>
            <div class="cell_parking">
                <h3>Parcheggio</h3>
            </div>
            <div class="cell_vote">
                <h3>Voto</h3>
            </div>
            <div class="cell_distance">
                <h3>Distanza dal centro</h3>
            </div>
        </div>

        <?php 
            foreach ($hotels as $hotel){?>
                <div class="disp_flex">
                    <div class="cell_name">
                        <h3>
                            <?php echo $hotel["name"] ?>
                        </h3>
                    </div>
                    <div class="cell_desc">
                        <h4>
                            <?php echo $hotel["description"] ?>
                        </h4>
                    </div>
                    <div class="cell_parking">
                        <h4>
                            <?php echo $hotel["parking"] ?>
                        </h4>
                    </div>
                    <div class="cell_vote">
                        <h4>
                            <?php echo $hotel["vote"] ?>
                        </h4>
                    </div>
                    <div class="cell_distance">
                        <h4>
                            <?php echo $hotel["distance_to_center"] ?>
                        </h4>
                    </div>
                </div>
            <?}
        ?>
    </main>
    

</body>
</html>