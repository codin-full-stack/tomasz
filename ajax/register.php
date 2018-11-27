<?php
include 'config.php';

$name    = $_POST['vrd'];
$surename = $_POST['pvd'];

if(empty($name && $surename)){
    $response = [
        'data'      => null,
        'message'   => 'fill all fields'
    ];
} else {
    $insertQuery = "INSERT into users (name, surename)
    values ('$name', '$surename')";
    
    if(mysqli_query($conn, $insertQuery)) {
        $response = [
            'data'      => $_POST,
            'message'   => 'Sekmingai uzregistruota!'
        ];
    } else {
        $response = [
            'data'      => null,
            'message'   =>  mysqli_error($conn)
        ];
    }
}

echo json_encode($response);
exit;