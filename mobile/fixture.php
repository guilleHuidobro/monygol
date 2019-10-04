<?php
$servername = "localhost";
$username = "id2561097_guille2";
$password = "caribe2018";
$database = "id2561097_monygol_primera";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Hay que avisarle a GUILLERMO ";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
// Realizar una consulta SQL
$sql ='SELECT * FROM `fixture` WHERE 1';
if (!$resultado = mysqli_query($mysqli,$sql)) {
    echo "Avisemosle a GUILLERMO, lo sentimos, este sitio web está experimentando problemas. \n";
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
else {
    $result = mysqli_query($mysqli,$sql);
    $emparray = array();
    $fixture = array();
    //echo "<table>
     // <tr>
        //<td>Nombre</td>
      //</tr>";
    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($result)){
        //echo "<tr>
          //  <td>".$row['nombre']."</td>
        //</tr>";
        $emparray[] = $row;
    }
    //echo "</table>";
    $fixture = [
    "fixture" => $emparray
];
    echo json_encode($fixture);
    mysqli_free_result($result);
}
$resultado->free();
$mysqli->close();
?>