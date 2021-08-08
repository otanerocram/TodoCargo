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
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
	  die('Error de conexión: ' . $conexion->connect_error); 
  }

  $codigoEnvio        = isset($_GET["codigoEnvio"])?        utf8_decode($_GET['codigoEnvio']) : "";
  $fechaIngreso       = isset($_GET["fechaIngreso"])?       utf8_decode($_GET['fechaIngreso']) : "";
  $codigoDestinatario = isset($_GET["codigoDestinatario"])? utf8_decode($_GET['codigoDestinatario']) : "";
  $agenciaOrigen      = isset($_GET["agenciaOrigen"])?      utf8_decode($_GET['agenciaOrigen']) : "";

  $consulta="SELECT codigoEnvio, DATE_FORMAT(from_unixtime(fechaIngreso),'%d/%m/%Y') AS fecha, 
  codigoEstado, codigoDestinatario, agenciaOrigen, agenciaDestino, formPago, recogeEn, fechaIngreso
  FROM envios
  WHERE fechaIngreso >= $fechaIngreso
  AND codigoEnvio LIKE '%$codigoEnvio%'
  AND codigoDestinatario LIKE '%$codigoDestinatario%'
  AND agenciaOrigen LIKE '%$agenciaOrigen'
  ORDER BY fechaIngreso DESC
  LIMIT 10;";

  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'codigoEnvio'         => utf8_encode($row['codigoEnvio']),
        'fecha'               => utf8_encode($row['fecha']),
        'codigoEstado'        => utf8_encode($row['codigoEstado']),
        'codigoDestinatario'  => utf8_encode($row['codigoDestinatario']),
        'agenciaOrigen'       => utf8_encode($row['agenciaOrigen']),
        'agenciaDestino'      => utf8_encode($row['agenciaDestino']),
        'formPago'            => utf8_encode($row['formPago']),
        'recogeEn'            => utf8_encode($row['recogeEn']),
        'fechaIngreso'        => utf8_encode($row['fechaIngreso'])
      );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'codigoEnvio'         => "",
        'fechaIngreso'        => "",
        'codigoEstado'        => "",
        'codigoDestinatario'  => "",
        'agenciaOrigen'       => "",
        'agenciaDestino'      => "",
        'formPago'            => "",
        'recogeEn'            => "",
        'timestamp'           => "",
      );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>