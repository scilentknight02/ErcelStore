<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ErcelStore - Contact</title>
  <?php
  require('Includes/links.php');
  ?>
  <style>
    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;
    }
  </style>
</head>

<body>
  <?php
  require('Includes\header.php');
  ?>
  <!-- main content start -->

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      At ErcelStore, we offer a seamless shopping experience with a wide range
      of authentic Apple products, <br />
      expert customer support, fast delivery services, and secure payment
      options.
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14133.192431325024!2d85.33402185187914!3d27.677179769194222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f2804a02bf%3A0x85468199859b2d8d!2sKoteshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1745927344874!5m2!1sen!2snp"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <i class="bi bi-geo-alt-fill"></i>
          <a href="https://maps.app.goo.gl/j1aqd6cpYzSvu9uf9" target="_blank"
            class="d-inline-block text-decoration-none text-dark mb-2">ErcelStore, Koteshwor-32, Kathmandu, Nepal</a>
          <h5 class="mt-2">Call us</h5>
          <a href="tel:+9779861252006" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9779861252006
          </a>

          <br />
          <a href="tel:+9779805143919" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9779805143919
          </a>

          <h5 class="mt-4">Email</h5>

          <a href="mailto: scilentknight512@gmail.com" class="d_inline-block text-decoration-none text-dark"><i
              class="bi bi-envelope-fill"></i> scilentknight512@gmail.com</a>

          <h5 class="mt-4">Follow us</h5>

          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>

          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form action="">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500">Name</label>
              <input type="text" name="name" class="form-control shadow-none" required />
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500">Email</label>
              <input type="email" name="email" class="form-control shadow-none" required />
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500">Subject</label>
              <input type="text" name="subject" class="form-control shadow-none" required />
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500">Message</label>
              <textarea class="form-control shadow-none" rows="5" name="message" style="resize: none"></textarea>
            </div>
            <button type="submit" name="btn_submit" class="btn text-white custom-bg mt-3">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- main content end -->
  <?php
  require('Includes\footer.php');
  ?>
</body>

</html>