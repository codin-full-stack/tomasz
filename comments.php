<?php
include 'config.php';
?>

<?php
$sql = "SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$uID=$data['id']
?>

<div class="comment">
    <form method="POST">
    <input type="text" name="kname" value="<?php echo (! empty($data['name']) ? $data['name'] : ''); ?>">
    <textarea rows="4" cols="40" name="comment" id="comment" placeholder="Komentaras" required></textarea>
    <button type="submit">Komentuoti</button>
</div>



<?php
if(isset($_POST) & !empty($_POST)){
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $name = mysqli_real_escape_string($conn, $_POST['kname']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    if ($name==($data['name'])) {
    $isql = "INSERT INTO comments (name, post_id, user_id, comment) VALUES ('$name', '$ID', '$uID', '$comment')";
    $iresult = mysqli_query($conn, $isql);
    } else {
        $isql = "INSERT INTO comments (name, post_id, comment) VALUES ('$name', '$ID', '$comment')";
        $iresult = mysqli_query($conn, $isql); 
    }
}

?>
