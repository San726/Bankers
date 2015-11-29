<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "be20fb3406715c";
$password = "4239cc72";
$dbname = "FOURSDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

if(!isset($_SESSION["first_name"]) && $_SERVER['PHP_SELF'] != "/index.php"){ 
    header("Location: /");
}
?>
