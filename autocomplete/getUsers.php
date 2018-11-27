<?php include 'config.php';

$duom = $_POST['term'];


$sql = "SELECT * FROM users where name like '%$duom%' or surename like '%$duom%'";
$result = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_array($result)) {
//     $returnedArray[] = $row['name'] . ' ' . $row['surename'];
// }
// $error[] = 'No results found';
// if(!empty($returnedArray)){
//     echo json_encode($returnedArray);
// } else {
//     echo json_encode($error);
// }

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        $returnedArray[] = $row['name'] . ' ' . $row['surename'];  
    }
} else {
    $returnedArray[] = 'No results found';        
}

echo json_encode($returnedArray);

exit;