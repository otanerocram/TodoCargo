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

  $dosUltDias   = time() - (86400 * 2);

  $agenciaOrigen  = isset($_GET["agenciaOrigen"])?  utf8_decode($_GET['agenciaOrigen'])   : "";
  $agenciaDestino = isset($_GET["agenciaDestino"])? utf8_decode($_GET['agenciaDestino'])  : "";
  $fechaIngreso   = isset($_GET["fechaIngreso"])?   $_GET['fechaIngreso']                 : $dosUltDias;
  $codigoEnvio    = isset($_GET["codigoEnvio"])?    utf8_decode($_GET['codigoEnvio'])     : "";
  $formPago       = isset($_GET["formPago"])?    utf8_decode($_GET['formPago'])     : "";

  $consulta="SELECT codigoEnvio, DATE_FORMAT(from_unixtime(fechaIngreso),'%d/%m/%Y') AS fecha, fechaIngreso, 
  IF (fechaEntrega > 0, DATE_FORMAT(from_unixtime(fechaEntrega),'%d/%m/%Y'), '-') AS fechaEntrega, 
  tipoServicio, codigoUsuarioDesp, recogeEn, agenciaOrigen, agenciaDestino, formPago, numBultos, pesoTotal,
  horaEntrega, cargaTotalPagar, giroMonto
  FROM envios 
  WHERE codigoEnvio LIKE '%$codigoEnvio%' 
  AND fechaIngreso >= $fechaIngreso
  AND codigoEstado='DESP' 
  AND agenciaOrigen LIKE '%$agenciaOrigen%' 
  AND agenciaDestino LIKE '%$agenciaDestino%'
  AND formPago LIKE '%$formPago%'
  ORDER BY fechaIngreso DESC 
  LIMIT 100;";
  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'codigoEnvio'         => utf8_encode($row['codigoEnvio']),
        'fecha'               => utf8_encode($row['fecha']),
        'fechaIngreso'        => utf8_encode($row['fechaIngreso']),
        'fechaEntrega'        => utf8_encode($row['fechaEntrega']),
        'tipoServicio'        => utf8_encode($row['tipoServicio']),
        'codigoUsuarioDesp'   => utf8_encode($row['codigoUsuarioDesp']),
        'recogeEn'            => utf8_encode($row['recogeEn']),
        'agenciaOrigen'       => utf8_encode($row['agenciaOrigen']),
        'agenciaDestino'      => utf8_encode($row['agenciaDestino']),
        'formPago'            => utf8_encode($row['formPago']),
        'numBultos'           => utf8_encode($row['numBultos']),
        'pesoTotal'           => utf8_encode($row['pesoTotal']),
        'horaEntrega'         => utf8_encode($row['horaEntrega']),
        'cargaTotalPagar'     => utf8_encode($row['cargaTotalPagar']),
        'giroMonto'           => utf8_encode($row['giroMonto'])
      );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
      'codigoEnvio'         => '',
      'fecha'               => '',
      'fechaIngreso'        => '',
      'fechaEntrega'        => '',
      'tipoServicio'        => '',
      'codigoUsuarioDesp'   => '',
      'recogeEn'            => '',
      'agenciaOrigen'       => '',
      'agenciaDestino'      => '',
      'formPago'            => '',
      'numBultos'           => '',
      'pesoTotal'           => '',
      'horaEntrega'         => '',
      'cargaTotalPagar'     => '',
      'giroMonto'           => ''
    );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>