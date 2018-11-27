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

//register

var form = document.querySelector('.ajaxForm');

form.addEventListener('submit', function(e){
    e.preventDefault();   
    var data = serialize(form);
    postAjax('register.php', data, function(response){
        var json = JSON.parse(response);
        // console.log(json);
        if(json !== null) {
            var x = document.querySelector("#result");
            x.innerHTML = json.message;
        }   
    });
});


//show users


var showUsers = document.querySelector('#show');
showUsers.addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById("userList").innerHTML = '';   
    var data = serialize(form);
    postAjax('getUsers.php', data, function(response){
        var json = JSON.parse(response);
        for (let i = 0; i < json.length; i++) {
            var names = json[i].name;
            var surename = json[i].surename;
            var ID       = json[i].ID;

            document.getElementById("userList").innerHTML += '<strong>USER</strong> -- ' + '  (ID-' + ID + ')  ' + names + ' ' + surename + '<br>' + '<button class="btnDel" id="' + ID + '">DELETE USER</button>' + '<br>';
        }
            itemDel();
    });
});

function refresh() {
    document.getElementById("userList").innerHTML = '';   
    var data = serialize(form);
    postAjax('getUsers.php', data, function(response){
        var json = JSON.parse(response);
        for (let i = 0; i < json.length; i++) {
            var names = json[i].name;
            var surename = json[i].surename;
            var ID       = json[i].ID;

            document.getElementById("userList").innerHTML += '<strong>USER</strong> -- ' + '  (ID-' + ID + ')  ' + names + ' ' + surename + '<br>' + '<button class="btnDel" id="' + ID + '">DELETE USER</button>' + '<br>';
        }
    });
};

function itemDel(){
    var el = document.querySelectorAll(".btnDel");
    for (var m = 0; m < el.length; ++m){
        el[m].addEventListener('click', function(e){

            var r = confirm("Ar tikrai norite istrinti vartotoja?");
            if (r == true) {
                alert("User deleted!");
                e.preventDefault();
            
                var data = {
                    "id": e.currentTarget.id
                };
            
                postAjax('deleteUser.php', data, function(){ 
                });
                refresh();
            } else {
                alert("You saved him!");
            }
        });
    }
}