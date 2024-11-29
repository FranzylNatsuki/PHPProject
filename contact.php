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
            <img src="user-profile-4255.svg" style="height: 3em; width: auto; margin-right: 1em; pointer-events: none; cursor: pointer; user-select: none;">
            <div class="left-wrapper">
              <div class="nameContainer">
                  <h3 style="font-weight: bold;"> Hi <?php echo  $_POST['username'];?> ! </h3>
              </div>
              <form action="mainer.php" method="post">
                <button id="logout" type="submit" name="logout"> Log Out </button>
              </form>
            </div>
            <div class="headerselector">
                <a href="#"> <h3 class="selectors"> Home </h3> </a>
                <a href="#"> <h3 id="cityText" class="selectors"> Dumaguete </h3> </a>
                <a href="#"> <h3 class="selectors"> Gallery </h3> </a>
                <a href="#"> <h3 class="selectors"> Content </h3> </a>
            </div>
        </div>
    </div>
    <main>
      <div class="form-section">
        <form id="contactForm">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Contact us for questions, technical assistance, or collaboration opportunities via the contact information provided.</p>
        <ul>
          <li><span>📞</span> +123-456-7890</li>
          <li><span>📧</span> hello@reallygreatsite.com</li>
          <li><span>📍</span> 123 Anywhere ST., Any City, 12345</li>
        </ul>
      </div>
    </main>
  </div>
  <script src="script2.js"></script>
</body>
</html>
