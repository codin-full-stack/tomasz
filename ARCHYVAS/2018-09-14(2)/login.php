<?php include 'header.php' ?>
<div class="container">
    <form action="" method="POST">
        <label for="Username"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="upswd" required>
        <div class="mygtukas">
            <button type="submit">Prisijungti</button>
        </div>
    </form>
<form action="form.php" method="POST">
<button class="mygtukasReg" type="submit">Registruotis!</button>
</form>

<?php
// session_start();
// if (!empty($_POST)) {
//     $_SESSION = [
//         'uname' => $_POST['email'],
//         'upswd' => $_POST['upswd'],
//     ];
// }

$info2 = [
    'vard' => 'Vardas',
    'pavd' => 'Pavarde',
    'amz' => 'Amzius',
    'email' => 'E-mail',
    'miest' => 'Miestas',
    'miest' => 'Miestas',
    'lyt' => 'Lytis'
];

if (!empty($_POST)) {
    $fileName = $_POST['email'] . '.json';
    var_dump($fileName);
    loginU($fileName, $_POST);
}

// if(isset($_SESSION['uname'])){
//     header("location: index.php");
// }
?>

<?php include('footer.php')?>
