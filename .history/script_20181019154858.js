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
  change[i].style.backgroundColor = "white";
}


var change2 = document.querySelectorAll('.tableinfo tbody tr:nth-child(2n)');
var i2 = 0;
var len2 = change2.length;
for (; i2 < len2; i2++) {
  change2[i2].style.backgroundColor= "white";
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
  document.querySelector("ul").style.background = this.value;
}

var hamburgerEl = document.querySelector('.navh');

hamburgerEl.addEventListener('click', function () {
  var menuEl = document.querySelector(".nav ul");
  
  if(menuEl.classList.contains('active')) {
    menuEl.classList.remove('active');
    document.querySelector('.navh').style.borderTop = "30px solid #2cc030";
  } else {
    menuEl.classList.add('active');
    document.querySelector('.navh').style.borderTop = "38px solid #ff0000";
  }

});
//skaiciuotuvo funkcija

var rez = document.querySelector(".input");
var vals = [];

function result(button) {
   var val = button.getAttribute('data-value');

   if(button.classList.contains('symb') && val != '=' && val != '%') {
       vals.push(val);
   }
   // console.log(rez.value);
   if (rez.value=='0'){
       rez.value='';
   }

   if (val=='='){
       if (rez.value.indexOf('%') > -1) {

           var symbol = vals[0];
           var numbers = rez.value.split(symbol);
           var percents = (numbers[0] / 100) * parseInt(numbers[1]);
           var result = numbers[0] + symbol + percents;

           rez.value=eval(result).toFixed(0);
           val='';
           vals = [];



       } else {
           rez.value=eval(rez.value).toFixed(2);
           var n = rez.value;
           n = parseFloat(n);
           rez.value=n;
           val='';
           vals = [];
       }

   }

   if (val=='A/C'){
       rez.value='0';
       val='';
       vals = [];
   }


   // rez.value = rez.value + val;
   rez.value += val;

}

var btn = document.querySelectorAll('button.calc-number1, button.calc-number2, button.calc');


for (var xi = 0; xi < btn.length; xi++) {
   // console.log(btn[xi]);
   btn[xi].addEventListener("click", function(e) {
       // e.preventDefault();
       result(e.currentTarget);
   });

}

