<?php
$usuario = $_GET['usuario'];
$servername = "localhost";
$username = "id2561097_guille2";
$password = "caribe2018";
$database = "id2561097_monygol_primera";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
$registroPago = 10;
if ($mysqli->connect_errno) {

    echo "Guille, este sitio web este experimentando problemas.";

    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

// Realizar una consulta SQL

$sqlPrediccion ="DELETE FROM `predicciones_usuario` WHERE `usuario` = '$usuario'";

if (!$resultado = $mysqli->query($sqlPrediccion)) {
 
    echo "Lo sentimos, este sitio web este experimentando problemas.";

    echo "Error: La ejecucion de la consulta fallo debido a: \n";
    echo "Query: " . $sqlPrediccion . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

else {
$sqlInscripcion ="DELETE FROM `registro_pago_usuarios`  WHERE `usuario` = '$usuario'";

if (!$resultado = $mysqli->query($sqlInscripcion)) {

    echo "Lo sentimos, este sitio web este experimentando problemas.";

    echo "Error: La ejecucion de la consulta fallo debido a: \n";
    echo "Query: " . $sqlInscripcion . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
$sqlSelect= "SELECT `deposito_usuario` FROM cuenta_usuario where usuario = '$usuario'";
	if (!$resultSelect = $mysqli->query($sqlSelect)) {
            echo 'ERROR';
 	}else{	
    while ($fila = $resultSelect->fetch_assoc()) {
        $saldoTemporal = $fila["deposito_usuario"];
    }
    
    $sqlSelectPagoUsuario= "SELECT `deposito_usuario` FROM cuenta_usuario where usuario = '$usuario'";
	if (!$resultSelect = $mysqli->query($sqlSelectPagoUsuario)) {
            echo 'ERROR';
 	}else{
 	  while ($fila = $resultSelect->fetch_assoc()) {
        $pagoUsuario = $fila["registro_pago"];
        }
        if($pagoUsuario >= 0){
             	$saldoFinal = $saldoTemporal + $registroPago;
        }
 	}
 	}
$sqlSaldo= "UPDATE `cuenta_usuario` SET `deposito_usuario`= $saldoFinal ,`deposito_app`=0,`saldo`=0 WHERE usuario = '$usuario'";
	if ($mysqli->query($sqlSaldo)) {
           echo "OK added";
 	}else{
            echo 'Could Not Add';
 	}
}
$mysqli->close();
?>