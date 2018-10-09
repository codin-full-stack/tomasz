<?php include 'config.php'; 
include 'header.php';
include 'sessionCheck.php';
?>
<?php

$sql = "SELECT id, name, surename, email, age, city, password, image, image_text, gender FROM users";
$result = mysqli_query($conn, $sql);
?>


<div class="allusers">
<?php if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="users-box">
                <div class="userbox-image-container">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="userbox-image" />
                </div>
                    <div class="userbox-info">
                    <h2 class="userbox-info-text">
                        <?php  echo "ID - </b>" . $row["id"]. "<br>" . 
                                    "Vardas: " . $row["name"]. "<br>" . 
                                    "Pavarde: " . $row["surename"]. "<br>" . 
                                    "Email: " . $row["email"]. "<br>" . 
                                    "Amzius: " . $row["age"]. "<br>" . 
                                    "Miestas: " . $row["city"]. "<br>" . 
                                    "Slaptazodis: " . $row["password"]. "<br>" . 
                                    "Lytis: " . $row["gender"]. "<br><br>";
                        }?>
                    </h2>
                    </div>
                    <?php } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);

                    ?>

            </div>
<?php
include 'footer.php';
?>