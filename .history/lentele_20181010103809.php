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
</table>
</div>
</body>
</html>