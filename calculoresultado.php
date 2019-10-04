<?php
include_once("dbconnectionfixture.php");
SESSION_START();
$puntos            = 0;
$prediccionUsuario = array();
$resultadoFecha    = array();

$sql = "SELECT * FROM `resultado_fixture` WHERE `fecha_fixture` ='$_POST[fechaFixture]'";
if (!($dbResultado = mysqli_query($conn, $sql))) {
    header("Location: loginerror.php");
} else { //$dbResultado
    while ($row = mysqli_fetch_array($dbResultado)) {
        $resultadoFecha[] = $row;
    }
    $sql = "SELECT * FROM `predicciones_usuario` WHERE `fecha_fixture` =(SELECT numero_fecha_afa FROM fixture LIMIT 1)";
    if (!($dbPrediccionUsuario = mysqli_query($conn, $sql))) {
        header("Location: loginerror.php");
    } else { //$dbPrediccionUsuario
        
        for ($i = 0; $i < count($resultadoFecha); $i++) {
            $all_resultadoFecha[] = $resultadoFecha[$i]['id_partido'];
        }
        
        $contador   = 0;
        $puntos     = 0;
        $usuario    = "";
        $prediccion = "";
        while ($rowPredUser = mysqli_fetch_array($dbPrediccionUsuario)) {
            $usuario    = $rowPredUser['usuario'];
            $prediccion = $rowPredUser['resultado'];
            $idPartido  = $rowPredUser['id_partido'];
            for ($i = 0; $i < count($resultadoFecha); $i++) {
                if ($resultadoFecha[$i]['id_partido'] == $idPartido) {
                    if ($resultadoFecha[$i]['resultado_final_partido'] == $prediccion) {
                        $puntos++;
                    }
                    $contador++;
                    if ($contador == 14) {
         		$sqlPuntaje = "INSERT INTO `puntajes`(`id_puntajes`, `fecha_fixture`, `puntaje`, `usuario`) VALUES           (null,'$_POST[fechaFixture]','$puntos','$usuario')";
    if (!($send = mysqli_query($conn,$sqlPuntaje))) {
      header("Location: loginerror.php");
    }else{
    header("Location: puntajes.php");
    }
                        $contador = 0;
                        $puntos   = 0;
                    }
                }
            }
        }
    } //$dbPrediccionUsuario
} //$dbResultado
?>