<?php // whatever
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginPage">
        <div class="loginBlock">
            <center>
                <h1 style="margin-bottom: 1px;"> Welcome! </h1>
                <h3 style="margin-bottom: 4em;"> Please Enter Your Details! </h3>
                <div class="form-container">
                    <form>
                    <div class="form-group">
                        <input type="text" id="username" name="username" required placeholder="Username">
                    </div>
                    <div class="form-group" style="position: relative;">
                        <input type="password" id="password" name="password" required placeholder="Password">
                        <span class="eye-icon" onclick="togglePassword()" style="cursor: pointer;">
                            &#128065; <!-- Eye icon -->
                        </span>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    </form>
                </div>
            </center>
        </div>
        <img class="corporateImage" src="https://raw.githubusercontent.com/FranzylNatsuki/PHPProject/refs/heads/main/7871282.png" style="height: 45em;">
    </div>
</body>
</html>