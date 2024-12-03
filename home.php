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
                  <h3 style="font-weight: bold;">
                    <?php
                      if (isset($_SESSION['username']))
                          echo  "Hi " . $_SESSION['username'] . "!";
                      else
                          echo "Logged in as Guest!";
                    ?>
                    </h3>
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
    <div class="mainContent">
      <div class="banner">
        <img src="images/cover-photo-dumaguete-city.jpg" id="backgroundImage">
      </div>
      <div class="textArea">
        <h4 style="margin-bottom: 1em; text-indent: 4em;">
            Welcome to our website! We are Franzyl and Jodel, two passionate developers dedicated to showcasing the beauty and culture of our hometown, Dumaguete. In this project, CCS 1, we’ve combined our skills in HTML, CSS, PHP, and JavaScript to create a website that highlights the rich history, vibrant community, and scenic attractions of Dumaguete. We hope you enjoy exploring Dumaguete through our eyes and experience the charm of our hometown!
        </h4>
          <div id="jsButton" onclick="stageFunction()"> <h4> Press Me! </h4> </div>
      </div>
      <div class="setPictures1"> <img id="img1" src="images/Cropped_Image (3).png"> </div>
      <div class="setPictures2"> <img id="img1" src="images/images/1674ee74-e211-4d75-b6e2-9aae2313c587.jpeg"> </div>
      <div class="setPictures3"> <img id="img1" src="images/Cropped_Image (1).png"> </div>
      <div id="javing">
        <div class="jav1 javers">
          <h2 class="boxHead"> Bio </h2>
          <div class="boxContent">
            <h4> I am Franzyl Macalua, a Computer Science Student. I like learning coding languages and practicing my LeetCode skills. </h4> <br>
            <h4> I am Jodel Doloricon, a passionate Computer Science student. I'm actively learning coding languages and enthusiastically developing my skills on LeetCode. </h4>
          </div>
        </div>
        <div class="jav2 javers">
          <h2 class="boxHead"> About </h2>
          <div class="boxContent">
            <h3> This is a website that showcases the beauty and culture of Dumaguete City. Dumaguete City is the capital of Negros Oriental, Philippines. It's known for its beautiful beaches, dive sites and vibrant culture. </h3>
          </div>
        </div>
        <div class="jav3 javers">
          <h2 class="boxHead"> Submission </h2>
          <div class="boxContent">
            <h3> This output was created as a partial submission for CCS 1: Introduction to Computing. </h3>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
