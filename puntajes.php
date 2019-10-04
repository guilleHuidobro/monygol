<?php
include("barranavegacion.php");
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<link href="/monygol/css/style.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="/monygol/imagen/appiconoazul90.png" type="image/x-icon" />
		<title>MonyGol</title>	

    <script>
    function validateForm()
    {
        var e = document.forms["resultform"]["fechaFixture"].value;
        if ( e== null || e == "") {
        alert("Fecha Fixture no puede estar vacio");
        return false;
        }

    }
</script>
</head>
    <body>
<div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Ingresar Fecha a calcular</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="resultform" id="resultform" method="post" action="calculoresultado.php" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="text" name="fechaFixture" id="fechaFixture" class="form-control input-sm">
                            </div>
                            <button type="submit" class="btn btn-sample btn-block" >Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once("dbconnectionfixture.php");
if(!($result = mysqli_query($conn,"SELECT * FROM `puntajes` ORDER BY `puntaje` DESC"))){
echo "An error has occured : " . mysqli_error();
}else{
echo "<table class='flat-table center-block'>
<tr>
<th>Usuario</th>
<th>Fecha</th>
<th>Puntos</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['usuario'] . "</td>";
  echo "<td>" . $row['fecha_fixture'] . "</td>";
  echo "<td>" . $row['puntaje'] . "</td>";
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