<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "excelsior_test";
//Catlakozás a szerverhez és az adatbázis kiválasztása
$connection = mysqli_connect ($servername, $username, $password, $db) or die($connection->error);
$roomID='';
$query = "SELECT * FROM `rooms`";
$query2 = "SELECT `Bedrooms`, `Toilet`, `Bathroom`, `Kitchen`, `Air_Conditioner`, `Balcony`, `WIFI`, `LED TV`, `Minibar` FROM components WHERE id = $roomID"; 
$result = mysqli_query($connection, $query);
$result2 = mysqli_query($connection, $query2);

function fill_description($connection)  
 {  
        $roomID="";    
        $getComp="";  
        //$query2 = "SELECT `Bedrooms`, `Toilet`, `Bathroom`, `Kitchen`, `Air_Conditioner`, `Balcony`, `WIFI`, `LED TV`, `Minibar` FROM components WHERE id = 1"; 
        $query2 = "SELECT * FROM `components`";
        $result2 = mysqli_query($connection, $query2);
      while($row = mysqli_fetch_array($result2))  
      {  
           //$getComp .= '<div class="col-md-3">';  
           $getComp .= '.$row["chosenRoom"].$row["Bedrooms"].$row["Toilet"].$row["Bathroom"].$row["Kitchen"].$row["Air_Conditioner"].$row["Balcony"].$row["WIFI"].$row["LED TV"].$row["Minibar"]'; 
           //$getComp .=     '</div>';  
           //$getComp .=     '</div>';  
      }  
      return $getComp;  
 }  

$getComp="";

?>


<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Excelsior</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
            <h2>Foglalás</h2><br>
            <form method="POST" action="../PHP/reservation2.php" id="resPHP">
            <div class="res-div">
                    <?php echo "Bejelentkezve mint: ".$_SESSION["UserName"];?>
                
                <div class="form-group">
                    <label for="chosenRoom">Szoba kiválasztása: </label>
                    <select id="chosenRoom" name="chosenRoom">
                        <option selected disabled>-- Válasszon szobát --</option>
                        <?php while($row = mysqli_fetch_array($result)):;?>
                        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                        <?php endwhile;?>
                    </select>
                </div>

                <div class="form-group">
                        <label for="roomComp">Szoba leírása: </br></label>
                        
                        <textarea class="description" id="roomComp" name="roomComp" readonly>
                        <?php echo fill_description($connection);?>
                        </textarea>
                </div>

                <div class="form-group">
                    <label for="arrival">Érkezés dátuma: </label>
                    <input type="date" id="arrival" name="arrival" required>
                    
                </div>

                <div class="form-group">
                    <label for="departure">Távozás dátuma: </label>
                    <input type="date" id="departure" name="departure" required>
                    
                </div>

                <div class="form-group">
                    <button onclick="resClick_()" type="submit" class="submit-btn" name="reservation">Foglalás</button>
                </div>

            </div>
            </form>
        </div>

    </div>

    <script src="../JS/login.js"></script>

</body>

</html>
<script>  
 $(document).ready(function(){  
    
      $('#chosenRoom').change(function(){  
           var room = $(this).val();  
           $.ajax({  
                url:"../PHP/loadDescription.php",  
                method:"POST",  
                data:{room:room},  
                success:function(data){  
                     $('#roomComp').html(data);  
                }  
           });  
      });  
 });  
 </script>  