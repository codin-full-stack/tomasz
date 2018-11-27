<?php include 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $returnedArray[] = [
        'ID'       => $row['id'],
        'name'     => $row['name'],
        'surename' => $row['surename']
    ];
}

echo json_encode($returnedArray);
exit;