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

  $codigoEnvio        = isset($_GET["codigoEnvio"])?        utf8_decode($_GET['codigoEnvio']) : "1234";

  $consulta="SELECT `codigoEnvio`, `fechaIngreso`, DATE_FORMAT(from_unixtime(`fechaIngreso`),'%d/%m/%Y') AS fechaIngresoStr,  
  `codigoEstado`, `codigoRemitente`, `codigoDestinatario`, `codigoUsuario`, 
  `fechaEntrega`, DATE_FORMAT(from_unixtime(`fechaEntrega`),'%d/%m/%Y') AS fechaEntregaStr, 
  `codigoUsuarioDesp`, `tipoServicio`, `recogeEn`, `agenciaOrigen`, `agenciaDestino`, 
  `docAdjunto`, `formPago`, `numBultos`, `pesoTotal`, `contenido`, `valorCarga`, 
  `horaEntrega`, `cargoPorEnvio`, `cargoPorDelivery`, `precioSugerido`, 
  `cargaTotalPagar`, `giroMonto`, `giroComision`, `giroTotal`
  FROM envios
  WHERE codigoEnvio IN ('$codigoEnvio')
  LIMIT 1;";

  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'codigoEnvio'         => utf8_encode($row['codigoEnvio']),
        'fechaIngreso'        => utf8_encode($row['fechaIngreso']),
        'fechaIngresoStr'     => utf8_encode($row['fechaIngresoStr']),
        'codigoEstado'        => utf8_encode($row['codigoEstado']),
        'codigoRemitente'     => utf8_encode($row['codigoRemitente']),
        'codigoDestinatario'  => utf8_encode($row['codigoDestinatario']),
        'codigoUsuario'       => utf8_encode($row['codigoUsuario']),
        'fechaEntrega'        => utf8_encode($row['fechaEntrega']),
        'fechaEntregaStr'     => utf8_encode($row['fechaEntregaStr']),
        'codigoUsuarioDesp'   => utf8_encode($row['codigoUsuarioDesp']),
        'tipoServicio'        => utf8_encode($row['tipoServicio']),
        'recogeEn'            => utf8_encode($row['recogeEn']),
        'agenciaOrigen'       => utf8_encode($row['agenciaOrigen']),
        'agenciaDestino'      => utf8_encode($row['agenciaDestino']),
        'docAdjunto'          => utf8_encode($row['docAdjunto']),
        'formPago'            => utf8_encode($row['formPago']),
        'numBultos'           => utf8_encode($row['numBultos']),
        'pesoTotal'           => utf8_encode($row['pesoTotal']),
        'contenido'           => utf8_encode($row['contenido']),
        'valorCarga'          => utf8_encode($row['valorCarga']),
        'horaEntrega'         => utf8_encode($row['horaEntrega']),
        'cargoPorEnvio'       => utf8_encode($row['cargoPorEnvio']),
        'cargoPorDelivery'    => utf8_encode($row['cargoPorDelivery']),
        'precioSugerido'      => utf8_encode($row['precioSugerido']),
        'cargaTotalPagar'     => utf8_encode($row['cargaTotalPagar']),
        'giroMonto'           => utf8_encode($row['giroMonto']),
        'giroComision'        => utf8_encode($row['giroComision']),
        'giroTotal'           => utf8_encode($row['giroTotal']),
        'origen'              => utf8_encode($row['origen']),
        'destino'             => utf8_encode($row['destino']),
        'remite'              => utf8_encode($row['remite']),
        'remiteDir'           => utf8_encode($row['remiteDir']),
        'remiteCiudad'        => utf8_encode($row['remiteCiudad']),
        'remiteTel'           => utf8_encode($row['remiteTel']),
        'remiteEmail'         => utf8_encode($row['remiteEmail']),
        'consignado'          => utf8_encode($row['consignado']),
        'consignadoDir'       => utf8_encode($row['consignadoDir']),
        'consignadoCiudad'    => utf8_encode($row['consignadoCiudad']),
        'consignadoTel'       => utf8_encode($row['consignadoTel']),
        'consignadoEmail'     => utf8_encode($row['consignadoEmail'])
      );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'codigoEnvio'         => '',
        'fechaIngreso'        => '',
        'fechaIngresoStr'     => '',
        'codigoEstado'        => '',
        'codigoRemitente'     => '',
        'codigoDestinatario'  => '',
        'codigoUsuario'       => '',
        'fechaEntrega'        => '',
        'fechaEntregaStr'        => '',
        'codigoUsuarioDesp'   => '',
        'tipoServicio'        => '',
        'recogeEn'            => '',
        'agenciaOrigen'       => '',
        'agenciaDestino'      => '',
        'docAdjunto'          => '',
        'formPago'            => '',
        'numBultos'           => '',
        'pesoTotal'           => '',
        'contenido'           => '',
        'valorCarga'          => '',
        'horaEntrega'         => '',
        'cargoPorEnvio'       => '',
        'cargoPorDelivery'    => '',
        'precioSugerido'      => '',
        'cargaTotalPagar'     => '',
        'giroMonto'           => '',
        'giroComision'        => '',
        'giroTotal'           => '',
        'origen'              => '',
        'destino'             => '',
        'remite'              => '',
        'remiteDir'           => '',
        'remiteCiudad'        => '',
        'remiteTel'           => '',
        'remiteEmail'         => '',
        'consignado'          => '',
        'consignadoDir'       => '',
        'consignadoCiudad'    => '',
        'consignadoTel'       => '',
        'consignadoEmail'     => '',
      );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>