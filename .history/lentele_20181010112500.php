<?php
include 'config.php';
include 'header.php';

$sql = "SELECT name, surename, email, age, city FROM users";
$result = mysqli_query($conn, $sql);
?>


<div class="tableinfo">
    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <html>
                <body>
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
                        <td>user name</td>
                        <td>44</td>
                        <td>Cotton slave</td>
                        <td>darkland</td>
                    </tr>
            </tbody>
            </table>
            </div>
            </body>
            </html>