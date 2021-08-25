<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <?php include("links.php"); ?>
  </head>
  <body>
    <!-- Carousal -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner position-relative">
        <div
          class="position-absolute branding d-flex"
          style="z-index: 1; top: 2%; left: 15%"
        >
          <img src="images/graduation-hat.png" width="45px" class="img-fluid" />
          <h1
            class="text-center text-white"
            style="font-weight: 900; font-family: 'Kaushan Script', cursive"
          >
            Vistar Institute
          </h1>
        </div>
        <div class="carousel-item active">
          <img src="images/cr1.png" class="d-block w-100" alt="..." />
          <div class="overlay">
            <div class="carousel-content">
              <h5 class="">Learning To Love, Loving<br />To Learn</h5>
              <p>Always Practice Hard and Committed towards Goals.</p>

              <button class="outline-btn">Get Started</button>
              <button class="outline-btn2">View Courses</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/cr2.png" class="d-block w-100" alt="..." />
          <div class="overlay">
            <div class="carousel-content">
              <h5 class="">A Great Place For<br />Learning</h5>
              <p>An Ideal Place for Training and All Round Development.</p>

              <button class="outline-btn">Get Started</button>
              <button class="outline-btn2">View Courses</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/cr3.png" class="d-block w-100" alt="..." />
          <div class="overlay">
            <div class="carousel-content">
              <h5 class="">Tips To Succeed In<br />Education</h5>
              <p>Providing Training According to Current Indutrial Needs .</p>

              <button class="outline-btn">Get Started</button>
              <button class="outline-btn2">View Courses</button>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </body>
</html>
