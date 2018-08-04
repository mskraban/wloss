$(document).ready(function() {
    var f = document.getElementById('Dot');
    var g = document.getElementById('Dot-1');
    var h = document.getElementById('Dot-2');
    setInterval(function() {
        f.style.display = (f.style.display == 'none' ? '' : 'none');
    }, 1000);
    setInterval(function() {
        g.style.display = (g.style.display == 'none' ? '' : 'none');
    }, 1000);
    setInterval(function() {
        h.style.display = (h.style.display == 'none' ? '' : 'none');
    }, 1000);

});

// Set the date we're counting down to
var countDownDate = new Date("Oct 01, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + '';
    document.getElementById("demo-1").innerHTML = hours+ '';
    document.getElementById("demo-2").innerHTML = minutes + '';
    document.getElementById("demo-3").innerHTML = seconds +"";
    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Čas je že potekel!";
    }
}, 1000);

