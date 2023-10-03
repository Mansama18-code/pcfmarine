<?php

include('./include/config/conexiondb.php');

if(isset($_POST['cliente'])) {
    //echo $_POST['reference'] . ', ' . $_POST['client'];
    $trip_reference = $_POST['reference'];
    $trip_client = $_POST['cliente'];
    $locations = $_POST['location'];
    $fecha = $_POST ['fecha'];
    $vessel = $_POST ['barquito'];
    $service = $_POST ['service'];
    $rate = $_POST ['rate'];
    $salida = $_POST ['departure'];
    $llegada = $_POST ['arrival'];
    $agent = $_POST ['agent'];
    $fumigator = $_POST ['fumigator'];
    $launch = $_POST ['launch'];
    $captain = $_POST ['captain'];
    $authorize = $_POST ['authorize'];
    $marine = $_POST ['marine'];
   
    $query = "UPDATE trips SET estado = 'pending', reference= '$trip_reference', place = '$locations', client ='$trip_client', fecha= '$fecha', vessel= '$vessel', rate = '$rate', servicearea = '$service', departure = '$salida', arrival='$llegada', agent='$agent', fumigator='$fumigator', launch='$launch' , captain='$captain', autorized='$authorize', marine='$marine' WHERE reference = '$trip_reference' ";

    $result = mysqli_query($conexion, $query);
  
    if (!$result) {
      die('Query Failed.');
    }
  
    echo "Task Edited Successfully";  
  
  }
?>