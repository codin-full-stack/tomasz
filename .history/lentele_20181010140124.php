<?php
include 'config.php';
include 'header.php';

$sql = "SELECT  id, name, surename, email, age, city FROM users";
$result = mysqli_query($conn, $sql);
?>

<div class="tableinfo">
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
                <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                <tr>      
                    <td>
                        <a href="selecteduser.php?ID=<?php echo $row['id']; ?>">
                            <?php echo $row['name'] . ' ' . $row['surename']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="selecteduser.php?ID=<?php echo $row['id']; ?>">    
                            <?php echo $row['age'];?>
                        </a>
                    </td>
                    <td>
                        <a href="selecteduser.php?ID=<?php echo $row['id']; ?>"> 
                            <?php echo $row['email'];?>
                        </a>
                    </td>
                    <td>
                        <a href="selecteduser.php?ID=<?php echo $row['id']; ?>">
                            <?php echo $row['city'];?>
                        
                        </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
        0 results
    <?php } ?>
</div>
