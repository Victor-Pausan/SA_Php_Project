<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/footer.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <script src="../public/js/script.js" defer></script>
    <title>Iron Anchor Athletics</title>
</head>

<body>
    <div id="page-container">
    <?php require_once "header.php"; ?>
        <main class="main">
            <section class="main-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="../public/assets/img/secondary_picture.png">
                    <source media="(min-width: 790px)" srcset="../public/assets/img/secondary_picture3.png">
                    <img src="../public/assets/img/secondary_picture2.png">
                </picture>
                <span class="card-body">
                    <h1 class="card-title">ELITE TRAINING.</h1>
                    <h1 class="card-title">UNBEATABLE RESULTS.</h1>
                    <p class="card-text">Join now or stay average.</p>
                    <a href="<?php echo $getStarted ?>" class="btn btn-light">Get started.</a>
                </span>
            </section>
            <section class="secondary-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="../public/assets/img/main_picture.jpg">
                    <source media="(min-width: 790px)" srcset="../public/assets/img/main_picture3.png">
                    <source media="(min-width: 690px)" srcset="../public/assets/img/main_picture4.png">
                    <img src="../public/assets/img/main_picture2.png" >
                </picture>
                <div class="square">
                    <h2 class="square-title">Membership with benefits</h2>
                    <p class="square-p">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios that
                        inspire you to perform and luxury amenities that keep you feeling your best.</p>
                    <a href="#" title="Comming soon">
                        <p class="square-p">View membership plans</p>
                    </a>
                </div>
            </section>
            <section class="third-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="../public/assets/img/section-pic-big.png">
                    <source media="(min-width: 790px)" srcset="../public/assets/img/section-pic-medium.png">
                    <img src="../public/assets/img/section-pic-small.png">
                </picture>
                <div class="square">
                    <h2 class="square-title">Where Luxury and Fitness Meet</h2>
                    <p class="square-p">Clubs that deliver an unrivaled experience to maximize your potential, and
                        luxury amenities that keep you performing at your best.</p>
                    <a href="<?php echo $headerControllersPath."clubs.php" ?>" title="Comming soon">
                        <p class="square-p">View clubs</p>
                    </a>
                </div>
            </section>
            <section class="fourth-section container" id="clubs">
                <div class="explore-text">
                    <h2 class="explore-title">Explore A Club Near You</h2>
                    <p class="explore-content">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios
                        that inspire you to perform and luxury amenities that keep you feeling your best.</p>
                </div>
                <div id="carouselExampleInterval" class="carousel slide explore-slideshow" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="4000">
                        <img src="../public/assets/img/nyc-gym.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>Tribeca</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="10007">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>54 Murray Street
                                    New York, NY 10007</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="../public/assets/img/florida-image.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>Brickell Heights</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="33131">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>25 SW 9th Street
                                    Miami, FL 33131</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="../public/assets/img/la-gym.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>West Hollywood</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="90069">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>8590 Sunset Blvd<br>West Hollywood, CA 90069</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="../public/assets/img/south-beach.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>South Beach</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="33139">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>Collins Avenue
                                    Miami Beach, FL 33139</p>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </section>
        </main>
        <?php require_once "footer.php"; ?>
</body>

</html>