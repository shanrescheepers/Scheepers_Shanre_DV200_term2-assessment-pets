<?php

    include 'db_connection.php';
    header( "Access-Control-Allow-Origin: * " );
    header( "Access-Control-Allow-Headers: * ");
    // header('Access-Control-Allow-Origin', 'localhost:3000');
    // header(
    //     'Access-Control-Allow-Headers',
    //     'Origin, X-Requested-With, Content-Type, Accept'
    //   );

    $request_body = file_get_contents('php://input');
    $date = json_decode($request_body);


    $petName = $data->petName; //->names is keyavluepair we saved in the payload, decouling this from json array
    $petSpecie = $data->petSpecie;
    $gender = $data->gender;
    $age = $data->age;
    $petMicroId = $data->petMicroId;
    $owner = $date-> owner;
    $ownerId = $data->ownerId;
    $origin = $data->origin;
    $destination = $data->destination;
   
    // console.log($data);

    // run sql query
    $sql = INSERT INTO petData (petName, petSpecie, gender, age, petMicroId, owner, ownerId, origin, destination) VALUES (NULL,'$petName', `$petSpecie`, `$gender`, `$age`, `$petMicroId`, `$owner`,`$ownerId`, `$origin`, `$destination`);
    
    $result = mysqli_query($conn, $sql);

    if(!$result){
    echo ('Problem occured!' . mysqli_error($conn));
    } else {
        echo("Pets in Expawts added successfully!")
    }
?>
