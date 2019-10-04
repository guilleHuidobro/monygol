<?php
$servername = "localhost";
$username = "id2561097_guille";
$password = "caribe2018";
$database = "id2561097_monygol_web";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>