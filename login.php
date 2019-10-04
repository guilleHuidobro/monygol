<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link href="/monygol/css/style.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="https://monygol.000webhostapp.com/monygol/imagen/appiconoazul90.png" type="image/x-icon" />
		<title>MonyGol</title>	
			

	<style>
	div.a 
	{
    opacity: 0.6;
	font-size:70%	
	}  
     
	</style>
    <script>
    function validateForm()
    {
    
        var e = document.forms["loginform"]["email"].value;
        if ( e== null || e == "") {
        alert("El mail esta vacio");
        return false;
        }
        var f = document.forms["loginform"]["pass"].value;
        if (f == null || f == "") {
        alert("No hay password");
        return false; 
        }
    }
</script> 	

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
<body>
<div class="navbar navbar-custom navbar-static-top">
  <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> <img src="https://monygol.000webhostapp.com/monygol/imagen/app_logo.png" alt="Balon de Oro" height="50px" width="150px" 
                 style="margin-bottom: 0px; border-bottom-width: 0px; padding-bottom: 0px; padding-top: 0px; margin-top: -10px;"></a>
            </div>
        </div>
</div>
    <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Entrar</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="loginform" id="loginform" method="post" action="loginconfirm.php" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="pass" id="pass" class="form-control input-sm" placeholder="password">
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