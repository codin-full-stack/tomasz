
<?php 
include 'header.php'; 
include 'config.php';
?>

<div class="userInfo">
<?php 


if (isset($_SESSION['email'])) {
    $search_value=$_SESSION["email"];
    $sql="select * from users where email like '%$search_value%'";
    $res=$conn->query($sql);
      while($row=$res->fetch_assoc()){
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
</div>