<?php
/*connection code. Change the folowing credentials with yours.*/
try{
    $pdo = new PDO("mysql:host=localhost;dbname=tomasz", "root", "12345678");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt search query execution
try{
    if(isset($_REQUEST['term'])){
        // create prepared statement
        $sql = "SELECT * FROM blogs WHERE title LIKE :term or content like :term";
        $stmt = $pdo->prepare($sql);
        $term = '%' . $_REQUEST['term'] . '%';
        // bind parameters to statement
        $stmt->bindParam(':term', $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row['title'] . "</p>";
                echo "<p>" . $row['content'] . "</p>";
            }
        } else{
            echo "<p>No results found</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>