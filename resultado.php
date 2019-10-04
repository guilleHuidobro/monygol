<?php
include("barranavegacion.php");
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<form action="accionresultado.php" method="post">
<?php
include_once("dbconnectionfixture.php");
if(!($result = mysqli_query($conn,"SELECT * FROM fixture"))){
echo "An error has occured : " . mysql_error();
}else{
echo "<table class='flat-table center-block'>
<tr>
<th>N°</th>
<th>Eq. Local</th>
<th>Eq. Visitante</th>
<th>Resultado</th>
</tr>";
  echo "<tr>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td>Fecha N°:</td>";
  echo '<td><input type="text" name="fechaFixture" id="fechaFixture" class="form-control input-sm"></td>';
  echo "</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo '<td><input type="hidden" name="idPartido[]" value="' . $row['id_partido'] . '">' . $row['id_partido'] . '</td>';
  echo "<td>" . $row['equipo_local'] . "</td>";
  echo "<td>" . $row['equipo_visitante'] . "</td>";
  echo "<td><input type= 'text' name= 'resultado[]' id= 'resultado' class='form-control input-sm'></td>";
  echo "</tr>";
  }
    echo "<tr><td></td><td></td><td></td><td></td></tr>";
  echo "<tr><th></th><th></th><th></th><th></th></tr>";
 echo "</table>";
}
?>
            <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="text-center">
                <input name="submit" type="submit" value="Enviar" class="btn btn-sample">
            </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
            </div>
            </div>
            </form>
</body>
</html>