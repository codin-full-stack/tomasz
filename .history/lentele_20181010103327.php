<?php
include 'config.php';
include 'header.php';

$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);
?>


<div class="tableinfo">
<html>
<body>
<table>
  <tr>
    <th>Full name</th>
    <th>Age</th> 
    <th>Job Title</th>
    <th>Location</th>
  </tr>
  <tr>
    <td>user name</td>
    <td>Smith</td>
    <td>50</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>
</div>
</body>
</html>