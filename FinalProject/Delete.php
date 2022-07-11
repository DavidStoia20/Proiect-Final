<?php
$conn = new mysqli("localhost", "myuser", "123", "finalproject");
if($conn->connect_error){
    echo 'Erroare'.$conn->connect_error;
}
 
if(isset($_GET['id'])){
 $id = $_GET['id'];
 $interogare = "DELETE FROM `appointment` WHERE `ID`";
 if($conn->query($interogare) === TRUE){
    echo 'Inregistrarea a fost stearsa';
 }
 else{
    echo 'ceva nu a mers';
 }
}