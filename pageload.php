<!DOCTYPE html>
<html>
  <head>
    <?php include("links.php"); ?>
    <style>
    </style>
  </head>
  <body>
    <div id="popUpMain">
      <div id="popup" class="py-4 container bg-light mx-auto w-50">
        <h1 class="display-5 text-center">Welcome To!</h1>
        <h2 class="text-center">
          Vistar
          <span style="color: #ff0000">I</span>
          <span style="color: #ff0000">n</span>
          <span style="color: #66cc66">s</span>
          <span style="color: #66cc66">t</span>
          <span style="color: #ff9966">i</span>
          <span style="color: hsl(20, 100%, 70%)">t</span>
          <span style="color: #ffcccc">u</span>
          <span style="color: #ff0066">t</span>
          <span style="color: #ff0066">e</span><br> 
          Of Computer Science.
        </h2>

        <form class="needs-validation mx-auto p-4" novalidate method="POST" action="index.php">
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
            <label for="validationCustom01" class="form-label"
              >Enter Your Name</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div><br>
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
            <label for="validationCustomUsername" class="form-label"
              >Username</label
            >
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input
                type="text"
                class="form-control"
                id="validationCustomUsername"
                aria-describedby="inputGroupPrepend"
                required
              />
              <div class="invalid-feedback">Please choose a username.</div>
            </div>
          </div><br>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
            <label for="validationCustom05" class="form-label"
              >Mobile No.</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom05"
              required 
            />
            <div class="invalid-feedback">
              Please provide a valid Mobile Number.
            </div>
          </div><br>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
            <textarea
              class="form-control"
              aria-label="Your Message"
              placeholder="Enter Your Message Here."
            ></textarea>
          </div><br>  

          <div class="col-12 text-center">
            <button class="hov-btn" type="submit">Submit form</button>
            <button class="btn btn-warning" id="submitId">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
      })();
    </script>
  </body>
</html>
