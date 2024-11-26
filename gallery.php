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
                  <h3 style="font-weight: bold;"> Hi <?php echo  $_SESSION['username'];?> ! </h3>
              </div>
              <form action="mainer.php" method="post">
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
    <div class="galleryBoy">
      <div class="gallery1 globalGallery" > 1 </div>
      <div class="gallery2 globalGallery"> 2 </div>
      <div class="gallery3 globalGallery"> 3 </div>
      <div class="gallery4 globalGallery"> 4 </div>
      <div class="gallery5 globalGallery"> 5 </div>
      <div class="gallery6 globalGallery"> 6 </div>
      <div class="gallery7 globalGallery"> 7 </div>
      <div class="gallery8 globalGallery"> 8 </div>
      <div class="gallery9 globalGallery"> 9 </div>
      <div class="gallery10 globalGallery"> 10 </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
