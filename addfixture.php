<?php
include ("barranavegacion.php");
include_once ("dbconnection.php");
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
        var i = document.forms["fixtureform"]["fechaFixture"].value;
        if (i == null || i == "") {
        alert("Fecha Fixture no puede estar vacio");
        return false; 
        }
        var e = document.forms["fixtureform"]["local"].value;
        if ( e== null || e == "") {
        alert("Equipo Local no puede estar vacio");
        return false;
        }
        var f = document.forms["fixtureform"]["visita"].value;
        if (f == null || f == "") {
        alert("Equipo visitante no puede estar vacio");
        return false; 
        }
        var g = document.forms["fixtureform"]["escudoLocal"].value;
        if ( g== null || g == "") {
        alert("Escudo Local no puede estar vacio");
        return false;
        }
        var h = document.forms["fixtureform"]["escudoVisita"].value;
        if (h == null || h == "") {
        alert("Escudo Visitante no pouede estar vacio");
        return false; 
        }

    }
</script>
    </head>

    <body>
                <div class="container" id="container1">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">

                            <form role="form" name="borrarfechaform" id="borrarfechaform" action="accionborrarfecha.php" method="post">
<div class="alert alert-danger">
  <strong>CUIDADO!</strong> Este boton borra todos los datos necesarios para jugar, <strong>PRESIONAR SOLO SI EMPIEZA UNA NUEVA FECHA</strong>.
</div>
<button type="submit" class="btn btn-block btn-danger" >BORRAR</button>
</form>
                        </div>
                    </div>
                </div>

<!-- -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">


        <div class="" id="container1">
            <div class="row centered-form"">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Fixture</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" name="fixtureform" id="fixtureform" action="accionfixture.php" method="post" onsubmit="return validateForm()">
<div class='row'>
<div class='col-xs-6 col-sm-6 col-md-6'>
<div class='form-group'>
<select name="fechaFixture">
<option value="">Elegir N° Fecha</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
</select> 
            </div>
        </div>
                    </div>
                                <?php
include_once ("dbconnectionfixture.php");

if (!($result = mysqli_query($conn, "SELECT * FROM equipos"))) {
	echo "An error has occured : " . mysql_error();
}
else {
	echo "<div class='row'>";
	echo "<div class='col-xs-6 col-sm-6 col-md-6'>";
	echo "<div class='form-group'>";
	echo "<select name='local'>";
	echo "<option value=''>Equipo Local</option>";
	while ($row = mysqli_fetch_array($result)) {
		echo '<option value="' . $row["nombre_equipo"] . '">' . $row["nombre_equipo"] . '</option>';
	}

	echo "</select>";
	echo "</div>";
	echo "</div>";
}

if (!($result = mysqli_query($conn, "SELECT * FROM equipos"))) {
	echo "An error has occured : " . mysql_error();
}
else {
	echo "<div class='col-xs-6 col-sm-6 col-md-6'>";
	echo "<div class='form-group'>";
	echo "<select name='escudoLocal'>";
	echo "<option value=''>Escudo Local</option>";
	while ($row = mysqli_fetch_array($result)) {
		echo '<option value="' . $row["escudo"] . '">' . $row["nombre_equipo"] . '</option>';
	}

	echo "</select>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}

if (!($result = mysqli_query($conn, "SELECT * FROM equipos"))) {
	echo "An error has occured : " . mysql_error();
}
else {
	echo "<div class='row'>";
	echo "<div class='col-xs-6 col-sm-6 col-md-6'>";
	echo "<div class='form-group'>";
	echo "<select name='visita'>";
	echo "<option value=''>Equipo Visita</option>";
	while ($row = mysqli_fetch_array($result)) {
		echo '<option value="' . $row["nombre_equipo"] . '">' . $row["nombre_equipo"] . '</option>';
	}

	echo "</select>";
	echo "</div>";
	echo "</div>";
}

if (!($result = mysqli_query($conn, "SELECT * FROM equipos"))) {
	echo "An error has occured : " . mysql_error();
}
else {
	echo "<div class='col-xs-6 col-sm-6 col-md-6'>";
	echo "<div class='form-group'>";
	echo "<select name='escudoVisita'>";
	echo "<option value=''>Escudo Visita</option>";
	while ($row = mysqli_fetch_array($result)) {
		echo '<option value="' . $row["escudo"] . '">' . $row["nombre_equipo"] . '</option>';
	}

	echo "</select>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}

?>
                                    <button type="submit" class="btn btn-sample btn-block" >Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


				</div>
<!-- end first col -->
				<div class="col-md-6">

                <div class="" id="container1">
            <div class="row centered-form"">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
        <?php
include_once ("dbconnectionfixture.php");

if (!($result = mysqli_query($conn, "SELECT * FROM fixture"))) {
	echo "An error has occured : " . mysql_error();
}
else {
	echo "<table>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo '<td><img src="' . $row['escudo_local'] . '" alt="HTML5 Icon" style="width:25px;height:25px;margin-right:30px;"></td>';
		echo '<td style="width:250px">' . $row['equipo_local'] . '</td>';
		echo '<td style="width:250px">' . $row['equipo_visitante'] . '</td>';
		echo '<td><img src="' . $row['escudo_visita'] . '" alt="HTML5 Icon" style="width:25px;height:25px;margin-left:15px;"></td>';
		echo "</tr>";
	}

	echo "<tr><td></td><td></td><td></td><td></td></tr>";
	echo "<tr><th></th><th></th><th></th><th></th></tr>";
	echo "</table>";
}

?>
                        </div>
                    </div>
                </div>
            </div>
				</div>
<!--end second col -->
			</div>
		</div>
	</div>
</div>


<!-- -->

        

        </div>
    </body>

    </html>