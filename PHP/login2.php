<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//Catlakozás a szerverhez és az adatbázis kiválasztása
$db = new mysqli('localhost','root','','excelsior_test');
$query = mysqli_query($db, "SELECT * FROM `users` WHERE emailAdd = '$email' AND pass = '$password'");

$event = mysqli_num_rows($query);

if($event == 1){
$theName = mysqli_query($db, "SELECT UserName FROM `users` WHERE emailAdd='$email'");
$_SESSION["UserName"]= mysqli_fetch_assoc($theName)["UserName"];
$name=$_SESSION["UserName"];
$idOftheName = mysqli_query($db, "SELECT id FROM `users` WHERE UserName = '$name'");
$_SESSION["id"]= mysqli_fetch_assoc($idOftheName)["id"];
echo $_SESSION["UserName"];
echo $_SESSION["id"];
$db->close();
echo $_SESSION;
header('Location: ../HTML/reservation.php');
}else{
    echo "Sikertelen bejelentkezés, ellenőrizze az adatokat!";
    $db->close();
    echo '<a href="../HTML/login.php"><button>Újra</button></a>';
}

?>


