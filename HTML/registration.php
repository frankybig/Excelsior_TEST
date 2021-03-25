<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Excelsior</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div id="container">
        <div id="header"></div>
        <div id="menu">
            <ul>
                <li><a href="../index.php">F&#337;oldal</a></li>
                <li><a href="debut.php">Bemutatkoz&aacute;s</a></li>
                <li><a href="freetime.php">Szabadid&#337;</a></li>
                <li><a href="gallery.php">Gal&eacute;ria</a></li>
                <li><a href="rooms.php">Szob&aacute;k</a></li>
                <li><a href="prices.php">&Aacute;rak</a></li>
                <li><a href="contact.php">El&eacute;rhet&#337;s&eacute;g</a></li>
                <?php
                    if (!isset($_SESSION['UserName']) ) {
                echo '<li><a href="login.php">Foglal&aacute;s</a></li>';
                    }
                ?>
                <?php
                    if (isset($_SESSION['UserName']) ) {
                    echo '<li><a href="reservation.php">Foglal&aacute;s</a></li>';
                    }
                ?>
                <li><a href="map.php">T&eacute;rk&eacute;p</a></li>
            </ul>
        </div>
        <div class="clear"></div>

        <div id="content">
            <h2>Regisztráció</h2><br>
            <form method="POST" action="../PHP/registration2.php" id="regPHP">
                <div class="reg-div">
                    <div class="form-group">
                        <label>Emailcím</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Felhasználó név</label>
                        <input class="form-control" type="text" name="userName" required>
                    </div>
                    <div class="form-group">
                        <label>Telefonszám</label>
                        <input class="form-control" type="text" name="phoneNum" required>
                    </div>
                    <div class="form-group">
                        <label>Jelszó</label>
                        <input class="form-control" type="password" name="password_1" required minlength="4">
                    </div>
                    <div class="form-group">
                        <label>Jelszó megerősítése</label>
                        <input class="form-control" type="password" name="password_2" required>
                    </div><br>
                    <div>
                        <label for="privacy-statement">Adatvédelm nyilatkozat elfogadása</label>
                        <input class="form-control" type="checkbox" name="privacy-statement" required="required">
                    </div><br><br>
                    <div class="form-group">
                        <button onclick="regClick_()" type="submit" class="submit-btn" name="registration">Regisztrálás</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="../JS/registration.js"></script>

</body>

</html>