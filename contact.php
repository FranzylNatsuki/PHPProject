<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homepage </title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body class="bodyhomepage">
    <div class="header">
        <div class="innerheader">
            <img src="images/user-profile-4255.svg" style="height: 3em; width: auto; margin-right: 1em; pointer-events: none; cursor: pointer; user-select: none;">
            <div class="left-wrapper">
              <div class="nameContainer">
                  <h3 style="font-weight: bold;"> Hi <?php echo  $_SESSION['username'];?> ! </h3>
              </div>
              <form action="index.php" method="post">
                <button id="logout" type="submit" name="logout"> Log Out </button>
              </form>
            </div>
            <div class="headerselector">
              <a href="home.php"> <h3 class="selectors"> Home </h3> </a>
              <a href="hometown.php"> <h3 id="cityText" class="selectors"> Dumaguete </h3> </a>
              <a href="gallery.php"> <h3 class="selectors"> Gallery </h3> </a>
              <a href="contact.php"> <h3 class="selectors"> Contact </h3> </a>
            </div>
        </div>
    </div>
    <main class="main" id="maincontact">
      <div class="form-section">
        <form class="form1" id="contactForm" method="post">
          <label for="name"> <h4> Name </h4> </label>
          <input type="name" id="name" name="name" required>

          <label for="email"> <h4> Email </h4> </label>
          <input type="email" id="email" name="email" required>

          <label for="phone"><h4>Phone Number </h4> </label>
          <input type="tel" id="phone" name="phone">

          <label for="message"> <h4> Message </h4> </label>
          <textarea id="message" name="message" rows="5" required></textarea>
          <button type="submit" onclick="submitForm()"> <h4> Submit </h4> </button>
        </form>
      </div>
      <div id="contactingForm" class="contact-info">
        <h2 style="margin-bottom: 2em;">Contact Us</h2>
        <div style="margin-top: 4em">
          <h4>Contact us for questions, technical assistance, or collaboration opportunities via the contact information provided.</h4>
          <ul>
            <li><span>📞</span> +123-456-7890</li>
            <li><span>📧</span> jodeladoloricon@gmail.com</li>
            <li><span>📍</span> 324 Maple Avenue ST., Springfield, 62704</li>
          </ul>
        </div>
    </main>
        <div id="thankyou">
          <h2> Thank You For Reaching Out To Us! </h2>
          <h3> Your message has been successfully received. Our team will review and respond promptly. </h3>
        </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
