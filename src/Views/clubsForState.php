<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../public/css/clubs-card.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Clubs</title>
</head>

<body>
    <div id="page-container">
        <?php require_once "header.php" ?>
        <main class="main">
            <section class="container my-5">
                <h1 class="text-left mb-5"><?php echo strtoupper($state["state_name"])." CLUBS" ?></h1>
            </section>

            <section class="container my-5">
                <h2 class="text-left mb-5">Featured Clubs</h2>
                <div class="row">
                    <?php
                        foreach($locations as $location){
                            $googleMapsAddress = adjustAddress($location["address"]);
                            echo
                            '
                            <a class="link-offset-2 link-underline link-underline-opacity-0" href="https://www.google.com/maps/search/?api=1&query='.$googleMapsAddress.'" target="_blank">
                                <div class="card text-bg-light mb-4 p-3">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body p-4">
                                                <h5 class="card-title">'.$location["zone"].'</h5>
                                                <p class="card-text">'.$location["address"].'</p>
                                                <p class="card-text"><small class="text-muted">View on map</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="../../public/assets/img/'.$location["location_picture_path"].'" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            ';
                        }                    
                    ?>
                </div>
            </section>
        </main>
        <?php require_once "footer.php" ?>
    </div>
</body>

</html>