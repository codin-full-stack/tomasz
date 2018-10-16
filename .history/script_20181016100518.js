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

// var target = document.querySelector('.kaledos');
// target.innerHTML = "iki kaledu liko: " + days;
// target.style.color = "white";



// const all = document.querySelectorAll('.feed-box-heading');

// all.forEach(a => {
  // a.innerHTML += "iki kaledu liko: " + days;
// });


// const bbb = document.querySelectorAll('.bbb');

// bbb.forEach(b => {
  // b.innerHTML += days;
// });


var change = document.querySelectorAll('.feed-box-heading');
var i = 0;
var len = change.length;
for (; i < len; i++ ) {
  change[i].style.backgroundColor = "red";
}


var change2 = document.querySelectorAll('.tableinfo tbody tr:nth-child(2n)');
var i2 = 0;
var len2 = change2.length;
for (; i2 < len2; i2++) {
  change2[i2].style.backgroundColor= "red";
}


function miestaz() {
  var x = document.getElementById("miest").value;
   document.getElementById("miestas").innerHTML = "You have selected: " + x;
  if (document.getElementById("miest").value == 0) {
    document.getElementById("miestas").innerHTML = "Select city!";
  }
  var longer = document.querySelector('.boxReg');
  longer.style.height = "650px";
}

// document.addEventListener("click", voice);
// function voice() {
//   document.querySelector(".labelradio")
//   alert("watwatwat");
// }


document.getElementsByName("bodycolor")[0].addEventListener('change', changecolor);

function changecolor(){
  document.body.style.background = this.value;
}

document.getElementsByName("navcolor")[0].addEventListener('change', changecolor2);

function changecolor2(){
  var navbaraz = document.getElementsByClassName("navcolorz");
  navbaraz.style.color = this.value;
}