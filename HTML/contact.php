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
            <h1> Elérhetőség </h1>
        <div>
            <p>&nbsp;</p>

            <p>Hotel Excelsior Karachi</p><br>

            <p>4, Plot Number SB, 21 Sarwar Shaheed Rd, Saddar Saddar Town, Karachi, Karachi City, Sindh, Pakisztán<br>
                Telefon: +922135631751</p><br>
            <p>E-mail: Excelsior2@Excelsior.com</p>
        </div>
    </div>
</body>

</html>