<?php
  //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(0);
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

  $oper           = isset($_POST["oper"])           ? utf8_decode($_POST['oper']) : "";
  $id             = isset($_POST["id"])             ? utf8_decode($_POST['id']) : "";
  
  $codigo         = isset($_POST["codigo"])         ? utf8_decode($_POST['codigo']) : "";
  $placa          = isset($_POST["placa"])          ? utf8_decode($_POST['placa']) : "";
  $marca          = isset($_POST["marca"])          ? utf8_decode($_POST['marca']) : "";
  $modelo         = isset($_POST["modelo"])         ? utf8_decode($_POST['modelo']) : "";
  $color          = isset($_POST["color"])          ? utf8_decode($_POST['color']) : "";
  $fechaFabricacion   = isset($_POST["fechaFabricacion"])   ? utf8_decode($_POST['fechaFabricacion']) : "";
  $seriemotor     = isset($_POST["seriemotor"])     ? utf8_decode($_POST['seriemotor']) : "";
  $seriechasis    = isset($_POST["seriechasis"])    ? utf8_decode($_POST['seriechasis']) : "";
  $certificadoMTC = isset($_POST["certificadoMTC"]) ? utf8_decode($_POST['certificadoMTC']) : "";
  $idGPS          = isset($_POST["idGPS"])          ? utf8_decode($_POST['idGPS']) : "";
  $soatEmpresa    = isset($_POST["soatEmpresa"])    ? utf8_decode($_POST['soatEmpresa']) : "";
  $soatCodigo     = isset($_POST["soatCodigo"])     ? utf8_decode($_POST['soatCodigo']) : "";
  $soatVigencia   = isset($_POST["soatVigencia"])   ? utf8_decode($_POST['soatVigencia']) : "";
  
  $consulta = "";

  $dbTable  = "vehiculos";

  $dbColumns  = " `codigo`,`placa`,`marca`,`modelo`,`color`,`fechaFabricacion`,`seriemotor`,`seriechasis`,`certificadoMTC`,`idGPS`,`soatEmpresa`,`soatCodigo`,`soatVigencia` ";
  $dbValues   = " '$codigo','$placa','$marca','$modelo','$color','$fechaFabricacion','$seriemotor','$seriechasis','$certificadoMTC','$idGPS','$soatEmpresa', '$soatCodigo', '$soatVigencia' ";

  if (strcmp($oper, "add") == 0){
    if (strcmp($id, "_empty") == 0){
      if (strcmp($codigo, "") != 0){
        $consulta="INSERT INTO `$dbTable` ( $dbColumns ) 
        VALUES ( $dbValues );"; 
      }
    }

  } else if (strcmp($oper, "edit") == 0){
    if (strcmp($id, $codigo) == 0){
      $consulta = "UPDATE `$dbTable` SET `codigo`='$codigo', `placa`='$placa', `marca`='$marca', `modelo`='$modelo',
      `color`='$color', `fechaFabricacion`='$fechaFabricacion', `seriemotor`='$seriemotor', `seriechasis`='$seriechasis', 
      `soatEmpresa`='$soatEmpresa', `soatCodigo`='$soatCodigo', `soatVigencia`='$soatVigencia'
      WHERE  `codigo`='$codigo';";
    } else {
      $consulta = "INSERT INTO `$dbTable` ( $dbColumns )
      VALUES ( $dbValues )
      ON DUPLICATE KEY UPDATE `codigo`=$codigo;";
    }

  } else if (strcmp($oper, "del") == 0){
    $consulta = "DELETE FROM `$dbTable` WHERE `codigo`='$id';";

  } else {
    $consulta = "SELECT * FROM `$dbTable`;";

  }
  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();

  if ($resultados){
    $reponseData[] = array(
      'statusCode'  => "OK",
      'query'       => utf8_encode($consulta)
    );
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
      'statusCode'  => "ERROR",
      'query'       => utf8_encode($consulta),
      'operation'   => $oper,
      'id'          => $id,
      'codigo'      => $codigo,
    );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>