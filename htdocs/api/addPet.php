<?php

include 'db_connection.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$request_body = file_get_contents('php://input');
$date = json_decode($request_body);


$petName = $data->petName; //->names is keyavluepair we saved in the payload, decouling this from json array
$petSpecie = $data->petSpecie;
$gender = $data->gender;
$age = $data->age;
$petMicroId = $data->petMicroId;
$ownerId = $data->ownerId;
$origin = $data->origin;
$destination = $data->destination;
echo($petName, $petMicroId, $ownerId, $origin, $destination);
// console.log($data);

// echo $names, $email;
// run sql query
$sql = INSERT INTO petData (petSpecie,gender, age, petMicroId, ownerId, origin,destination) VALUES ('Yorkshire Terrier', 'F', '7', 'twinkles1', '9603260052081', 'Cape Town', 'Pretoria');

    $result = mysqli_query($conn, $sql);

    if(!$result){
    echo ('Error Description:' . mysqli_error($conn));
    }
?>
