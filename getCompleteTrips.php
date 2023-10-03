<?php

include('./include/config/conexiondb.php');
  //header('Content-Type: application/json');
  $query = "SELECT * from trips";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($conexion));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    if($row['estado'] == "complete"){
      $json []= array (
          'reference' => $row['reference'], 
          'status' => $row['estado'],
          'fecha' => $row['fecha'],
          'area' => $row['servicearea'],
          'departure' => $row['departure'],
          'client' => $row['client'],
          'vessel' => $row['vessel']
        );
    }
    
  }
  echo json_encode($json);
  
?>