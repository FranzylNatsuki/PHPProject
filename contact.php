<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $_SESSION["username"] = $_POST["username"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homepage </title>
    <link rel="stylesheet" href="style2.css">
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
                  <h3 style="font-weight: bold;"> Hi <?php echo  $_SESSION['username'];?> ! </h3>
              </div>
              
            </div>
            <div class="headerselector">
                <a href="home.php"> <h3 class="selectors"> Home </h3> </a>
                <a href="hometown.php"> <h3 id="cityText" class="selectors"> Dumaguete </h3> </a>
                <a href="gallery.php"> <h3 class="selectors"> Gallery </h3> </a>
                <a href="contact.php"> <h3 class="selectors"> Contact </h3> </a>
            </div>
        </div>
    </div>
    <div class="mainContent">
      <div class="banner">
        <img src="bannerpic.png" id="backgroundImage">
      </div>

      <main>
      <div class="contact-form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Contact us for questions, technical assistance, or collaboration opportunities via the contact information provided.</p>
        <ul>
          <li><strong>Email:</strong> example@example.com</li>
          <li><strong>Phone:</strong> +123-456-7890</li>
          <li><strong>Address:</strong> 123 Example Street, City, Country</li>
        </ul>
      </div>
      
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>