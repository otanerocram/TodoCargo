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

  $codigoEnvio  = isset($_GET["codigoEnvio"])?  utf8_decode($_GET['codigoEnvio']) : "";
  $despachador  = isset($_GET["despachador"])?  utf8_decode($_GET['despachador']) : "";
  $fechaEntrega = time();

  $consulta="UPDATE envios SET codigoEstado='DESP', codigoUsuarioDesp='$despachador', fechaEntrega=$fechaEntrega WHERE codigoEnvio='$codigoEnvio';";

  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  
  if ($resultados){
    $reponseData[] = array(
        'statusCode'  => "OK"
    );
    echo json_encode($reponseData);
  }else{
    $reponseData[] = array(
        'statusCode'  => "ERROR"
    );
    echo json_encode($reponseData);
  }
  
  $conexion->close(); //cerramos la conexión
?>