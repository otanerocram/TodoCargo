<?php

  require('settings.php');

  //echo $database['hostname']. $database['username']. $database['password']. $database['database']. $database['port'];
  
  $conexion = @new mysqli($database['hostname'], $database['username'], $database['password'], $database['database'], $database['port']);
  
  if ($conexion->connect_error){
	  die('Error de conexión: ' . $conexion->connect_error); 
  }

  $dayDate      = $_GET['dayDate'];
  $class_id     = $_GET['class_id'];
  $teacher_id   = $_GET['teacher_id'];


  $consulta="SELECT student_id FROM student WHERE class_id=$class_id;";
  // echo $consulta;
  $students     = array();

  $resultados = $conexion->query($consulta);

  if ($resultados->num_rows > 0){
    
    while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
      $students[]   = $row['student_id'];
    }

    $totalStudents  = count($students);

    for ($i = 0; $i< $totalStudents; $i++){
      $consulta   = "INSERT INTO `plex`.`report` (`dateTravel`, `student_id`, `class_id`, `teacher_id`, `upTimestamp`, `downTimestamp`) VALUES ('$dayDate', $students[$i], $class_id, $teacher_id, 0, 0);";

      $resultados = $conexion -> query($consulta);
    }

    echo "100";

  }else{
    echo "404";

  }
  $conexion->close(); //cerramos la conexión
?>