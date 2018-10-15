// Set the date we're counting down to
function kaledos() {
    var countDownDate = new Date("Dec 25, 2018 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {


    // Get todays date and time
    var now = new Date().getTime();


    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 
    // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML =  days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
      document.getElementById('kaledos').style.visibility='visible';
 
    //   var left = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
    //   console.log(left);

    // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Kaledos!";
        }
    }, 1000);
}

var countDownDate = new Date("Dec 25, 2018 00:00:00").getTime();
var now = new Date().getTime();
var distance = countDownDate - now;
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//

var target = document.querySelector('.kaledos');
target.innerHTML = "iki kaledu liko: " + days;
target.style.color = "white";



const all = document.querySelectorAll('.feed-box-heading');

all.forEach(a => {
  a.innerHTML += "iki kaledu liko: " + days;
});


const bbb = document.querySelectorAll('.bbb');

bbb.forEach(b => {
  b.innerHTML += days;
});



function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();