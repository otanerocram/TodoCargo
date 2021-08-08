<?php

  header('Content-Type: text/html; charset=UTF-8'); 
  require('settings.php');
  if (is_session_started() === FALSE) {
    session_start();   
  }

  // Verificamos que no se pueda acceder a esta función de forma directa
  if(!isset($_SESSION["globalUsuarioDni"])){
  echo "
  <head>
      <style>
        body{
          margin: 0px;
          background-color: #E6E6E6 !important;
        }
        #alertContainer{
          background-color: black;
          margin:0px;
          padding: 0px;
          position: fixed;
          width: 100%;
          height: 100%;
          overflow: auto;

        }
        #alertMessage{
          color: yellow;
          font-family: 'Verdana';
          font-size: 16px;
          text-align: center;
          position: absolute;
          width:50%;
          top:50%;
          left:25%;
        }
      </style>
    </head>";

    die("<div id='alertContainer'><div id='alertMessage'>No estás autorizado a ver esta página</div></div>"); 
  }

  //echo $database['hostname']. $database['username']. $database['password']. $database['database']. $database['port'];
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
	  die('Error de conexión: ' . $conexion->connect_error); 
  }

  $codCliente     = $_GET['codCliente'];
  
  $consulta="SELECT codigo, nombre, telefono, email, direccion, ciudad 
            FROM clientes WHERE codigo='$codCliente' LIMIT 1;";

  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'codigo'      => utf8_encode($row['codigo']),
        'nombre'      => utf8_encode($row['nombre']),
        'telefono'    => utf8_encode($row['telefono']),
        'email'       => utf8_encode($row['email']),
        'direccion'   => utf8_encode($row['direccion']),
        'ciudad'      => utf8_encode($row['ciudad'])
        );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'codigo'      => "",
        'nombre'      => "",
        'telefono'    => "",
        'email'       => "",
        'direccion'   => "",
        'ciudad'      => ""
      );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>