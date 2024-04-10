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
                <form class="form-inline justify-content-center" style="max-width: 450px;" method="GET">
                    <select name="location" class="form-select mb-3 form-select-lg" aria-label="Default select example" onchange="this.form.submit();">
                        <option selected>Choose a location</option>
                        <option value="0">All locations</option>
                        <?php
                        foreach ($locations as $location) {
                            echo '<option value="' . $location["gym_location_id"] . '">' . $location["zone"] . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </section>
            <section class="container my-5">
                <?php
                foreach ($classes as $class) {
                    $sql = "SELECT * FROM gym_locations WHERE gym_location_id= :gym_location_id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["gym_location_id" => $class["gym_location_id"]]);
                    $gym = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo '
                        <div class="card mb-3 p-3">
                            <div class="d-flex flex-row justify-content-between g-0">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img src="../../public/assets/img/'.$class["class_picture_path"].'" class="img-fluid rounded-start mx-5" alt="..." style="width: 130px">
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$class["class_name"].'</h5>
                                        <p class="card-text">'.$class["description"].'</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$class["trainer_name"].'</h5>
                                        <p class="card-text"><small class="text-muted">'.$class["date"].'</small></p>
                                        <p class="card-text"><small class="text-muted">'.$class["time"]." - ".$class["duration"].'</small></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$gym["zone"].'</h5>
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