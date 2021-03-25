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
    <script src="../JS/clearbox.js" type="text/javascript"></script>
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
            <h1>Galéria</h1>
        </div>
        <div class="gall">
            <p><a href="../img/BedRoom.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/BedRoom_thb.jpg"></a>
              <a href="../img/BedRoom2.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/BedRoom2_thb.jpg"></a>
              <a href="../img/BathRoom.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/BathRoom_thb.jpg"></a>
              <a href="../img/BathRoom2.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/BathRoom2_thb.jpg"></a></p></div>
           <div class="gall"> 
            <p><a href="../img/Recepcio.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Recepcio_thb.jpg"></a>
                <a href="../img/Hall.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Hall_thb.jpg"></a>
                <a href="../img/MeetingRoom.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/MeetingRoom_thb.jpg"></a>
            <a href="../img/MeetingRoom2.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/MeetingRoom2_thb.jpg"></a></p></div>
           <div class="gall">
            <p><a href="../img/Atrium.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Atrium_thb.jpg"></a>
                <a href="../img/Apartman.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Apartman_thb.jpg"></a>
            <a href="../img/Restorant.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Restorant_thb.jpg"></a>
                <a href="../img/Restorant2.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/Restorant2_thb.jpg"></a></p></div>
           <div class="gall">
            <p><a href="../img/swimingpool.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/swimingpool_thb.jpg"></a>
            <a href="../img/swimingpool2.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/swimingpool2_thb.jpg"></a>
                <a href="../img/GYM.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/GYM_thb.jpg"></a>
            <a href="../img/sauna.jpg" rel="clearbox[gallery=My Gallery]"><img src="../img/sauna_thb.jpg"></a></p></div>
            <p>&nbsp;</p>


    </div>
</body>

</html>