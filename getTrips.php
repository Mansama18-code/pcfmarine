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
    if($row['estado'] == "pending"){
      $json []= array (
          'reference' => $row['reference'], 
          'status' => $row['estado'],
          'fecha' => $row['fecha'],
          'area' => $row['servicearea'],
          'departure' => $row['departure'],
          'cliente' => $row['client'],
          'vessel' => $row['vessel'],
          'place' => $row['place'],
          'rate' => $row['rate'],
          'arrival' => $row['arrival'],
          'launch' => $row['launch'],
          'captain' => $row['captain'],
          'autorized' => $row['autorized'], 
          'marine' => $row['marine'],
          'agent' => $row['agent']
        );
    }
    
  }
  echo json_encode($json);
  
?>