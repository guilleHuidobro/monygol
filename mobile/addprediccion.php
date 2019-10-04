<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){     
		//Importing our db connection script
		require_once('dbConnect.php');
		//Getting values
                $numero = count($_POST);
                $llaves = array_keys($_POST);
                $valores = array_values($_POST);
                for($j=0;$j<$numero;$j++){
                   if($llaves[$j] == "fecha"){
                      $fecha = $valores[$j];
                   }else if($llaves[$j] == "usuario"){
                      $usuario = $valores[$j];
                   }
                } 
                for($i=0;$i<$numero;$i++){
                if($llaves[$i] == "fecha" || $llaves[$i] == "usuario"){
                   continue;
                }else{
                    $key = json_encode($llaves[$i]);
                    $value = $valores[$i];
                }
                //Creating an sql query
		$sql = "INSERT INTO predicciones_usuario(fecha_fixture,id_partido,resultado,usuario) VALUES ('$fecha','$key','$value','$usuario')";			
	        //Executing query to database
		if(mysqli_query($conn,$sql)){
		   echo 'Prediccion guardada';
		}else{
	           echo 'Sucedio un error';
		}
		
                }
		//Closing the database 
		mysqli_close($conn);
	}