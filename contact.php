<!DOCTYPE html>
<html>
  <head>
    <?php include("links.php"); ?>
    <title></title>
  </head>
  <body>
    <div class="container mx-auto spacer p-5">
      <h1 class="display-1 text-center">Contact us</h1>
      <div class="container row mx-auto" id="contact">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <form class="row g-3 needs-validation" novalidate method="POST">
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label"
                >full name</label
              >
              <input
                type="text"
                class="form-control"
                id="validationCustom01"
                required
              />
              <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Phone</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom02"
                required
              />
              <div class="invalid-feedback">
                Please provide a Mobile Number.
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustomUsername" class="form-label"
                >Email</label
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
                <div class="invalid-feedback">Please choose a email.</div>
              </div>
            </div>
            <div class="input-group">
              <span class="input-group-text">Message</span>
              <textarea
                class="form-control"
                aria-label="Your Message"
              ></textarea>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">
                Submit Query
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img
            src="images/contact.png"
            alt="Contact-img"
            class="img-fluid"
            width="600px"
          />
        </div>
      </div>
    </div>
    <hr />
  </body>
</html>
