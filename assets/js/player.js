$("#playbar").hide();
$("#playbars").hide();
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  $(".parallax").css({
    "background-position": "center " + scroll * 0.5 + "px",
  });
});
// fade out parallax when scroll
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  $(".parallax").css({
    opacity: 1 - scroll / 300,
  });
});
//when desktop
$(window).resize(function () {
  if ($(window).width() > 992) {
    // fade out slidertop when scroll
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      $(".hehe").css({
        opacity: 1 - scroll / 950,
      });
    });
  }
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    $(".huhu").css({
      opacity: 1 - scroll / 2500,
    });
  });
});

// audio player
var idx = 1;
var audio = new Audio(
  "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true"
);
var play = document.getElementById("play");
var prev = document.getElementById("prev");
var next = document.getElementById("next");
var duration = audio.duration;
var currentTime = audio.currentTime;
var percent = (currentTime / duration) * 100;
var width = percent + "%";
var progress = document.getElementsByClassName("progress-bar")[0];
var progressBar = document.getElementsByClassName("progress")[0];
var playbar = document.getElementById("playbar");

// bestmusic klik
$(".bestmusic").click(function () {
  $("#playbars").hide();
  $("#playbar").show();
  musik.currentTime = 0;
  musik.pause();
  var id = $(this).attr("id");
  audio.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + id + ".mp3?raw=true";
  audio.play();
  play.innerHTML = '<i class="fas fa-pause"></i>';
  idx = id;
});
// play tombol
play.addEventListener("click", function () {
  if (audio.paused) {
    audio.play();
    play.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    audio.pause();
    play.innerHTML = '<i class="fas fa-play"></i>';
  }
});
// prev tombol
prev.addEventListener("click", function () {
  idx--;
  audio.currentTime = 0;
  audio.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  audio.play();
});
// on finish lagu
audio.addEventListener("ended", function () {
  idx++;
  audio.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  audio.play();
});
// next tombol
next.addEventListener("click", function () {
  idx++;
  audio.currentTime = audio.duration;
  audio.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  audio.play();
});

// progress bar musik
audio.addEventListener("timeupdate", function () {
  var duration = audio.duration;
  var currentTime = audio.currentTime;
  var percent = (currentTime / duration) * 100;
  var width = percent + "%";
  progress.style.width = width;
});

var musik = new Audio(
  "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true"
);

var play2 = document.getElementById("play2");
var prev2 = document.getElementById("prev2");
var next2 = document.getElementById("next2");
var progress2 = document.getElementsByClassName("progress-bars")[0];
var progressBar2 = document.getElementsByClassName("progresss")[0];
var playbar2 = document.getElementById("playbars");

// musicview click play music
$(".musicview").click(function () {
  $("#playbar").hide();
  audio.currentTime = 0;
  audio.pause();
  $("#playbars").show();
  var id = $(this).attr("id");
  var idfix = id.replace("list-", "");
  musik.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idfix + ".mp3?raw=true";
  musik.play();
  play2.innerHTML = '<i class="fas fa-pause"></i>';
  idx = idfix;
});

// music progress bar
musik.addEventListener("timeupdate", function () {
  var image = document.getElementsByClassName("msccv")[idx - 1];
  // image rotate when music playing
  if (musik.currentTime > 0) {
    image.style.transform =
      "rotate(" + (musik.currentTime * 360) / musik.duration + "deg)";
  }
});
// play musisk button
play2.addEventListener("click", function () {
  if (musik.paused) {
    musik.play();
    play2.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    musik.pause();
    play2.innerHTML = '<i class="fas fa-play"></i>';
  }
});
// on finish
musik.addEventListener("ended", function () {
  idx++;
  musik.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  musik.play();
});
// next musik button
next2.addEventListener("click", function () {
  idx++;
  musik.currentTime = musik.duration;
  musik.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  musik.play();
});
// prev musik button
prev2.addEventListener("click", function () {
  idx--;
  musik.currentTime = 0;
  musik.src =
    "https://github.com/cyclnn/cyclnn/blob/main/" + idx + ".mp3?raw=true";
  musik.play();
});
// progress bar musik
musik.addEventListener("timeupdate", function () {
  var duration = musik.duration;
  var currentTime = musik.currentTime;
  var percent = (currentTime / duration) * 100;
  var width = percent + "%";
  progress2.style.width = width;
});
