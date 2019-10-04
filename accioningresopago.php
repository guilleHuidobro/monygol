<?php
include_once("dbconnectionfixture.php");
SESSION_START();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$sql = "INSERT INTO `cuenta_usuario`(`id_cuenta_usuario`, `usuario`, `deposito_usuario`, `deposito_app`, `saldo`)VALUES(null,'$_POST[email]','$_POST[cantidad]','0','0')";
    if (!($dbResult = mysqli_query($conn,$sql))) {
        header("Location: loginerror.php");
    } else {
        header("Location: ingresopagocreditousuario.php");
    }
}else{
echo "ESTAMOS CON ALGUNOS INCONVENIENTES";
}
?>