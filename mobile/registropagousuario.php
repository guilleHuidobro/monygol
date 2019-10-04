<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
$registroPago = $_POST['registroPago'];
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
$sql = "INSERT INTO `registro_pago_usuarios`(`usuario`, `fecha_fixture`, `registro_pago`) VALUES ('$usuario',(SELECT numero_fecha_afa FROM fixture LIMIT 1),'$registroPago')";
	if ($mysqli->query($sql)) {
            echo "OK added registro_pago_usuarios";
 	}else{
            echo 'Could Not Add';
 	}

$sqlSelect= "SELECT `deposito_usuario` FROM cuenta_usuario where usuario = '$usuario'";
	if (!$resultSelect = $mysqli->query($sqlSelect)) {
            echo 'ERROR';
 	}else{	
    while ($fila = $resultSelect->fetch_assoc()) {
        $saldoTemporal = $fila["deposito_usuario"];
    }
 	$saldoFinal = $saldoTemporal - $registroPago;
 	}
$sqlSaldo= "UPDATE `cuenta_usuario` SET `deposito_usuario`= $saldoFinal ,`deposito_app`=0,`saldo`=0 WHERE usuario = '$usuario'";
	if ($mysqli->query($sqlSaldo)) {
           echo "OK added";
 	}else{
            echo 'Could Not Add';
 	}
$resultSelect->free(); 	
$mysqli->close();
 }