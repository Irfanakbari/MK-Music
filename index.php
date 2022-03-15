<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MK Music</title>
  <!-- CDN Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- favicon -->
  <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  <!-- CDN FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CDN Bootstrap 5.0 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body style="background-color: black">
  <div id="loader-wrapper" style="background-color: black;">
    <div id="loader"></div>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: black;">
    <div class="container-fluid">
      <h4 style="color: white;"><img src="https://music.youtube.com/img/on_platform_logo_dark.svg" alt=""></h4>
      <button style="color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i style="color: white;" class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link navi active" id="home" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navi" id="listbook" href="#">List Pahlawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="team" href="#">Our Team</a>
          </li>
          <li class="nav-item dropdown">
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="nav-item">
                <a class="nav-link navi active" id="home" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navi" id="listbook" href="#">List Pahlawan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="team" href="#">Our Team</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <span class="navbar-text" style="color: white;">
        <button id="fullScreen" class="btn btn-primary"><i class="fas fa-expand"></i> Full Screen</button>
      </span>
    </div>
  </nav>
  <!-- Navbar -->
  <br /><br />
  <div class="konten">

  </div>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright Mantap Kali Music
    </div>
    <!-- Copyright -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    // change page and scroll to ourteam
    $(document).ready(function() {
      $("#team").click(function() {
        $('#loader-wrapper').show();
        $(".konten").load("homepage.php");
        // set active navbar
        $(".navi").removeClass("active");
        $("#home").addClass("active");
        // if homepage is loaded
        setTimeout(function() {
          $('html, body').animate({
            scrollTop: $("#ourTeam").offset().top
          }, 1000);

        }, 500);
      });
    });
  </script>
</body>

</html>