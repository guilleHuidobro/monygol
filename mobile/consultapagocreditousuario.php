<?php
$usuario = $_GET['usuario'];
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

// Realizar una consulta SQL
$sql ="SELECT * FROM `cuenta_usuario` WHERE `usuario` = '$usuario'";

if (!$resultado = $mysqli->query($sql)) {
 
    echo "Lo sentimos, este sitio web este experimentando problemas.";

    echo "Error: La ejecucion de la consulta fallo debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}


else {

    $result = $mysqli->query($sql);

    $emparray = array();

    $pagocreditousuario = array();


    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($result)){

        $emparray[] = $row;
    }

    $pagocreditousuario = [
    "consultapagocreditousuario" => $emparray
];    
    echo json_encode($pagocreditousuario). "\n";
    mysqli_free_result($result);
}

$resultado->free();
$mysqli->close();
?>