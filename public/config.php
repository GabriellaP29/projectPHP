<?php
/*Define username and password
if(isset($_POST['Submit'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];
}
*/
/*
 * Configuration for database connection*/

$host = "localhost";
$username = "root";
$password = "Pepito1!";
$dbname = "store"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 );
?>


