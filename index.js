let time = document.getElementById('time');

var clock = () => {
  let date = new Date();
  let hour = date.getHours();
  let mins = date.getMinutes();
  let secs = date.getSeconds();
  time.innerHTML = hr + ":" + mins + ":" + secs;
}

setInterval(clock, 1000);
