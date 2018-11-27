

<script src="js/jquery-1.12.4.min.js"></script>


<!-- REGISTRATION TO DB -->

<div class="boxLogin">
    <form class="ajaxForm" action="" method="POST">
        <div class="box-item">
            <label for="" class="label">Vardas<br></label>
            <input type="text" name="vrd" class="field">
        </div>
        <div class="box-item">
            <label for="" class="label">Pavarde<br></label>
            <input type="text" name="pvd" class="field">
        </div>
        <div class="box-bottom">
            <button type="submit" class="submit">GO</button>
        </div>
        <p id="result"></p>
    </form> 
</div>

<!-- GET USERS -->

<div id="live_data"></div>

       
<script>

//POST INFO TO MYSQL USING AJAX

$(document).ready(function(){
    $(".submit").click(function(e){
        e.preventDefault();
        document.getElementById('result').innerHTML = '';
        $.ajax({
            url:'sendInfo.php',
            method:'post',
            data: $(".ajaxForm").serialize(),
            success:function(data){
                document.getElementById('result').innerHTML += data;
            }
        });
    });
});

//GET MYSQL DB

function fetch_data() {  
    $.ajax({  
        url:"select.php",  
        method:"POST",  
        success:function(data){  
        $('#live_data').html(data);  
        }  
    });  
} 

//execute table
fetch_data();

//add data

$(document).on('click', '#btn_add', function(){  
    var first_name = $('#first_name').text();  
    var last_name = $('#last_name').text();  
    if(first_name == '')  
    {  
        alert("Enter First Name");  
        return false;  
    }  
    if(last_name == '')  
    {  
        alert("Enter Last Name");  
        return false;  
    }  
    $.ajax({  
        url:"insert.php",  
        method:"POST",  
        data:{first_name:first_name, last_name:last_name},  
        dataType:"text",  
        success:function(data)  
        {  
            alert(data);  
            fetch_data();  
        }  
    })  
});


//delete data

$(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");
           console.log(id);  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();   
                     }  
                });  
           }  
      });  

</script>
