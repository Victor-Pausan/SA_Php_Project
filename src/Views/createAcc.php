<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/createacc.css">
  <link rel="stylesheet" href="../../public/css/header.css">
  <link rel="stylesheet" href="../../public/css/footer.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="../../public/js/createacc-form-validation.js" defer></script>
  <title>Create an account</title>
</head>

<body>
  <div id="page-container">
  <?php require_once "header.php"; ?>
    <main class="main">
      <section class="classes-form">
        <div class="container">
          <div class="row">
            <div class="col-5">
              <div class="title">
                <h1>CREATE AN ACCOUNT</h1>
              </div>
              <div class="login-link">
                <a href="login.php">
                    <h5>ALREADY HAVE AN ACCOUNT?</h5>
                </a>
              </div>
            </div>
            <div class="col">
              <form class="form" method="POST">
                <div class="form-floating mb-3">
                  <input name="fullname" id="fullname" type="text" class="form-control">
                  <div id="fullname-error" class="error-message"></div>
                  <label for="fullname">Full Name:</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="email" id="email" type="text" class="form-control">
                  <div id="email-error" class="error-message"></div>
                  <label for="email">Email:</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="phonenr" id="phonenr" type="text" class="form-control">
                  <div id="phonenr-error" class="error-message"></div>
                  <label for="phonenr">Phone Number:</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="password" id="password" type="password" class="form-control">
                  <div id="password-error" class="error-message"></div>
                  <label for="password">Password:</label>
                </div>
                <button class="submit" type="submit">Create account</button>
              </form>
            </div>
          </div>
        </div>
      </section>

    </main>
    <?php require_once "footer.php"; ?>
  </div>
  </div>
</body>

</html>