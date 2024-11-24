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
    <div class="mainContent">
      <div class="banner">
        <img src="bannerpic.png" id="backgroundImage">
      </div>
      <div class="textArea">
        <h4 style="margin-bottom: 1em; text-indent: 4em;"> 
          University (also referred to as Silliman or SU) is a private research university in Dumaguete, Philippines. Established in 1901 as Silliman Institute by the Presbyterian Board of Foreign Missions, it is the first American and Protestant founded institution of higher learning in the Philippines and in Asia.
        </h4>
          <div id="jsButton" onclick="stageFunction()"> <h4> Press Me! </h4> </div>
      </div>
      <div class="setPictures1"> <img id="img1" src="Cropped_Image.png"> </div>
      <div class="setPictures2"> <img id="img1" src="Cropped_Image (2).png"> </div>
      <div class="setPictures3"> <img id="img1" src="Cropped_Image (1).png"> </div>
    </div>
    <script src="script.js"></script>
</body>
</html>