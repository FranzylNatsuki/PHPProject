<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CCS1 Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodylogin">
    <div class="loginPage">
        <div class="loginBlock">
            <center>
                <img src="images/logindecor.svg" style="height: 10px;">
                <h1 style="margin-top: 0; margin-bottom: 1px;"> Welcome! </h1>
                <h3 style="margin-bottom: 4em;"> Please Enter Your Details! </h3>
                <div class="form-container">
                    <form method="post" action="home.php">
                    <div class="form-group">
                        <input type="text" id="username" name="username" required placeholder="Username">
                    </div>
                    <div class="form-group" style="position: relative;">
                        <input type="password" id="password" name="password" required placeholder="Password">
                        <span class="eye-icon" id="toggle" onclick="togglePassword()" style="cursor: pointer;">
                            &#128065;
                        </span>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    </form>
                </div>
            </center>
        </div>
        <img class="corporateImage" src="images/7871282.png" style="height: 45em;">
    </div>
    <script src="script.js"></script>
    <!-- Commit test -->
</body>
</html>
