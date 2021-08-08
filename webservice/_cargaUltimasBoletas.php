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

  $agencia        = isset($_GET["agencia"])?      $_GET['agencia'] : "LIM";
  $fechaBoleta    = isset($_GET["fechaBoleta"])?  $_GET['fechaBoleta'] : 0;
  $limit          = isset($_GET["limit"])?        $_GET['limit'] : 10;

  $consulta = "SELECT codigoBoleta, fechaBoleta, DATE_FORMAT(from_unixtime(fechaBoleta),'%d/%m/%Y') AS fecha, 
  codigoCliente, nombreCliente, total, estado, codigoAgencia
  FROM boletas
  WHERE codigoAgencia LIKE '%$agencia'
  AND fechaBoleta >= $fechaBoleta
  ORDER BY codigoBoleta DESC
  LIMIT $limit;";
  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'codigoBoleta'        => utf8_encode($row['codigoBoleta']),
        'fechaBoleta'         => utf8_encode($row['fechaBoleta']),
        'fecha'               => utf8_encode($row['fecha']),
        'codigoCliente'       => utf8_encode($row['codigoCliente']),
        'nombreCliente'       => utf8_encode($row['nombreCliente']),
        'total'               => utf8_encode($row['total']),
        'estado'              => utf8_encode($row['estado']),
        'codigoAgencia'       => utf8_encode($row['codigoAgencia'])
      );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'codigoBoleta'        => "",
        'fechaBoleta'         => "",
        'fecha'               => "",
        'codigoCliente'       => "",
        'nombreCliente'       => "",
        'total'               => "",
        'estado'              => "",
        'codigoAgencia'       => ""
      );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>