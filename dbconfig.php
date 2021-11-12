//Connecting to the database
<?php
$servername = "localhost";
$username = "root"; //edit if you have set a username for MySQL
$password = "root"; // edit if you have set a password
$dbname = "inventory";

// Create connection syntax
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>