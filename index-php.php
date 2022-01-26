<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Ajax Dischi</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-wrapper">
                <div class="logo">
                    <img src="img/Spotify_icon.png" alt="Spotify logo">
                </div>
                <div>
                    filtro
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="app-wrapper">
                <?php foreach($database as $single_disc) { ?>
                    <div class="single-disc">
                        <div>
                            <img 
                            src="<?php echo $single_disc['poster']; ?>" 
                            alt="<?php echo $single_disc['title']; ?>"
                            >
                        </div>
                        <h2>
                            <?php echo $single_disc['title']; ?>
                        </h2>
                        <div class="disc-author">
                            <?php echo $single_disc['author']; ?>
                            <br>
                            <?php echo $single_disc['year']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>


    
</body>
</html>