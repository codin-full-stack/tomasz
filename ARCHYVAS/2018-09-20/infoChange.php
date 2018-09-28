<?php
include 'header.php';
include 'config.php';
include 'sessionCheck.php';
?>

<h2>ESAMA VARTOTOJO INFORMACIJA:</h2>

<?php
if (isset($_SESSION['email'])) {
    $search_value=$_SESSION["email"];
    $sql="select * from users where email like '%$search_value%'";
    $res=$conn->query($sql);
      while($row=$res->fetch_assoc()){
        echo 
        "Vardas: " . $row["name"]. "<br>" . 
        "Pavarde: " . $row["surename"]. "<br>" . 
        "Email: " . $row["email"]. "<br>" . 
        "Amzius: " . $row["age"]. "<br>" . 
        "Miestas: " . $row["city"]. "<br>" . 
        "Slaptazodis: " . $row["password"]. "<br>" . 
        "Lytis: " . $row["gender"]. "<br>";
      }       
  }
?>

<div class="container">
    <form action="" method="POST">
        <label for="vrd"><b>Vardas</b></label>
        <input type="text" placeholder="Vardas" name="vard">
        <label for="pvd"><b>Pavarde</b></label>
        <input type="text" placeholder="Pavarde" name="pavd">
        <label for="pass"><b>Slaptazodis</b></label>
        <input type="password" placeholder="Slaptazodis" name="pass">
        <label for="pass"><b>Slaptazodis</b></label>
        <input type="password" placeholder="Pakartok slaptazodi" name="passconf">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="E-mail" name="email">
        <label for="amz"><b>Amzius</b></label>
        <input type="text" placeholder="Amzius" name="amz">
        <label for="miest"><b>Miestas</b></label><br>
        <select id="miest" name="miest">
            <option value="0">Pasirink miesta</option>
            <?php
                $citiesArray = [
                    'vln'   => 'Vilnius',
                    'kns'   => 'Kaunas',
                    'klp'   => 'Klaipeda',
                    'pnvz'  => 'Panevezys',
                    'siau'  => 'Siauliai',
                    'taur'  => 'Taurage',
                ];
            ?>
            <?php foreach ($citiesArray as $key=> $value) { ?>
                <option value="<?php echo $value; ?>">
                    <?php echo $value; ?>
                </option>              
            <?php } ?>
        </select>
        <br><br>Vyras <input type="radio" name="lyt" value="M" checked="checked">
        Moteris <input type="radio" name="lyt" value="F"><br><br>
        <div class="mygtukas">
            <button type="submit">ATNAUJINTI</button>
        </div>
    </form>

<?php

if (!empty($_POST)) {
    if ($_POST['pass'] != $_POST['passconf']) {
        echo("Neatitinka slaptazodziai.");
    } else {
        unset($_POST['passconf']);
        $_POST['pass'] = md5($_POST['pass']);
        $name=$_POST['vard'];
        $surename=$_POST['pavd'];
        $password=$_POST['pass'];
        $email=$_POST['email'];
        $age=$_POST['amz'];
        $city=$_POST['miest'];
        $gender=$_POST['lyt'];
        $sql = "UPDATE users SET name='$name'
  
    }
}

?>