<?php

  require('settings.php');

  //echo $database['hostname']. $database['username']. $database['password']. $database['database']. $database['port'];
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
	  die('Error de conexión: ' . $conexion->connect_error); 
  }

  $email      = $_GET['email'];
  $password   = $_GET['password'];

  $consulta="SELECT t.teacher_id,t.email,t.name, c.class_id,c.name AS plate
FROM teacher t, class c
WHERE t.teacher_id = c.teacher_id
AND t.email='$email' AND t.`password`='$password';";

  // echo $consulta;
  
  $resultados = $conexion->query($consulta);
  $loginData    = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $loginData[] = array(
        'teacher_id'  => utf8_encode($row['teacher_id']),
        'email'       => utf8_encode($row['email']),
        'name'        => utf8_encode($row['name']),
        'class_id'    => utf8_encode($row['class_id']),
        'plate'       => utf8_encode($row['plate'])

      );
    } 
    echo json_encode($loginData);

  }else{
    $loginData[] = array(
        'teacher_id'  => "",
        'email'       => "",
        'name'        => "",
        'class_id'    => "",
        'plate'       => ""
      );
	  echo json_encode($loginData);

  }
  $conexion->close(); //cerramos la conexión
?>