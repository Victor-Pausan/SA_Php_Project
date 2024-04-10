<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/classes-manager.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/classes-form.js" defer></script>
    <title>Classes</title>
</head>

<body>
    <div id="page-container">
        <?php require_once "header.php" ?>
        <main class="main">
            <section class="classes-form">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <div class="title">
                                <h1>SCHEDULE A CLASS</h1>
                            </div>
                        </div>
                        <div class="col">
                            <form class="form" method="POST">
                                <div class="form-floating mb-3">
                                    <input name="class-name" id="class-name" type="text" class="form-control">
                                    <div id="class-name-error" class="error-message"></div>
                                    <label for="class-name">Class Name:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="location" class="form-select" aria-label="Default select example">
                                        <option selected>Choose a location</option>
                                        <?php
                                        foreach ($locations as $location) {
                                            echo '<option value="' . $location["gym_location_id"] . '">' . $location["zone"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <div id="location-error" class="error-message"></div>
                                    <label for="location">Location:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="date" id="date" type="date" class="form-control">
                                    <div id="date-error" class="error-message"></div>
                                    <label for="date">Date:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="time" id="time" type="time" class="form-control">
                                    <div id="time-error" class="error-message"></div>
                                    <label for="time">From:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="duration" id="duration" type="time" class="form-control">
                                    <div id="duration-error" class="error-message"></div>
                                    <label for="duration">Until:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="name" id="name" type="text" class="form-control">
                                    <div id="name-error" class="error-message"></div>
                                    <label for="name">Trainer:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                    <div id="description-error" class="error-message"></div>
                                    <label for="description" id="description-label">Description:</label>
                                </div>
                                <button class="submit" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="appointments">
                <div class="container">
                    <div class="row">
                        <section id="schedule" class="schedule">
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
                                            <img src="../../public/assets/img/' . $class["class_picture_path"] . '" class="img-fluid rounded-start mx-5" alt="..." style="width: 130px">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $class["class_name"] . '</h5>
                                                <p class="card-text">' . $class["description"] . '</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $class["trainer_name"] . '</h5>
                                                <p class="card-text">' . $class["time"] . " - " . $class["duration"] . '</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $gym["zone"] . '</h5>
                                                <form class="delete-form" method="POST">
                                                    <input type="hidden" name="delete" , value="' . $class["class_id"] . '"> 
                                                        <button id="noselect" class="delete-btn">
                                                            <span class="text">Delete</span>
                                                            <span class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>      
                                </div> 
                                ';
                            }
                            ?>
                        </section>
                    </div>
                </div>
            </section>

        </main>
        <?php require_once "footer.php" ?>
    </div>
    </div>
</body>

</html>