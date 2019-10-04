<?php
SESSION_START();
	if(!(isset($_SESSION['valid'])) || ($_SESSION['valid']!='1'))
	{
	header('location:login.php');
	exit();
	}else{
	$activo = true;
	}
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <link href="/monygol/css/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="/monygol/imagen/appiconoazul90.png" type="image/x-icon" />
        <title>MonyGol</title>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <body>
        <div class="navbar navbar-custom navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"> <img src="/monygol/imagen/app_logo.png" alt="Balon de Oro" height="50px" width="150px" style="margin-bottom: 0px; border-bottom-width: 0px; padding-bottom: 0px; padding-top: 0px; margin-top: -10px;"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">Consultas<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                                <li><a href='/monygol/puntajes.php'>Puntajes</a></li>
                                <li><a href='/monygol/pagos.php'>Pagos</a></li>
                                <li><a href='/monygol/vidafecha.php'>On/Off Fecha</a></li>
                            </ul>
                        </li>
                        <?php             
                if($activo){   
                echo "<li><a href='/monygol/resultado.php'>Resultado</a></li>";
                echo "<li><a href='/monygol/addfixture.php'>Fixture</a></li>";
                echo "<li><a href='/monygol/ingresopagocreditousuario.php'>Ingreso Creditos</a></li>";
                }
?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php             
                if(!$activo){ 
                echo "<li><a href=''><span class='glyphicon glyphicon-user'></span> Registrarse</a></li>";
                echo "<li><a href=''><span class='glyphicon glyphicon-log-in'span> Entrar</a></li>";
                }else{
                echo "<li><a href='/monygol/logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";
                }
?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
</body>
</html>