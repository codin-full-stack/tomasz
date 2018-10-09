<?php include 'config.php'; 
include 'header.php';
include 'sessionCheck.php';
?>
<?php

$sql = "SELECT id, name, surename, email, age, city, password, image, image_text, gender FROM users";
$result = mysqli_query($conn, $sql);
?>

<div class="users">
    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="users-box">
                <div class="users-box-image-container">
                    <?php if (!empty($row['image'])){ ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="users-box-image" /></a>
                    <?php } ?>
                </div>
                <div class="users-box-info"> 
                    <h2 class="users-box-heading">
                        <?php
                            foreach ($row as $key -> )
                             echo "ID - </b>" . $row["id"]. "<br>" . 
                             "Vardas: " . $row["name"]. "<br>" . 
                             "Pavarde: " . $row["surename"]. "<br>" . 
                             "Email: " . $row["email"]. "<br>" . 
                             "Amzius: " . $row["age"]. "<br>" . 
                             "Miestas: " . $row["city"]. "<br>" . 
                             "Lytis: " . $row["gender"]. "<br><br>";
                        ?>               
                    </h2>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        0 results
    <?php } ?>
</div>

<?php
include 'footer.php';
?>