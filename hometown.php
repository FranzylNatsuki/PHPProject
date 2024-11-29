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
        <section class="hero">
            <img src="dumaguete.jpg" alt="Dumaguete City">
            <div class="hero-text">
                <h1>Dumaguete City</h1>
                <h3>The city of gentle people</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </section>
        <section class="city-highlights">
            <h2>City Highlights</h2>
            <div class="highlights-grid">
                <div class="highlight">
                    <img src="quezonpark.jpg" alt="Quezon park">
                    <p>Quezon park</p>
                </div>
                <div class="highlight">
                    <img src="apoisland.jpg" alt="Apo Island">
                    <p>Apo island</p>
                </div>
                <div class="highlight">
                    <img src="mttalinis.jpeg" alt="Mount Talinis">
                    <p>Mount Talinis</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
