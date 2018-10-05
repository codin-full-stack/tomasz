<?php 
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>

<div class="paieska">
    <form action="" method="POST">
        <label for="email"><b>Paieska pagal E-mail</b></label>
        <input type="text" placeholder="E-mail" name="email" required>
        <div class="mygtukasPaieska">
            <button class="searchbutton" type="submit">Paieska</button>
        </div>
    </form>
<?php 


if(!isset($_POST['email'])){
  echo "<br>Iveskite vartotojo email";
  }else{
    $search_value=$_POST["email"];
    $sql="select * from users where email like '%$search_value%'";
    $res=$conn->query($sql);
      while($row=$res->fetch_assoc()){
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"" width="300" height="300"/>' . "<br>";  
        echo "<b>ID - </b>" . $row["id"]. "<br>" . 
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

<?php include('footer.php'); ?>
