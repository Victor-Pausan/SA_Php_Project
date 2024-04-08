<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/css/classes-page.css">
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
                <h1 class="text-left mb-5">CHOOSE A CLASS</h1>
            </section>
            <section class="container my-5">
                <?php
                foreach ($classes as $class) {
                    echo '
                        <div class="card mb-3 p-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../../public/assets/img/'.$class["class_picture_path"].'" class="img-fluid rounded-start mx-5" alt="..." style="width: 130px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$class["class_name"].'</h5>
                                        <p class="card-text">'.$class["description"].'</p>
                                        <p class="card-text"><small class="text-body-secondary">'.$class["trainer_name"].'</small></p>
                                    </div>
                                </div>
                            </div>      
                        </div> 
                        ';
                }
                ?>
            </section>
        </main>
        <?php require_once "footer.php" ?>
    </div>
</body>

</html>