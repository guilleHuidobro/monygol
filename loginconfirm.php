<?php
include_once("dbconnection.php");
$mail=strtolower(trim($_POST['email']));
$pass=trim($_POST['pass']);
SESSION_START();
?>
<?php
if(($mail==!null)&&($pass==!null)){
    $userCheck="SELECT * FROM `registro_usuarios` WHERE email=\"$mail\" AND password=\"$pass\"" ;
        if(!($dbResult=mysqli_query($conn,$userCheck))){
	    echo"An error Has Occured".mysqli_error();
	}else{$dbcheck=mysqli_fetch_array($dbResult);
	        if($dbcheck[1]==$mail){
		    $_SESSION['valid']=1;
		    $_SESSION['afm']=$dbcheck[4];
		    $_SESSION['userid']=$dbcheck[0];
		    header("Location: pagos.php");                 
		}else{
		    header("Location: loginerror.php");
		}
	}
}else{
    header("Location: loginerror.php");
}
?>