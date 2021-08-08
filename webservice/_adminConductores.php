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

  $search       = isset($_GET["_search"])?      utf8_decode($_GET['_search']) : "false";
  $searchField  = isset($_GET["searchField"])?  utf8_decode($_GET['searchField']) : "";
  $searchString = isset($_GET["searchString"])? utf8_decode($_GET['searchString']) : "";
  $searchOper   = isset($_GET["searchOper"])?   utf8_decode($_GET['searchOper']) : "";

  $page   = $_GET['page']; // get the requested page
  $limit  = $_GET['rows']; // get how many rows we want to have into the grid
  $sidx   = $_GET['sidx']; // get index row - i.e. user click to sort
  $sord   = $_GET['sord']; // get the direction
  $total_pages = 0;

  $dbTable    = 'conductores';
  $dbColumns  = "dni,nombre,licencia,categoria,vigencia,direccion,telefono,movil,email";

  if(!$sidx) $sidx =1;

  $consultaCant   = "SELECT COUNT(*) AS 'filas' FROM $dbTable;";
  $resultados   = $conexion->query($consultaCant);
  $reponseData  = array();

  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $count = $row['filas'];
    }

    if( $count > 0 ) {
      $total_pages = ceil($count/$limit);
    } else {
      $total_pages = 0;
    }

    if ($page > $total_pages){
      $page   = $total_pages;
    }

    $start = $limit*$page - $limit; // do not put $limit*($page - 1)

    $consulta   = "";
    $eval = "";

    if (strcmp($search, "true") == 0){

      if (strcmp($searchOper, "eq") == 0){
        $eval   = "`$searchField`='$searchString'";
      } else if (strcmp($searchOper, "cn") == 0){
        $eval   = "`$searchField` LIKE '%$searchString%'";
      } else if (strcmp($searchOper, "ne") == 0){
        $eval   = "`$searchField` != '$searchString'";
      } else if (strcmp($searchOper, "bw") == 0){
        $eval   = "`$searchField` LIKE '$searchString%'";
      } else if (strcmp($searchOper, "ew") == 0){
        $eval   = "`$searchField` LIKE '%$searchString'";
      } else {
        $eval   = "";
      }

      $consulta = "SELECT $dbColumns FROM $dbTable
        WHERE $eval  ORDER BY $sidx $sord LIMIT $start , $limit;";

    } else {
      $consulta = "SELECT $dbColumns FROM $dbTable
        ORDER BY $sidx $sord LIMIT $start , $limit;";  
    }
    
    $resultados   = $conexion->query($consulta);
    
    if ($resultados->num_rows > 0){
      
      $response = new stdClass();
      $response -> page = $page;
      $response -> total = $total_pages;
      $response -> records = $count;
      $i=0;

      while($fila = $resultados->fetch_array(MYSQLI_ASSOC)){
        $response->rows[$i]['id']=$fila['dni'];
        $response->rows[$i]['cell']=array(utf8_encode($fila['dni']),utf8_encode($fila['nombre']),
          utf8_encode($fila['direccion']),utf8_encode($fila['licencia']),utf8_encode($fila['categoria']),
          utf8_encode($fila['vigencia']),utf8_encode($fila['telefono']),
          utf8_encode($fila['movil']),utf8_encode($fila['email']) );
        $i++;
      }

      echo json_encode($response);
      
    }

  }else{
    $reponseData[] = array(
      'dni'       => "",
      'nombre'    => "",
      'licencia'  => "",
      'categoria' => "",
      'vigencia'  => "",
      'direccion' => "",
      'telefono'  => "",
      'movil'     => "",
      'email'     => ""
    );
    echo json_encode($reponseData);

  }

  $conexion->close(); //cerramos la conexión
?>