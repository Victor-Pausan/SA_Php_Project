<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/contact-style.css">
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="js/contact.js" defer></script>
  <title>Contact Iron Anchor Athletics</title>
</head>

<body>
  <div id="page-container">
  <?php require_once "header.php"; ?>
    <!-- <div class="submission-counter">Submissions: 0</div> -->
    <main class="main">
      <section class="sec-1">
        <div class="container">
          <div class="row">
            <div class="main-content col-5">
              <h1>CONTACT US</h1>
            </div>
            <div class="contact-text col">
              <h2>Email</h2>
              <p>anchorathletics@iron.com</p>
              <br>
              <h2>Address</h2>
              <p>16 Lakeview Rd, Boothbay Harbor, ME, 04538</p>
              <br>
              <h2>Facebook</h2>
              <p>Iron Anchor Athletics</p>
              <br>
              <h2>Instagram</h2>
              <p>@ironanchorath</p>
              <br>
              <h2>Call Us</h2>
              <p>+1 (207) 401 1908</p>
            </div>
          </div>
        </div>
      </section>

      <section class="sec-2">
        <div class="container">
          <div class="row">
            <div class="form-title col-5">
              <h1>SUBMIT A QUESTION</h1>
            </div>
            <div class="col">
              <form id="form" class="contact-form" method="POST">

                <div class="first-name form-floating mb-3">
                  <input type="text" id="first-name" name="first-name" class="form-control">
                  <div id="first-name-error" class="error-message"><?php echo isset($_SESSION["first-name-error".$form]) ? $_SESSION["first-name-error".$form] : ""; ?></div>
                  <label for="first-name" id="first-name-label">First Name:</label>
                </div>

                <div class="last-name form-floating mb-3">
                  <input type="text" id="last-name" name="last-name" class="form-control">
                  <div id="last-name-error" class="error-message"><?php echo isset($_SESSION["last-name-error".$form]) ? $_SESSION["last-name-error".$form] : ""; ?></div>
                  <label for="last-name" id="last-name-label">Last Name:</label>
                </div>

                <div class="email form-floating mb-3">
                  <input type="text" id="email" name="email" class="form-control">
                  <div id="email-error" class="error-message"><?php echo isset($_SESSION["email-error".$form]) ? $_SESSION["email-error".$form] : ""; ?></div>
                  <label for="email" id="email-label">Email Address:</label>
                </div>

                <div class="subject form-floating mb-3">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <div id="subject-error" class="error-message"><?php echo isset($_SESSION["subject-error".$form]) ? $_SESSION["subject-error".$form] : ""; ?></div>
                  <label for="subject" id="subject-label">Subject:</label>
                </div>

                <div class="message form-floating mb-3">
                  <textarea id="message" name="message" class="form-control"></textarea>
                  <div id="message-error" class="error-message"><?php echo isset($_SESSION["message-error".$form]) ? $_SESSION["message-error".$form] : ""; ?></div>
                  <label for="message" id="message-label">Message:</label>
                </div>
                <button type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="sec-3">
        <div class="container">
          <div class="row">
            <div class="mailing-address col-5">
              <h1>MAILING ADRESS</h1>
            </div>
            <div class="map col">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.140104702882!2d-69.64560042391108!3d43.85292467109335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cad98e229b289ef%3A0x8b60318191192084!2s16%20Lakeview%20Rd%2C%20Boothbay%20Harbor%2C%20ME%2004538%2C%20Statele%20Unite%20ale%20Americii!5e0!3m2!1sro!2sro!4v1706900766848!5m2!1sro!2sro"
                height="500" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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