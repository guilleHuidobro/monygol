<?php
include_once("dbconnectionfixture.php");
SESSION_START();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$sql = "DELETE FROM `fixture`";
    if (!($dbResult = mysqli_query($conn,$sql))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
$sql2= "DELETE FROM `predicciones_usuario`";
      if (!($dbResult = mysqli_query($conn,$sql2))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
$sql3= "DELETE FROM `registro_pago_usuarios`";
      if (!($dbResult = mysqli_query($conn,$sql3))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
$sql4= "DELETE FROM `resultado_fixture`";
       if (!($dbResult = mysqli_query($conn,$sql4))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
$sql5= "DELETE FROM `puntajes`";
      if (!($dbResult = mysqli_query($conn,$sql5))) {
        echo("Error description: " . mysqli_error($conn));
    } else {
        header("Location: addfixture.php");
    }
    }
    }
    }
    }
}
?>