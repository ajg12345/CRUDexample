<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$DbServer = 'localhost';
$DbUser =  'root';
$DbPassword =  '';
$DbName = 'crudexample';
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>