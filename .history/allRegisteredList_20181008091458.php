<?php include 'config.php'; 
include 'header.php';
include 'sessionCheck.php';
?>



<div class="allUsers">





<?php

$sql = "SELECT id, name, surename, email, age, city, password, image, image_text, gender FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"" width="200" height="200"/>';
        echo "ID - </b>" . $row["id"]. "<br>" . 
            "Vardas: " . $row["name"]. "<br>" . 
            "Pavarde: " . $row["surename"]. "<br>" . 
            "Email: " . $row["email"]. "<br>" . 
            "Amzius: " . $row["age"]. "<br>" . 
            "Miestas: " . $row["city"]. "<br>" . 
            "Slaptazodis: " . $row["password"]. "<br>" . 
            "Lytis: " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>

</div>
<?php
include 'footer.php';
?>