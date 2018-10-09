
<?php 
include 'config.php';
include 'header.php'; 
?>


<div class="userinfo">
    <?php if (isset($_SESSION['id'])) {
            $search_value=$_SESSION["id"];
            $sql="select * from users where id like '%$search_value%'";
            $res=$conn->query($sql); ?>
          <?php  while($row=$res->fetch_assoc()){ ?>
            <div class="userinfo-box">
                <div class="user-box-image-container">
                    <?php if (!empty($row['image'])){ ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="users-box-image" /></a>
                    <?php } ?>
                </div>
                <div class="users-box-info"> 
                    <h2 class="users-box-heading">
                        <?php
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