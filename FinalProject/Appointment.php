<?php

$conn = new mysqli("localhost", "myuser", "123", "finalproject");
if($conn->connect_error){
    echo 'Erroare'.$conn->connect_error;
}

$userName = $_GET['name'];
$userEmail = $_GET['email'];
$userPnumber = $_GET['pnumber'];

$interogare = "INSERT INTO 
`appointment`
(`userName`, `userEmail`, `userPnumber`)
VALUES 
('$userName', '$userEmail', '$userPnumber');";
$rezultat = $conn->query($interogare);

if($rezultat == null){
    echo '<h2>Ceva n-a mers</h2>';
}
else{
    session_start();
    $_SESSION[$userName] = 'logged';
      echo '<h1 style="color:green">Programare realizata!</h1>';
   header('Refresh: 3; url=index.html');
}
