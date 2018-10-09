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
                        <div class="userbox-heading">
                        <?php  echo "ID - </b>" . $row["id"]. "<br>" . 
                                    "Vardas: " . $row["name"]. "<br>" . 
                                    "Pavarde: " . $row["surename"]. "<br>" . 
                                    "Email: " . $row["email"]. "<br>" . 
                                    "Amzius: " . $row["age"]. "<br>" . 
                                    "Miestas: " . $row["city"]. "<br>" . 
                                    "Slaptazodis: " . $row["password"]. "<br>" . 
                                    "Lytis: " . $row["gender"]. "<br><br>";
                        }
                    } else {
                        //
                    } mysqli_close($conn);?>
                        </div>
                    <div>
</div>
<?php
include 'footer.php';
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
                <div class="users-box-title"> 
                    <h2 class="users-box-heading">
                        <?php
                             echo "ID - </b>" . $row["id"]. "<br>" . 
                             "Vardas: " . $row["name"]. "<br>" . 
                             "Pavarde: " . $row["surename"]. "<br>" . 
                             "Email: " . $row["email"]. "<br>" . 
                             "Amzius: " . $row["age"]. "<br>" . 
                             "Miestas: " . $row["city"]. "<br>" . 
                             "Slaptazodis: " . $row["password"]. "<br>" . 
                             "Lytis: " . $row["gender"]. "<br><br>";
                        ?>
                           
                    </h2>
                </div>
                    
                        <?php
                                // echo $row['title'];
                                // echo $str . "<a href='post.php?ID={$post['post_id']}'>Read more</a>";   
                                // if($_SESSION['id']===$row['user_id']) {
                                //     echo "<a href='post_edit.php?ID={$row['post_id']}'>Edit</a>";
                                //     echo "<a href='post_delete.php?ID={$row['post_id']}'>Delete</a>";
                                // } 
                                // $check=$row["user_id"];
                                // $sql2="select * from users where id = '$check'";
                                // $result2=mysqli_query($conn, $sql2);
                                // $roww=mysqli_fetch_assoc($result2);
                                // echo "Posted by: " . $roww['name'];
                                // echo "<i>Posted</i>: " . $row['date'];
                        ?>
            </div>
        <?php } ?>
    <?php } else { ?>
        0 results
    <?php } ?>
</div>
