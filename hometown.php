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
    <main>
        <section class="hero">
            <div class="htmainimage">
              <img src="images/dumaguete.jpg" id="ht1" alt="Dumaguete City">
              <img src="images/1-4.webp" id="ht2" alt="Dumaguete City">
            </div>
            <div class="hero-text">
                <h1>Dumaguete City</h1>
                <h3>The city of gentle people</h3>
                <h3 style="text-align: justify; text-indent: 4em;">Dumaguete City is a coastal city located in the southern part of the Philippines, on the island of Negros. It is often referred to as the "City of Gentle People" due to the warm and welcoming nature of the local residents.
                    One of the city's most striking features is its picturesque seaside location. Situated along the Bohol Sea, Dumaguete boasts a stunning coastline with pristine beaches, rocky coves, and a bustling promenade known as the Boulevard. This scenic waterfront area is a popular gathering place for both locals and visitors, offering stunning views of the ocean and the distant Siquijor Island.</h3>
                <h3 style="text-align: justify; text-indent: 4em;">Beyond the coast, Dumaguete is surrounded by lush, verdant landscapes. The city is home to towering palm trees, vibrant flowering plants, and well-manicured parks that provide a refreshing contrast to the urban environment. One of the most notable green spaces is the Rizal Boulevard, a palm-lined promenade that runs along the coastline and offers a peaceful escape from the busier parts of the city.</h3>
                <h3 style="text-align: justify; text-indent: 4em;">Complementing the natural beauty are the city's historic structures and cultural landmarks. The iconic Dumaguete Bell Tower, a centuries-old structure with a distinctive yellow facade, stands as a symbol of the city's heritage and serves as a popular tourist attraction. Nearby, the Silliman University campus features a mix of modern and colonial-era buildings that showcase the city's blend of old and new.
                    Overall, Dumaguete City's combination of stunning natural scenery, well-preserved heritage, and friendly local community make it a truly captivating destination. Whether you're strolling along the seaside promenade, exploring the lush parks, or admiring the city's historic architecture, there's no shortage of beauty and charm to discover in this vibrant Philippine city.</h3>
            </div>
        </section>
        <section class="city-highlights">
            <h2>CITY HIGHLIGHTS</h2>
            <div class="highlights-grid">
                <div class="highlight">
                    <img src="images/quezonpark.jpg" alt="Quezon park">
                    <h3>Quezon park</h3>
                </div>
                <div class="highlight">
                    <img src="images/apoisland.jpg" alt="Apo Island">
                    <h3>Apo island</h3>
                </div>
                <div class="highlight">
                    <img src="images/mttalinis.jpeg" alt="Mount Talinis">
                    <h3>Mount Talinis</h3>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          const highlights = document.querySelector(".city-highlights");

          const onScroll = () => {
              const sectionTop = highlights.getBoundingClientRect().top;
              const viewportHeight = window.innerHeight;

              if (sectionTop < viewportHeight - 100) {
                  highlights.classList.add("visible");
              }
          };

          window.addEventListener("scroll", onScroll);
      });
    </script>
</body>
</html>
