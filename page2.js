var html =
  '<h2>Pesan Berhasil Terkirim</h2><h3>Anda akan diarahkan ke halaman utama</h3><h4 class="timer">10</h4><p>Dibuat Oleh :</p><a href="https://www.instagram.com/justrio.24/" class="yt"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1024px-Instagram_logo_2016.svg.png" height="30px" alt="" srcset="" />JustRio</a><div class="banner"><p>Happy Legal Day</p><a href="https://www.instagram.com/justrio.24/"><img src="https://justrio24.github.io/justrio.github.io/yay-couple.gif" height="1280px" width="720px" alt="" /></a></div>';

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
