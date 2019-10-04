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
    
        var e = document.forms["ingresoform"]["email"].value;
        if ( e== null || e == "") {
        alert("El mail esta vacio");
        return false;
        }
        var f = document.forms["ingresoform"]["cantidad"].value;
        if (f == null || f == "") {
        alert("La cantidad no puede estar vacia");
        return false; 
        }
    }
</script>

	</head>
<body>
    <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Ingresar Usuario y Cantidad</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="ingresoform" id="ingresoform" method="post" action="accioningresopago.php" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="cantidad" id="cantidad" class="form-control input-sm" placeholder="Cantidad">
                            </div>

                            <button type="submit" class="btn btn-sample btn-block" >Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>