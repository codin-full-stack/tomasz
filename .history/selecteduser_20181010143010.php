<?php
include 'config.php';
include 'header.php';
?>


<div class="userinfo">
<?php if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM users where id='$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); ?>
        <div class="userinfo-box">
            <div class="userinfo-box-image-container">
                <?php if (!empty($row['image'])){ ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="userinfo-box-image" /></a>
                <?php } ?>
        "Vardas: " . $row["name"]. "<br>" . 
        "Pavarde: " . $row["surename"]. "<br>" . 
        "Email: " . $row["email"]. "<br>" . 
        "Amzius: " . $row["age"]. "<br>" . 
        "Miestas: " . $row["city"]. "<br>" . 
        "Lytis: " . $row["gender"]. "<br><br>";
    } else {
        header('Location: index.php');
    }
?>
</div>
</form>
