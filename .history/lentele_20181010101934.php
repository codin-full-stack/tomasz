<?php
include 'config.php';
include 'header.php';

$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);
?>


<div class="tableinfo">
<table>
    <thead>
        <tr>
            <th>Items</th>
            <th scope="col">Yorkshire</th>
            <th scope="col">Lancashire</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Donuts</th>
            <td>3,000</td>
            <td>5,000</td>
        </tr>
        <tr>
            <th scope="row">Stationary</th>
            <td>18,000</td>
            <td>17,000</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th scope="row">Totals</th>
            <td>21,000</td>
            <td>22,000</td>
        </tr>
    </tfoot>
</table>