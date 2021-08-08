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

  $codigoEstado         = isset($_POST["codigoEstado"])?          utf8_decode($_POST['codigoEstado'])         : "NVO";
  $codigoRemitente      = isset($_POST["remiteCodigoCliente"])?   utf8_decode($_POST['remiteCodigoCliente'])  : "";
  $codigoDestinatario   = isset($_POST["destinoCodigoCliente"])?  utf8_decode($_POST['destinoCodigoCliente']) : "";
  $codigoUsuario        = isset($_POST["codigoUsuario"])?         utf8_decode($_POST['codigoUsuario'])        : "SYSTEM";
  $tipoServicio         = isset($_POST["tipoServicio"])?          utf8_decode($_POST['tipoServicio'])         : "";
  $agenciaOrigen        = isset($_POST["agenciaOrigen"])?         utf8_decode($_POST['agenciaOrigen'])        : "";
  $agenciaDestino       = isset($_POST["agenciaDestino"])?        utf8_decode($_POST['agenciaDestino'])       : "";
  $docAdjunto           = isset($_POST["docAdjunto"])?            utf8_decode($_POST['docAdjunto'])           : "";
  $recogeEn             = isset($_POST["recogeEn"])?              utf8_decode($_POST['recogeEn'])             : "";
  $formaPago            = isset($_POST["formaPago"])?             utf8_decode($_POST['formaPago'])            : "";
  $numBultos            = isset($_POST["numBultos"])?             utf8_decode($_POST['numBultos'])            : "";
  $pesoTotal            = isset($_POST["pesoTotal"])?             utf8_decode($_POST['pesoTotal'])            : "";
  $contenido            = isset($_POST["contenido"])?             utf8_decode($_POST['contenido'])            : "";
  $valorCarga           = isset($_POST["valorCarga"])?            utf8_decode($_POST['valorCarga'])           : "";
  $horaEntrega          = isset($_POST["horaEntrega"])?           utf8_decode($_POST['horaEntrega'])          : "";
  $cargoPorEnvio        = isset($_POST["cargoPorEnvio"])?         utf8_decode($_POST['cargoPorEnvio'])        : "";
  $cargoPorDelivery     = isset($_POST["cargoPorDelivery"])?      utf8_decode($_POST['cargoPorDelivery'])     : "";
  $precioSugerido       = isset($_POST["precioSugerido"])?        utf8_decode($_POST['precioSugerido'])       : "";
  $cargaTotalPagar      = isset($_POST["cargaTotalPagar"])?       utf8_decode($_POST['cargaTotalPagar'])      : "";
  $giroMonto            = isset($_POST["giroMonto"])?             utf8_decode($_POST['giroMonto'])            : "";
  $giroComision         = isset($_POST["giroComision"])?          utf8_decode($_POST['giroComision'])         : "";
  $giroTotal            = isset($_POST["giroTotal"])?             utf8_decode($_POST['giroTotal'])            : "";

  
  $fechaIngreso = time();
  $codigoEnvio = dechex($fechaIngreso);
  
  $consulta = "INSERT INTO `todocargo`.`envios` 
            (`codigoEnvio`, `codigoUsuario`, `fechaIngreso`, `codigoEstado`, `codigoRemitente`, `codigoDestinatario`, `tipoServicio`, `recogeEn`, `agenciaOrigen`, `agenciaDestino`, `docAdjunto`, `formPago`, `numBultos`, `pesoTotal`, `contenido`, `valorCarga`, `horaEntrega`, `cargoPorEnvio`, `cargoPorDelivery`, `precioSugerido`, `cargaTotalPagar`, `giroMonto`, `giroComision`, `giroTotal`) 
  VALUES ('$codigoEnvio', '$codigoUsuario', $fechaIngreso, '$codigoEstado', '$codigoRemitente', '$codigoDestinatario', '$tipoServicio', '$recogeEn', '$agenciaOrigen', '$agenciaDestino', '$docAdjunto', '$formaPago', $numBultos, $pesoTotal, '$contenido', $valorCarga, '$horaEntrega', $cargoPorEnvio, $cargoPorDelivery, $precioSugerido, $cargaTotalPagar, $giroMonto, $giroComision, $giroTotal);";
  
  $resultados   = $conexion->query($consulta);
  
  $reponseData  = array();
  if ($resultados){
    $reponseData[] = array(
        'statusCode'  => "OK",
        'codigoEnvio' => $codigoEnvio
    );
    
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'statusCode'  => "ERROR",
        'query'       => $consulta
    );
    echo json_encode($reponseData);

  }

  $conexion->close(); //cerramos la conexión
?>