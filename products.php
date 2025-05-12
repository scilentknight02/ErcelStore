<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ErcelStore - Products</title>
  <?php
  require('Includes/links.php');
  ?>
  <style>
    /* .h-line{
        width: 600px;
        margin: 0 auto;
        height: 1.7px;
      } */
  </style>
</head>

<body>
  <?php
  require('Includes\header.php');
  ?>
  <!-- main content start -->

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center mb-4">
      Explore Our Exclusive Range of Products
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3 mb-5">
      Browse our curated collection of genuine Apple products at ErcelStore
      <br />offering you premium quality, expert support, fast delivery,<br />
      and secure shopping all in one place.
    </p>
  </div>
  <!-- do from here  -->
  <div class="container">
    <div class="row">
      <!-- filter section  -->
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px">Model Year</h5>

                <div class="mb-2">
                  <input type="checkbox" id="2020" class="form-check-input shadow-none me-1" />
                  <label for="2020" class="form-check-label">2020</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="2021" class="form-check-input shadow-none me-1" />
                  <label for="2021" class="form-check-label">2021</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="2022" class="form-check-input shadow-none me-1" />
                  <label for="2022" class="form-check-label">2022</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="2023" class="form-check-input shadow-none me-1" />
                  <label for="2023" class="form-check-label">2023</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="2024" class="form-check-input shadow-none me-1" />
                  <label for="2024" class="form-check-label">2024</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="2025" class="form-check-input shadow-none me-1" />
                  <label for="2025" class="form-check-label">2025</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px">Color</h5>

                <div class="mb-2">
                  <input type="checkbox" id="silver" class="form-check-input shadow-none me-1" />
                  <label for="silver" class="form-check-label">Silver</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="midnightblack" class="form-check-input shadow-none me-1" />
                  <label for="midnightblack" class="form-check-label">Midnight Black</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="spacegray" class="form-check-input shadow-none me-1" />
                  <label for="spacegray" class="form-check-label">Space Gray</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="deserttitanium" class="form-check-input shadow-none me-1" />
                  <label for="deserttitanium" class="form-check-label">Desert Titanium</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="matblack" class="form-check-input shadow-none me-1" />
                  <label for="matblack" class="form-check-label">Mat Black</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="purple" class="form-check-input shadow-none me-1" />
                  <label for="purple" class="form-check-label">Purple</label>
                </div>

                <div class="mb-2">
                  <input type="checkbox" id="blue" class="form-check-input shadow-none me-1" />
                  <label for="blue" class="form-check-label">Blue</label>
                </div>
              </div>

              <!-- <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;">Price</h5>
            <label class="form-label">Minimum</label>
            <input type="number" class="form-control shadow-none mb-3">
            <label class="form-label">Maximum</label>
            <input type="number" class="form-control shadow-none">
            </div> -->
            </div>
          </div>
        </nav>
      </div>

      <!-- product section  -->
      <div class="col-lg-9 col-md-12 px-4" id="mackbook">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="Images/Products-Img/Macbook-Pro.jpg" class="img-fluid rounded" />
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5>Macbook Air 13"</h5>
              <!-- <h6 class="mb-2">$1,399.00</h6> -->
              <div class="specifications mb-3 mt-2 fw-light">
                <ul class="list-unstyled mb-2" style="font-size: 1rem; font-weight: 500">
                  <li>10-Core CPU</li>
                  <li>10-Core GPU</li>
                  <li>24GB Unified Memory</li>
                  <li>512GB SSD Storage¹</li>
                </ul>
                <ul class="list-unstyled mb-3" style="font-size: 1rem">
                  <li>16-core Neural Engine</li>
                  <li>13.6-inch Liquid Retina display with True Tone²</li>
                  <li>12MP Center Stage camera</li>
                  <li>MagSafe 3 charging port</li>
                  <li>Two Thunderbolt 4 ports</li>
                  <li>Support for up to two external displays</li>
                  <li>Magic Keyboard with Touch ID</li>
                  <li>Force Touch trackpad</li>
                  <li>35W Dual USB-C Port Compact Power Adapter</li>
                </ul>
                <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6>$1,399.00</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm text-white btn-dark shadow-none w-100">More details</a>
            </div>
          </div>
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