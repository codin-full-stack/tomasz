
<?php 
include 'config.php';
include 'header.php'; 
?>

<div class="userInfo">
<?php 


if (isset($_SESSION['id'])) {
    $search_value=$_SESSION["id"];
    $sql="select * from users where id like '%$search_value%'";
    $res=$conn->query($sql);
      while($row=$res->fetch_assoc()){
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] )." width="500" height="500"'"/>';
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