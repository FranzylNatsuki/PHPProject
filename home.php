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
      <img src="silliman-breaker-01-1569324831.png" id="backgroundImage">
    </div>
    <div>
      <div>
        <h3> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </h3>
        <div class="jsButton" onclick="stageFunction()"> Press Me!
        </div>
      </div>
      <div>
        <img src="">
        <img src="">
        <img src="">
      </div>
    </div>
</body>
</html>
