<?php
include_once("dbconnection.php");
SESSION_START();
    $sql = "INSERT INTO `pharmacists`(`idp`,`email`,`password`,`fullname`,`phonenumber`) VALUES (null,'$_POST[email]','$_POST[pass]','$_POST[usuario]','$_POST[fono]')";
    if (!($dbResult = mysql_query($sql, $dbcon))) {
        header("Location: loginerror.php");
    } else {
        header("Location: login.php");
    }
?>