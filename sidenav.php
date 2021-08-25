<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/c6e799eca5.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
      <header>
      <div class="side-nav shadow-lg text-capitalize">
        <!-- menu -->
        <div class="menu d-flex">
          <img class="b1" src="images/menu.png" alt="menu-toggler" />
          <span>
            <img class="b2" src="images/left-arrow.png" alt="close-menu" />
          </span>
          <p class="ml-2">toggle</p>
        </div>

        <!-- navbar -->
        <div class="navbar">
          <ul>
            <li class="nav-item">
              <span>
                <a href="index.php"><img src="images/home.png" alt="" /></a>
              </span>
              <a class="nav-link" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <span>
                <a href="#service"
                  ><img src="images/customer-service.png" alt=""
                /></a>
              </span>
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <span>
                <a href="#about"><img src="images/team.png" alt="" /></a>
              </span>
              <a class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-item">
              <span>
                <a href="#courses"
                  ><img src="images/online-course.png" alt=""
                /></a>
              </span>
              <a class="nav-link" href="jobs.php">Jobs</a>
            </li>
            <li class="nav-item">
              <span>
                <a href="#gallery"><img src="images/gallery.png" alt="" /></a>
              </span>
              <a class="nav-link" href="#gallery">gallery</a>
            </li>
            <li class="nav-item pb-5">
              <span>
                <a href="#contact"
                  ><img src="images/contacting.png" alt=""
                /></a>
              </span>
              <a class="nav-link" href="#contact">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- side-Navbar -->

    <script>
        $(document).ready(function () {
        $(".b1").click(function () {
          $(".side-nav").animate({ width: "12rem" }, "slow");
          $(".nav-link").show();
          $(".b1").hide();
          $(".b2").show();
        });

        $(".b2").click(function () {
          $(".side-nav").animate({ width: "5rem" }, "slow");
          $(".nav-link").hide();
          $(".b1").show();
          $(".b2").hide();
        });
      });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
