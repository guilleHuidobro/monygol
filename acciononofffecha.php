<?php
include_once("dbconnectionfixture.php");
SESSION_START();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sqlDelete = "DELETE FROM `vida_de_fecha`";
    if (!($dbResult = mysqli_query($conn, $sqlDelete))) {
        header("Location: loginerror.php");
    } else {
        $sql = "INSERT INTO `vida_de_fecha`(`id_vida_de_fecha`, `vida`, `fecha_fixture`)VALUES(null,'$_POST[vida]','$_POST[fecha]')";
        if (!($dbResult = mysqli_query($conn, $sql))) {
            header("Location: loginerror.php");
        } else {
            header("Location: vidafecha.php");
        }
    }
} else {
    echo "ESTAMOS CON ALGUNOS INCONVENIENTES";
}
?>