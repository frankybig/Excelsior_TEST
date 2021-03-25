<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Excelsior</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div id="container">
        <div id="header"></div>
        <div id="menu">
            <ul>
                <li><a href="index.php">F&#337;oldal</a></li>
                <li><a href="html/debut.php">Bemutatkoz&aacute;s</a></li>
                <li><a href="html/freetime.php">Szabadid&#337;</a></li>
                <li><a href="html/gallery.php">Gal&eacute;ria</a></li>
                <li><a href="html/rooms.php">Szob&aacute;k</a></li>
                <li><a href="html/prices.php">&Aacute;rak</a></li>
                <li><a href="html/contact.php">El&eacute;rhet&#337;s&eacute;g</a></li>
                <?php
                    if (!isset($_SESSION['UserName']) ) {
                echo '<li><a href="html/login.php">Foglal&aacute;s</a></li>';
                    }
                ?>
                <?php
                    if (isset($_SESSION['UserName']) ) {
                    echo '<li><a href="html/reservation.php">Foglal&aacute;s</a></li>';
                    }
                ?>
                <li style="border-right: 0;"><a href="html/map.php">T&eacute;rk&eacute;p</a></li>
            </ul>
        </div>
        <div class="clear"></div>

        <div id="content">
            <h1>Főoldal</h1><br>
            <div id="fooldal">Üdvözöljük a Hotel Excelsior honlapján!<br>
                Ismerjen meg jobban a fenti  menürendszer kalauzolásával!</div>

            <div id="centerszoveg">Egész évben szeretettel várjuk a pihenni, kikapcsolódni vágyó, üzleti úton lévő, egyénileg, családosan
                vagy csoportosan érkező kedves vendégeinket!</div>
            </p><br>
        </div>
    </div>
</body>

</html>