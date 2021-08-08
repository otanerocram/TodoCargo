<?php
  header('Content-Type: text/html; charset=UTF-8');
  require('settings.php');
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
    die('Error de conexión: ' . $conexion->connect_error); 
  }

  $user       = isset($_GET["user"])?     utf8_decode($_GET['user']) : "";
  $password   = isset($_GET["password"])? utf8_decode($_GET['password']) : "";

  $consulta="SELECT `dni`, `nombre`, `telefono`, `agencia`, `email`, `rol` FROM usuarios 
  WHERE `dni`='$user' AND `password`='$password' LIMIT 1;";

  $resultados   = $conexion->query($consulta);
  $responseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $responseData[] = array(
        'dni'         => utf8_encode($row['dni']),
        'nombre'      => utf8_encode($row['nombre']),
        'telefono'    => utf8_encode($row['telefono']),
        'agencia'     => utf8_encode($row['agencia']),
        'email'       => utf8_encode($row['email']),
        'rol'         => utf8_encode($row['rol'])
      );
    }
    
    if (is_session_started() === FALSE) {
      session_start();   
      // Se crean las variables con los datos de la sesion actual
      $_SESSION["globalUsuarioDni"]       =   $responseData[0]['dni'];
      $_SESSION["globalUsuarioNombre"]    =   $responseData[0]['nombre'];
      $_SESSION["globalUsuarioTelefono"]  =   $responseData[0]['telefono'];
      $_SESSION["globalUsuarioAgencia"]   =   $responseData[0]['agencia'];
      $_SESSION["globalUsuarioEmail"]     =   $responseData[0]['email'];
      $_SESSION["globalUsuarioRol"]       =   $responseData[0]['rol'];
    }else{
      // echo "DNI: ". $_SESSION["globalUsuarioDni"];
    }
    
    echo json_encode($responseData);

  }else{
    $responseData[] = array(
      'dni'         => "none",
      'nombre'      => "",
      'telefono'    => "",
      'agencia'     => "",
      'email'       => "",
      'rol'         => ""
    );
	  echo json_encode($responseData);

  }
  $conexion->close(); //cerramos la conexión
?>