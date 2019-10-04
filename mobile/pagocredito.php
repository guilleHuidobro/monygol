<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
$montoPago = $_POST['pago'];
$usuario = $_POST['usuario'];
$servername = "localhost";
$username = "id2561097_guille2";
$password = "caribe2018";
$database = "id2561097_monygol_primera";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_errno) {

    echo "Guille, este sitio web este experimentando problemas.";

    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

 //Creating an sql query
$sql = "INSERT INTO `cuenta_usuario`(`usuario`, `deposito_usuario`, `deposito_app`, `saldo`) VALUES ('$usuario','$montoPago',0,0)";
//Executing query to database
if ($mysqli->query($sql)) {
 echo 'Successfully';
 }else{
 echo 'Could Not Add';
 }
 
 //Closing the database 
$mysqli->close();
 }