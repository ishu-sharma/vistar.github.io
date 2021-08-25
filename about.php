<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("links.php") ?>
    <style>
      

      .parallex {
        background: url("images/paralex.jpg") no-repeat center fixed;
        background-size: cover;
        min-height: 400px;
        }

        .color-animation {
          color: red;
          animation-name: example;
          animation-duration: 4s;
          animation-iteration-count: infinite;

        }

@keyframes example {
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}

    </style>
  </head>
  <body>

    <?php include("sidenav.php"); ?>
  
    <div class="main_container">

      <section>
        <div class="container-fluid py-5 ">
          
          <div class="container row mx-auto py-2">
            <h1 class="display-3 text-center mb-5">About Us</h1>
          <div class="col-lg-6 col-md-6 col-sm-12 py-5">
            <div class="my-auto">
              <h1 class="display-2">Who We Are</h1>
            <p>We are the Leading IT Training Center having Tieups with many IT companies.Through Vistar Foundation We provide Youth Awareness through Seminars and Webinars</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="images/education1.jpg" class="img-fluid mx-auto">
          </div>
        </div>
        </div>
      </section>

      <section>
        <h1 class="display-4 text-center py-5 color-animation" style="font-weight: bolder;">Experience A Good Education</h1>
      </section>


      <section class="parallex">
        <div class="text-center text-white" style="padding:9rem 0">
          <h1 class="display-4">Learn,Research and Explore</h1>
          <p>A Quality Education Program for all Youth</p><br>
          <a href=""><button class="btn btn-warning">Mail Us</button></a>
        </div>
        
      </section>      
      <section>
          <div class="container mx-auto">
            <?php include("service.php"); ?>
          </div>
      </section>

      <!-- footer Link -->
      <?php include("footer.php"); ?>
  </div>
      
  </body>
</html>
