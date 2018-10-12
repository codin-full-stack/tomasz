<?php
include 'config.php';
include 'header.php';

$sql = "SELECT name, surename, email, age, city FROM users";
$result = mysqli_query($conn, $sql);
?>

<div class="tableinfo">
    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Full name</th>
                        <th>Age</th> 
                        <th>Job Title</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $row['name'] . $row['surename']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['city']?></td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
</div>