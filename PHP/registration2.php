<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "excelsior_test";
//Catlakozás a szerverhez és az adatbázis kiválasztása
$connection = new mysqli ($servername, $username, $password, $db) or die($connection->error);

if(isset($_POST['registration']))
{
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $phoneNum = $_POST['phoneNum'];
    $password = $_POST['password_1'];
    
    $sql = "INSERT INTO `users`(`UserName`, `emailAdd`, `TelNumber`, `pass`) VALUES ('$userName','$email','$phoneNum','$password')";
    
    if($connection->query($sql)===true) {
      echo '<script>alert("Sikeres regisztráció</br>Jelentkezz be!")</script>';
      header('Location: ../HTML/login.php');
      $connection->close();
    }else
    echo $connection->error;
    $connection->close();
}

?>