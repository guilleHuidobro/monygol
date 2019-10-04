<?php
include("barranavegacion.php");
	if(!(isset($_SESSION['valid'])) || ($_SESSION['valid']!='1'))
	{
	header('location:login.php');
	exit();
	}
?>
<?php
include_once("dbconnectionfixture.php");
if(!($result = mysqli_query($conn,"SELECT * FROM `vida_de_fecha` WHERE 1 "))){
echo "An error has occured : " . mysqli_error();
}else{
$resultadoconsulta = mysqli_fetch_array($result);
$vidafecha = $resultadoconsulta['vida'];
$fecha = $resultadoconsulta['fecha_fixture'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link href="/monygol/css/style.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="/monygol/imagen/appiconoazul90.png" type="image/x-icon" />
		<title>MonyGol</title>	
	</head>
<body>
    <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">ON / OFF FECHA</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="fechaonoffform" id="ingresoform" method="post" action="acciononofffecha.php" >
                            <div class="form-group">
                                <input type="text" name="fecha" id="fecha" class="form-control input-sm" placeholder="Fecha">
                            </div>
<div class="form-group">
<?php
if($vidafecha == "False"){
           echo '<input type="hidden" name="vida" value="True">';
           echo '<button type="submit" class="btn btn-success btn-block" >ON fecha</button>';
}else{
           echo '<input type="hidden" name="vida" value="False">';
           echo '<button type="submit" class="btn btn-danger btn-block" >OFF fecha</button>';
}
?>
</div>
                        </form>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
<?php
if($vidafecha == "False"){
 echo '<img src="/monygol/imagen/relojRojoFilled-100.png"  width="100" height="100"> ';
}else{
 echo '<img src="/monygol/imagen/relojVerdeFilled-100.png"  width="100" height="100"> ';
}
?>
		</div>
		<div class="col-md-4">
		</div>
	</div>
<br>
<div class="container-fluid">
<div class="row">
		

<?php
if($vidafecha == "False"){
 echo '<div class="alert alert-danger">';
 echo 'Fecha :<strong> '.$fecha.' </strong> esta <strong>deshabilitada</strong>, se debe habilitar despues de conocer al ganador.';
 echo '</div>';
}else{
 echo '<div class="alert alert-success">';
 echo 'Fecha :<strong> '.$fecha.'</strong> esta <strong>habilitada</strong>, se puede jugar hasta que alguien la deshabilite, esto es antes que comience el primer partido de la fecha.';
 echo '</div>';
}
?>
		</div>

	</div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>