<?php

// conectiunea la baza de date

$conn = new mysqli("localhost", "myuser", "123", "finalproject");
if($conn->connect_error){
    echo 'Erroare'.$conn->connect_error;
}

$admName = $_GET['adminName'];
$admPass = $_GET['adminPass'];
$admEmail = $_GET['adminEmail'];

$interogare = "SELECT * FROM `admin` WHERE `Name` = '$admName' ;";

$rezultat = $conn->query($interogare);
$myAdmin = $rezultat->fetch_assoc();

echo '<pre>';
var_dump($myAdmin);
echo '</pre>';

// if($admEmail == $myAdmin['Email']){
//           echo '<h1 style="color:green">Esti autentificat!</h1>';
//     //  header('Refresh: 3; url=Admin.php');
// }
// else{
//     echo 'Nu ai acces';
// }
if(password_verify($admPass,$myAdmin['HashedPass'])){
      session_start();
      $_SESSION[$admName] = 'logged';
        echo '<h1 style="color:green">Esti autentificat!</h1>';
     header('Refresh: 3; url=Admin.php');
}
else{
    echo '<h1 style="color:red">Nu ai acces!</h1>';
    header('Refresh: 3; url=index.html');
}