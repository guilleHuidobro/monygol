<?php
include_once("dbconnectionfixture.php");
SESSION_START();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fechaFixture = $_POST['fechaFixture'];
$array = $_POST['resultado'];
$array2 = $_POST['idPartido'];

foreach($array as $key => $value)
{
$resultadoPartido = $array[$key];
$idPartido = $array2[$key];

$sql = "INSERT INTO `resultado_fixture`(`id_resultado`, `resultado_final_partido`, `id_partido`, `fecha_fixture`) VALUES (null,'$resultadoPartido','$idPartido','$fechaFixture')";
    if (!($dbResult = mysqli_query($conn,$sql))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
        header("Location: resultado.php");
    }
}
}
?>