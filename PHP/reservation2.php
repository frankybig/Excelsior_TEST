<?php
session_start();

    $userID = $_SESSION["id"];                                            
    $roomID = $_POST['chosenRoom'];                     
    $arrivalDate = $_POST['arrival'];
    $departureDate = $_POST['departure'];

$db = new mysqli('localhost','root','','excelsior_test');
$query = mysqli_query($db, "SELECT * FROM `reservations` WHERE `Room_ID` = '$roomID' AND (ArrivalDate BETWEEN '$arrivalDate' AND '$departureDate' OR DepartureDate BETWEEN '$arrivalDate' AND '$departureDate')");
    

$failed = mysqli_num_rows($query);
if ($failed == 1) {
    echo "Erre a dátumra az adott szobára már leadtak foglalást!";
    echo '<a href="../HTML/reservation.php"><button>Új foglalás!</button></a>';
}elseif(isset($_POST['reservation'])){
    $sql = mysqli_query($db, "INSERT INTO `reservations`(`User_ID`, `Room_ID`, `ArrivalDate`, `DepartureDate`) VALUES ('$userID','$roomID','$arrivalDate','$departureDate')");
      
      echo '<script>alert("Sikeres foglalás</br>")</script>';
      echo '<a href="../index.php"><button>Vissza a főoldalra!</button></a>';
      $db->close();
    


}
?>