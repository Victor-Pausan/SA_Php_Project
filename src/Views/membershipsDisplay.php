<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/css/memberships-page.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <script src="../../public/js/memberships-page.js" defer></script>
    <title>Clubs</title>
</head>

<body>
    <div id="page-container">
        <?php require_once "header.php" ?>
        <main class="main">
            <section class="main-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="../../public/assets/img/memberships-picture.jpg">
                    <source media="(min-width: 790px)" srcset="../../public/assets/img/memberships-picture2.jpg">
                    <img src="../../public/assets/img/memberships-picture3.jpg">
                </picture>
                <span class="card-body text-start main-card">
                    <h1 class="card-title main-title">MEMBERSHIP</h1>
                    <h1 class="card-title main-title">WITH BENEFITS.</h1>
                    <p class="card-text main-text">Iron Anchor is available however, whenever, and wherever you want it. Explore the benefits you get with an Iron Anchor membership below.</p>
                    <a href="#memberships" class="btn btn-light">View Memberships.</a>
                </span>
            </section>

            <section id="memberships" class="my-5 p-5">
                <div class="container">
                    <div class="row d-flex justify-content-center gap-5">
                        <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title">Basic Membership:</h5>
                                <ul class="list">
                                    <li><i class="fas fa-check text-success mr-2"></i>Access to basic gym facilities</li>
                                    <li><i class="fas fa-check text-success mr-2"></i>Limited access to group fitness classes</li>
                                    <li><i class="fas fa-check text-success mr-2"></i>No additional perks or services included</li>
                                </ul>
                                <a href="<?php echo "clubs.php?subscription_id=1" ?>" class="btn btn-dark">Choose</a>
                            </div>
                        </div>
                        <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title">Premium Membership:</h5>
                                <ul class="list">
                                    <li><i class="fas fa-check text-success mr-2"></i>Full access to all gym facilities</li>
                                    <li><i class="fas fa-check text-success mr-2"></i>Unlimited access to group fitness classes</li>
                                    <li><i class="fas fa-check text-success mr-2"></i>Discounts on personal training sessions or other services</li>
                                    <li><i class="fas fa-check text-success mr-2"></i>Access to exclusive member events or workshops</li>
                                </ul>
                                <a href="<?php echo "clubs.php?subscription_id=2" ?>" class="btn btn-dark">Choose</a>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        <?php require_once "footer.php" ?>
    </div>
</body>

</html>