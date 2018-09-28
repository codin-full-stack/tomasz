<?php include 'header.php';
include 'sessionCheck.php';
include 'config.php';
?>

<div class="paieska">
    <form action="" method="POST">
        <label for="email"><b>Paieska pagal E-mail</b></label>
        <input type="text" placeholder="E-mail" name="email" required>
        <br><br>
        <div class="mygtukasPaieska">
            <button type="submit">Paieska</button>
        </div>
    </form>
    


<?php 


if(isset($_POST['button'])){    //trigger button click

    $search=$_POST['search'];
  
    $query=mysql_query("select * from employees where first_name like '%{$search}%' || last_name like '%{$search}%' ");
  
  if (mysql_num_rows($query) > 0) {
    while ($row = mysql_fetch_array($query)) {
      echo "<tr><td>".$row['first_name']."</td><td></td><td>".$row['last_name']."</td></tr>";
    }
  }else{
      echo "No employee Found<br><br>";
    }
  
  }else{                          //while not in use of search  returns all the values
    $query=mysql_query("select * from employees");
  
    while ($row = mysql_fetch_array($query)) {
      echo "<tr><td>".$row['first_name']."</td><td></td><td>".$row['last_name']."</td></tr>";
    }
  }
  
  mysql_close();
  ?>

?>

<br><br><br>
<div class="linkBack">
<a href="index.php" class="button">Grizti i registracijos forma</a>
</div>

<?php include('footer.php'); ?>
