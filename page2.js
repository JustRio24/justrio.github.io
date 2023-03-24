var html =
  '<div class="banner"><p>Happy Legal Day</p><a href="https://www.instagram.com/justrio.24/"><img src="https://justrio24.github.io/justrio.github.io/yay-couple.gif" height="1280px" width="720px" alt="" /></a></div>';

document.querySelector("body").innerHTML += html;

timer = document.querySelector(".timer");
var time = timer.innerHTML;

function timeku(linkku) {
  timer.innerHTML = time;
  console.log(time);
  if (time == 0) {
    window.location.replace(linkku);
    // console.log(linkku);
  } else {
    time--;
    setTimeout(function () {
      timeku(linkku);
    }, 1000);
  }
}
