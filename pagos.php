<?php
include("barranavegacion.php");
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<link href="/monygol/css/style.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="https://monygol.000webhostapp.com/monygol/imagen/appiconoazul90.png" type="image/x-icon" />
		<title>MonyGol</title>	
</head>
    <body>
<div class="container">
        <div class="text-center">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <img src="https://monygol.000webhostapp.com/monygol/imagen/appiconoazul.png" alt="Balon de Oro" height="30%" width="30%">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <img src="https://monygol.000webhostapp.com/monygol/imagen/app_logo.png" alt="MonyGol" height="40%" width="40%">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="alert alert-info text-center">
            <strong>Usuarios que han pagado para participar.</strong>
        </div>
    </div>
<?php
include_once("dbconnectionfixture.php");
if(!($result = mysqli_query($conn,"SELECT * FROM registro_pago_usuarios"))){
echo "An error has occured : " . mysql_error();
}else{
echo "<table class='flat-table center-block'>
<tr>
<th></th>
<th></th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['usuario'] . "</td>";
  echo "<td>" . $row['fecha_fixture'] . "</td>";
  $registroPago = $row['registro_pago'];
  if(empty($registroPago)){
   echo "<td>No Pago</td>";
  }else{
   echo "<td>Pago " . $row['registro_pago'] . "</td>";
  } 
  echo "</tr>";
  }
    echo "<tr><td></td><td></td><td></td></tr>";
  echo "<tr><th></th><th></th><th></th></tr>";
 echo "</table>";
}
?>
 
</div><!-- /.container -->
        </body>
        </html>