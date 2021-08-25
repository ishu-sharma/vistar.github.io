<!doctype html>
<html lang="en">
<head>
  <?php include("links.php"); ?>
</head>
  <style>
    
.card{
  border: none;
  border-radius: 8px;
  transition: all .4s ease;
  border-color: transparent;
  background: #f5f5f5;
}

.card:hover{
  
  box-shadow:  11px 11px 33px #c1c1c1,
             -11px -11px 33px #ffffff;
}

.card .card-img{
  height:100px;
  width: 100px;
  border-radius: 50%;
  background: #fff;
  box-shadow:  5px 5px 10px #bebebe,
             -5px -5px 10px #ffffff;
  transition: all .4s ease;
}

.card-img:hover{
  content: '';  
  background: #48cae4;
  transform: scale(1.02);
}


.card .card-img img{
  border-radius: 50%;
  margin-top: 0.5rem;
  margin-left: 0.5rem;
}

.img-neumorphism{
  padding: 1.3rem;
  justify-content: center;
  align-items: center;
  display: flex;
  height: 20px;
  width: 20px;
  margin: 0 0.2rem;
  border-radius: 50%;
  background: linear-gradient(145deg, #e6e6e6, #ffffff);
box-shadow:  5px 5px 7px #ededed,
             -5px -5px 7px #ffffff;
  }
  </style>
  </head>
  <body>

    <section data-aos="fade-up">
      <div class="row container mx-auto shadow-lg py-5 bg-white" style="justify-content: space-between;">

        <div class="py-5 text-center">
          <h1 class="display-3 ">Meet Our Staff</h1>
          <p>A team of Experienced Professionals</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 mx-auto">
      <div class="card py-3 mt-3 mx-auto border-none" style="width:16rem;">
        <div class="card-img mx-auto">
          <img src="images/amit.png" height="85px">
        </div>
        <div class="card-body my-3 text-center">
          <h5 class="card-title">Mr. Amit Bose</h5>
          <p class="card-text">
            Director Of Vistar Institute
          </p>
          <div class="social py-3 d-flex justify-content-center">
       <div class="img-neumorphism">
       <a href=""><img src="icons/facebook.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/instagram.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/twitter.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/youtube.svg" height="32px"></a>
     </div>
     </div>
        </div>
        
      </div>
    </div>

     <div class="col-lg-3 col-md-3 col-sm-12 mx-auto">
      <div class="card py-3 mt-3 mx-auto" style="width:16rem;">
        <div class="card-img mx-auto">
          <img src="images/sachin.png" height="85px">
        </div>
        <div class="card-body my-3 text-center">
          <h5 class="card-title">Mr. Sachin Magharia</h5>
          <p class="card-text">
            Managing Director
          </p>
          <div class="social py-3 d-flex justify-content-center">
       <div class="img-neumorphism">
       <a href=""><img src="icons/facebook.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/instagram.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/twitter.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/youtube.svg" height="32px"></a>
     </div>
     </div>
        </div>
        
      </div>
    </div>

     <div class="col-lg-3 col-md-3 col-sm-12 mx-auto">
      <div class="card py-3 mt-3 mx-auto" style="width:16rem;">
        <div class="card-img mx-auto">
          <img src="images/prakash.png" height="85px">
        </div>
        <div class="card-body my-3 text-center">
          <h5 class="card-title">Mr. Prakash Mishra</h5>
          <p class="card-text">
            Master In Tally
          </p>
          <div class="social py-3 d-flex justify-content-center">
       <div class="img-neumorphism">
       <a href=""><img src="icons/facebook.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/instagram.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/twitter.svg" height="32px"></a>
     </div>
     <div class="img-neumorphism">
       <a href=""><img src="icons/youtube.svg" height="32px"></a>
     </div>
     </div>
        </div>
        
      </div>
    </div>

    

      </div>
    </section>
  </body>
</html>
