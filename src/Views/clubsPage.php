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
                <h1 class="text-left mb-5">FIND A CLUB NEAR YOU</h1>
                <form class="form-inline justify-content-center" style="max-width: 450px;">
                    <select name="state" class="form-select mb-3 form-select-lg" aria-label="Default select example" onchange="this.form.submit();">
                        <option selected>Choose a state</option>
                        <?php
                        foreach ($states as $state) {
                            echo '<option value="' . $state["state_id"] . '">' . $state["state_name"] . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </section>

            <section class="container my-5">
                <h2 class="text-left mb-5">Featured Clubs</h2>
                <div class="row">
                    <?php
                        foreach($states as $state){
                            echo
                            '
                            <a class="link-offset-2 link-underline link-underline-opacity-0" href="clubsInState.php?state='.$state["state_id"].'">
                                <div class="card text-bg-light mb-4 p-3">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body p-4">
                                                <h5 class="card-title">'.$state["state_name"].'</h5>
                                                <p class="card-text">'.$state["state_info"].'</p>
                                                <p class="card-text"><small class="text-muted">View all clubs</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="../../public/assets/img/'.$state["state_picture_path"].'" class="img-fluid rounded-start" alt="...">
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