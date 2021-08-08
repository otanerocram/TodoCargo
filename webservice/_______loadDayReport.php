<?php

  require('settings.php');

  //echo $database['hostname']. $database['username']. $database['password']. $database['database']. $database['port'];
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
	  die('Error de conexión: ' . $conexion->connect_error); 
  }

  $dateTravel   = $_GET['dateTravel'];
  $class_id     = $_GET['class_id'];
  $teacher_id   = $_GET['teacher_id'];

  $consulta="SELECT r.dateTravel, s.student_id, s.name AS studentName, p.email AS parentEmail, p.name AS parentName, p.phone AS parentPhone, 
  r.upTimestamp, r.downTimestamp FROM student s, report r, parent p
  WHERE s.student_id = r.student_id AND
  s.class_id = r.class_id AND
  p.parent_id = s.parent_id AND
  r.dateTravel = '$dateTravel' AND
  s.class_id=$class_id AND
  r.teacher_id=$teacher_id ORDER BY s.name ASC LIMIT 300;";

  //echo $consulta;
  
  $resultados   = $conexion->query($consulta);
  $reponseData  = array();
  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $reponseData[] = array(
        'dateTravel'      => utf8_encode($row['dateTravel']),
        'student_id'      => utf8_encode($row['student_id']),
        'studentName'     => utf8_encode($row['studentName']),
        'parentEmail'     => utf8_encode($row['parentEmail']),
        'parentName'      => utf8_encode($row['parentName']),
        'parentPhone'     => utf8_encode($row['parentPhone']),
        'upTimestamp'     => utf8_encode($row['upTimestamp']),
        'downTimestamp'   => utf8_encode($row['downTimestamp'])
        );
    } 
    echo json_encode($reponseData);

  }else{
    $reponseData[] = array(
        'dateTravel'      => "",
        'student_id'      => "",
        'studentName'     => "",
        'parentEmail'     => "",
        'parentName'      => "",
        'parentPhone'     => "",
        'upTimestamp'     => "",
        'downTimestamp'   => ""
      );
	  echo json_encode($reponseData);

  }
  $conexion->close(); //cerramos la conexión
?>