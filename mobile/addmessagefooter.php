<?php
$mensaje = $_GET['mensaje'];
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

else {
$sqlInscripcion ="DELETE FROM `mensaje_footer`";

if (!$resultado = $mysqli->query($sqlInscripcion)) {

    echo "Lo sentimos, este sitio web este experimentando problemas.";

    echo "Error: La ejecucion de la consulta fallo debido a: \n";
    echo "Query: " . $sqlInscripcion . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
else{
$sqlMessage= "INSERT INTO `mensaje_footer`(`id_mensaje_footer`, `mensaje_footer`) VALUES (null,'$mensaje')";
	if ($devolucion = $mysqli->query($sqlMessage)) {
           echo "OK added";
 	}else{
            echo 'Algo fallo : '.$mensaje;
 	}
}
}
$mysqli->close();
?>