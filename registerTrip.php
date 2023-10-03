<?php

include('./include/config/conexiondb.php');
//var_dump($_POST);
//Obtener data
/*$client = $_POST['client'];
$locations = $_POST['locations'];
$fecha = $_POST ['fecha'];
$vessel = $_POST ['vessel'];
$service = $_POST ['service'];
$rate = $_POST ['rate'];
$salida = $_POST ['hora-salida'];
$llegada = $_POST ['hora-llegada'];
$agent = $_POST ['agent'];
$fumigator = $_POST ['fumigator'];
$launch = $_POST ['launch'];
$captain = $_POST ['captain'];
$authorize = $_POST ['authorize'];
$marine = $_POST ['marine'];
$reference = $_POST['reference'];

$insertar_SQL = "INSERT INTO trips (estado, reference, client, place, fecha, vessel, rate, servicearea, departure, arrival, agent, fumigator, launch, captain, autorized, marine) 
                        VALUES ('pending','$reference','$client','$locations','$fecha', '$vessel', '$rate', '$service', '$salida', '$llegada', '$agent', '$fumigator', '$launch', '$captain', '$authorize', '$marine')";


$insertarPhp = mysqli_query($conexion, $insertar_SQL);

if($insertarPhp){

        
    //header ('refresh: 0, url=pending.php');
   echo "¡LA BASE DE DATOS DE LA CONF, HA SIDO ACTUALIZADA!";

} else {

    echo "¡NO SE INGRESAR LOS DATOS A LA BASE DE DATOS!";

}*/

if(isset($_POST['cliente'])) {
    echo $_POST['reference'] . ', ' . $_POST['cliente'];
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
   
    $query = "INSERT INTO trips (estado, reference, client, place, fecha, vessel, rate, servicearea, departure, arrival, agent, fumigator, launch, captain, autorized, marine) 
    VALUES ('pending','$trip_reference','$trip_client','$locations','$fecha', '$vessel', '$rate', '$service', '$salida', '$llegada', '$agent', '$fumigator', '$launch', '$captain', '$authorize', '$marine')";

    $result = mysqli_query($conexion, $query);
  
    if (!$result) {
      die('Query Failed.');
    }
  
    echo "Task Added Successfully";  
  
  }
?>