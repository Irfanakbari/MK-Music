$(document).ready(function () {
  $(".slidertop").hide();
  $(".listmusic").hide();
  // show on scroll

  $(".slidertop").slideDown(1000);
  // hide navbar-text if mobile
  if ($(window).width() < 992) {
    $(".navbar-text").hide();
  }

  // hide loader delay 1s
  $(".konten").load("homepage.php");

  // tuker page on click
  $(".navi").click(function () {
    $("#loader-wrapper").fadeIn(700);
    $(".navi").removeClass("active");
    // remove class show
    $("#navbarNavDropdown").removeClass("show");
    $(this).addClass("active");
    var page = $(this).attr("id");
    setTimeout(function () {
      if (page == "home") {
        setTimeout(function () {
          $("#loader-wrapper").fadeOut(1000);
        }, 500);
        $(".konten").load("homepage.php");
      } else if (page == "listbook") {
        setTimeout(function () {
          $(".konten").load("listbook.php");
        }, 500);
      }
    }, 500);
  });
  // tombol full screen
  $("#fullScreen").click(function () {
    (document.fullScreenElement && null !== document.fullScreenElement) ||
    (!document.mozFullScreen && !document.webkitIsFullScreen)
      ? document.documentElement.requestFullScreen
        ? document.documentElement.requestFullScreen()
        : document.documentElement.mozRequestFullScreen
        ? document.documentElement.mozRequestFullScreen()
        : document.documentElement.webkitRequestFullScreen &&
          document.documentElement.webkitRequestFullScreen(
            Element.ALLOW_KEYBOARD_INPUT
          )
      : document.cancelFullScreen
      ? document.cancelFullScreen()
      : document.mozCancelFullScreen
      ? document.mozCancelFullScreen()
      : document.webkitCancelFullScreen && document.webkitCancelFullScreen();
  });
});
