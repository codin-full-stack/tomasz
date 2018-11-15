
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>

<script type="text/javascript">
$(document).ready(function(){
    $('.paieska input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".paieska").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>



<div class="paieska">
    <form action="" method="POST">
        <label for="email"><b>Paieska</b></label>
        <input type="text" name="search">
        <br><br>
        <div class="mygtukasPaieska">
            <button type="submit">Paieska</button>
        </div>
        <div class="result"></div>
    </form>
<br><br>
<!-- <?php
    if(isset($_POST['search'])){
        $search=$_POST['search'];
        $gsql = "SELECT * FROM blogs where content like '%$search%' OR title like '%$search%'";
        $gresult = mysqli_query($conn, $gsql);
            while ( $grow = mysqli_fetch_assoc($gresult)) {
            echo "<b>" . $grow['title'] . "</b><br><br>";
            $str = substr($grow['content'], 0, 80);
            echo $str . '&nbsp&nbsp&nbsp' . "<a href='post.php?ID={$grow['post_id']}'>Read more</a>&nbsp&nbsp<br><br><br>";  
        }
    }

?> -->

<?php include 'footer.php' ?>



       
