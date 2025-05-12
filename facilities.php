<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ErcelStore - Facilities</title>
  <?php
  require('Includes/links.php');
  ?>
  <style>
    .h-line {
      width: 180px;
      margin: 0 auto;
      height: 1.7px;
    }

    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body>
  <?php
  require('Includes\header.php');
  ?>
  <!-- main content start -->

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our facilities</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">At ErcelStore, we offer a seamless shopping experience with a wide range of authentic
      Apple products, <br> expert customer support, fast delivery services, and secure payment options.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/fast-delivery.svg" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">Free & Fast Delivery</h5>
          </div>
          <p>Enjoy free and fast delivery on all your ErcelStore orders — bringing your favorite Apple products to your
            doorstep quicker than ever!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/authentic.jpg" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">100% Authentic</h5>
          </div>
          <p>At ErcelStore, we guarantee 100% authentic Apple products, sourced directly to ensure quality, reliability,
            and your complete peace of mind.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/easy-return.jpg" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">Easy Return</h5>
          </div>
          <p>Shop with confidence at ErcelStore — we offer a simple and hassle-free return process to ensure your
            complete satisfaction.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/multiple-payment.jpg" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">Multiple Payment Options</h5>
          </div>
          <p>ErcelStore offers multiple secure payment options — making your shopping experience easy, flexible, and
            convenient.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/student-discount.png" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">Student-Discount</h5>
          </div>
          <p>Save more with ErcelStore’s Student Discount — get the latest Apple tech at the best price.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="Images/Facilities-Img/authentic.jpg" width="40px" class="rounded-circle">
            <h5 class="m-0 ms-3">24/7 Support</h5>
          </div>
          <p>Our team is available 24/7 to assist with any queries or issues, ensuring a seamless and satisfying
            experience</p>
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