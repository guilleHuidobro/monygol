<?php
include_once("dbconnectionfixture.php");
SESSION_START();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$sql = "INSERT INTO `fixture`(`id_partido`, `equipo_local`, `equipo_visitante`, `numero_fecha_afa`, `escudo_local`, `escudo_visita`) VALUES (null,'$_POST[local]','$_POST[visita]','$_POST[fechaFixture]','$_POST[escudoLocal]','$_POST[escudoVisita]')";
    if (!($dbResult = mysqli_query($conn,$sql))) {
        header("Location: loginerror.php");
    } else {
        header("Location: addfixture.php");
    }
    }else{
    echo "ESTAMOS CON ALGUNOS INCONVENIENTES";
    }
?>