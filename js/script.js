var countDownDate = new Date("Jan 1, 2026 00:00:00").getTime();
var x = setInterval(function() {
var counter = document.querySelector("#countdown");
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "You Are Late!";

    var winner = document.querySelector("#winner");
    if (winner) {
      winner.style.display = "inline-block"; // show it
    }
  }
}, 1000);




