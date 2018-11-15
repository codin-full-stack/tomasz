<?php include 'config.php' ?>


<script src="js/jquery-1.12.4.min.js"></script>






<div class="boxLogin">
    <form class="ajaxForm" action="" method="POST">
        <div class="box-item">
            <label for="" class="label">Vardas<br></label>
            <input type="text" name="vrd" class="field" placeholder="vardas">
        </div>
        <div class="box-item">
            <label for="" class="label">Pavarde<br></label>
            <input type="text" name="pvd" class="field" placeholder="pavarde">
        </div>
        <div class="box-bottom">
            <button type="submit" name="doLogin" class="sigin">SignIn</button>
        </div>
    </form> 
</div>

       
<script>


function postAjax(url, data, success) {
    var params = typeof data == 'string' ? data : Object.keys(data).map(
            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
        ).join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    return xhr;
}


function serialize(form) {
    var field, l, s = [];
    if (typeof form == 'object' && form.nodeName == "FORM") {
        var len = form.elements.length;
        for (var i=0; i<len; i++) {
            field = form.elements[i];
            if (field.name && !field.disabled && field.type != 'file' && field.type != 'reset' && field.type != 'submit' && field.type != 'button') {
                if (field.type == 'select-multiple') {
                    l = form.elements[i].options.length; 
                    for (var j=0; j<l; j++) {
                        if(field.options[j].selected)
                            s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[j].value);
                    }
                } else if ((field.type != 'checkbox' && field.type != 'radio') || field.checked) {
                    s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value);
                }
            }
        }
    }
    return s.join('&').replace(/%20/g, '+');
}

var form = document.querySelector('.ajaxForm');

form.addEventListener('submit', function(e){
    e.preventDefault();

    var data = serialize(form);

    postAjax('dump.php', data, function(response){
        var json = JSON.parse(response);
        // alert('Labas, ' + json.vrd);
        console.log(json);
        
    });
});

// $.ajax({
//                 type: "POST",
//                 url: "dump.php",
//                 data: ;
//                 success function(json_data){
//                     var data_array = $.parseJSON(json_data);

//                     var rtrn = data_array['returnArr'];.
//                     console.log(rtrn);
//                 }
//             });
</script>
