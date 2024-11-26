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
      <div class="gallery1 globalGallery"> <img class="globalGalleryImg" src="458985190_122154179738253021_5809505008943838644_n.jpg"> </div> <!--1-->
      <div class="gallery2 globalGallery"> <img class="globalGalleryImg" src="7f1f76c6-3448-43fd-b38d-57a024033d3d_dumaguete-casaroro-falls-medium.jpg"> </div> <!--2-->
      <div class="gallery3 globalGallery"> <img class="globalGalleryImg" src="National_Museum_Negros_Oriental.jpg"> </div> <!--3-->
      <div class="gallery4 globalGallery"> <img class="globalGalleryImg" src="Dumaguete-City-Facts.jpg"> </div> <!--4-->
      <div class="gallery5 globalGallery"> <img class="globalGalleryImg" src="458981675_2513913245460797_7666216691689845139_n.jpg"> </div> <!--5-->
      <div class="gallery6 globalGallery"> <img class="globalGalleryImg" src="462191610_2541748472677274_1961808319442160086_n.jpg"> </div> <!--6-->
      <div class="gallery7 globalGallery"> <img class="globalGalleryImg" src="391702071_711758520998502_2719739560590278704_n.jpg"> </div> <!--7-->
      <div class="gallery8 globalGallery"> <img class="globalGalleryImg" src="455753832_122147988440253021_1508034820211835496_n.jpg"> </div> <!--8-->
      <div class="gallery9 globalGallery"> <img class="globalGalleryImg" src="391702071_711758520998502_2719739560590278704_n.jpg"> </div> <!--9-->
      <div class="gallery10 globalGallery"> <img class="globalGalleryImg" src="436203108_735118802145542_724693089564734720_n.jpg"> </div> <!--10-->
    </div>
    <script src="script.js"></script>
</body>
</html>
