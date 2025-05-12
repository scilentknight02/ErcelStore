<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ErcelStore - Home</title>

  <!-- swiperjs cdn start -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- swiperjs cdn end -->

  <?php
  require('Includes/links.php');
  ?>
  <style>
    * {
      font-family: "Poppins", sans-serif;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .h-font {
      font-family: "Merienda", sans-serif;
    }

    .custom-bg {
      background-color: #2ec1ac;
      border: #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
      border-color: #2ec1ac;
    }

    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    Firefox input[type="number"] {
      -moz-appearance: textfield;
    }

    .password-container {
      position: relative;
      width: 100%;
    }

    .form-control {
      padding-right: 40px;
    }

    .eye-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .eye-icon:hover {
      transform: translateY(-50%) scale(1.1);
      opacity: 0.8;
    }

    .carimg {
      height: 450px;
      width: 100%;
      object-fit: contain;
      object-position: center;
      background: #fff;
      display: block;
    }
  </style>
</head>

<body>
  <?php
  require('Includes\header.php');
  ?>


  <!-- main content start -->

  <!-- Carousel start -->
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel1.jpg" class="w-100 carimg" ~>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel2.jpg" class="w-100 carimg">
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel3.jpg" class="w-100 carimg">
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel4.jpg" class="w-100 carimg">
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel5.jpg" class="w-100 carimg">
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Images\Carousel\carousel6.jpg" class="w-100 carimg">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- <div class="video-controller">
  <video autoplay muted loop class="video">
    <source src="mac.mp4" type="video/mp4">
    Your browser does not support video tag.
  </video>
</div> -->
  <!-- Carousel end -->

  <!-- check availability form start-->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check availability</h5>
        <form action="">
          <div class="row align-items-end">
            <!-- Product Select -->
            <div class="col-lg-3">
              <label class="form-label">Select Product</label>
              <select class="form-select shadow-none" id="selectProduct">
                <option value="" disabled selected>Select Item</option>
                <option value="macbook">Macbook</option>
                <option value="iphone">iPhone</option>
                <option value="ipad">iPad</option>
                <option value="macmini">Mac Mini</option>
                <option value="imac">iMac</option>
              </select>
            </div>

            <!-- Modal Select -->
            <div class="col-lg-3">
              <label class="form-label">Select Modal</label>
              <select class="form-select shadow-none" id="selectModal">
                <option value="" disabled selected>Select Modal</option>
              </select>
            </div>

            <!-- Variant Select -->
            <div class="col-lg-3">
              <label class="form-label">Select Variant</label>
              <select class="form-select shadow-none" id="selectVariant">
                <option value="" disabled selected>Select Variant</option>
              </select>
            </div>

            <!-- Color Select -->
            <div class="col-lg-2">
              <label class="form-label">Select Color</label>
              <select class="form-select shadow-none" id="selectColor">
                <option value="" disabled selected>Select Color</option>
              </select>
            </div>

            <!-- Submit Button -->
            <div class="col-lg-1 mt-3">
              <button type="submit" name="buy" class="btn text-white shadow-none custom-bg">
                <a href="checkout.php" class="text-decoration-none text-black">Buy</a>
              </button>
            </div>
          </div>
        </form>

        <script>
          const selectProduct = document.getElementById("selectProduct");
          const selectModal = document.getElementById("selectModal");
          const selectVariant = document.getElementById("selectVariant");
          const selectColor = document.getElementById("selectColor");

          const modals = {
            macbook: ["M1 Pro", "M2 Pro", "M3 Pro", "M4 Pro"],
            iphone: [
              "iPhone 14 Pro Max",
              "iPhone 14 Pro",
              "iPhone 14 Plus",
              "iPhone 14",
              "iPhone 15 Pro Max",
              "iPhone 15 Pro",
              "iPhone 15 Plus",
              "iPhone 15",
              "iPhone 16 Pro Max",
              "iPhone 16 Pro",
              "iPhone 16 Plus",
              "iPhone 16",
            ],
            ipad: ["iPad Air", "iPad Pro", "iPad Mini"],
            macmini: ["M1 Chip", "M1 Pro Chip", "M2 Chip", "M2 Pro Chip", "M3 Chip", "M3 Pro Chip", "M4 Chip", "M4 Pro Chip"],
            imac: ["iMac 24-inch", "iMac 27-inch", "iMac Pro"],
          };

          const variants = {
            macbook: [
              "8/256GB",
              "8/512GB",
              "16/256GB",
              "16/512GB",
              "16/1TB",
              "32/512GB",
              "32/1TB",
            ],
            iphone: ["128GB", "256GB", "512GB", "1TB"],
            ipad: ["128GB", "256GB", "512GB", "1TB"],
            macmini: ["8/256GB", "16/256GB", "16/512GB", "16/1TB", "16/2TB", "24/512GB", "24/1TB", "24/2TB"],
            imac: ["Standard", "Nano-texture Display"],
          };

          const colors = {
            macbook: [
              "Space Gray",
              "Silver White",
              "Rose Gold",
              "Midnight Gray",
              "Midnight Black",
            ],
            iphone: ["Mat Black", "White", "Blue", "Titanium Desert"],
            ipad: ["Space Gray", "Mat Black"],
            macmini: ["Silver"],
            imac: ["White", "Silver", "Rose Gold", "Purple"],
          };

          selectProduct.addEventListener("change", function () {
            const selectedProduct = this.value;

            // Clear old options
            selectModal.innerHTML =
              '<option value="" disabled selected>Select Modal</option>';
            selectVariant.innerHTML =
              '<option value="" disabled selected>Select Variant</option>';
            selectColor.innerHTML =
              '<option value="" disabled selected>Select Color</option>';

            // Populate Modal
            if (modals[selectedProduct]) {
              modals[selectedProduct].forEach(function (modal) {
                const option = document.createElement("option");
                option.value = modal.toLowerCase().replace(/\s+/g, "-");
                option.textContent = modal;
                selectModal.appendChild(option);
              });
            }

            // Populate Variant
            if (variants[selectedProduct]) {
              variants[selectedProduct].forEach(function (variant) {
                const option = document.createElement("option");
                option.value = variant.toLowerCase().replace(/\s+/g, "-");
                option.textContent = variant;
                selectVariant.appendChild(option);
              });
            }

            // Populate Color
            if (colors[selectedProduct]) {
              colors[selectedProduct].forEach(function (color) {
                const option = document.createElement("option");
                option.value = color.toLowerCase().replace(/\s+/g, "-");
                option.textContent = color;
                selectColor.appendChild(option);
              });
            }
          });
        </script>
      </div>
    </div>
  </div>
  <!-- check availability form end -->

  <!-- Our Products start -->
  <h2 class="mt-5 mb-4 text-center fw-bold h-font text-decoration-underline">
    Our Products
  </h2>
  <div class="container">
    <h1 class="mt-5 mb-4 text-center fw-bold h-font">
      Choose your new MacBook
    </h1>
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Pro.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Pro 14"</h5>
            <h6 class="mb-2">$1,999.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
                <li>12-Core CPU</li>
                <li>16-Core GPU</li>
                <li>24GB Unified Memory</li>
                <li>512GB SSD Storage¹</li>
              </ul>
              <ul class="list-unstyled mb-0" style="font-size: 1rem">
                <li>16-core Neural Engine</li>
                <li>14-inch Liquid Retina XDR display²</li>
                <li>
                  Three Thunderbolt 5 ports, HDMI port, SDXC card slot,
                  headphone jack, MagSafe 3 port
                </li>
                <li>Magic Keyboard with Touch ID</li>
                <li>Force Touch trackpad</li>
                <li>70W USB-C Power Adapter</li>
              </ul>
              <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
            </div>
            <div class="button d-flex justify-content-between">
              <a href="#"><button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-apple"> Buy</i>
                </button></a>
              <a href="cart.html">
                <button type="button" class="btn btn-primary btn-sm mt-2" onclick='addToCart({
    name: "Macbook Pro 14\"",
    price: 1999,
    image: "Images/Products-Img/Macbook-Pro.jpg"
  })'>
                  <i class="bi bi-cart-plus"></i> Cart
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Pro.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Pro 14"</h5>
            <h6 class="mb-2">$2,399.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
                <li>14-Core CPU</li>
                <li>20-Core GPU</li>
                <li>24GB Unified Memory</li>
                <li>1TB SSD Storage¹</li>
              </ul>
              <ul class="list-unstyled mb-0" style="font-size: 1rem">
                <li>16-core Neural Engine</li>
                <li>14-inch Liquid Retina XDR display²</li>
                <li>
                  Three Thunderbolt 5 ports, HDMI port, SDXC card slot,
                  headphone jack, MagSafe 3 port
                </li>
                <li>Magic Keyboard with Touch ID</li>
                <li>Force Touch trackpad</li>
                <li>96W USB-C Power Adapter</li>
              </ul>
              <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
            </div>
            <div class="button d-flex justify-content-between">
              <a href="#"><button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-apple"> Buy</i>
                </button></a>
              <a href="cart.html">
                <button type="button" class="btn btn-primary btn-sm mt-2" onclick='addToCart({
    name: "Macbook Pro 14\"",
    price: 2399,
    image: "Images/Products-Img/Macbook-Pro.jpg"
  })'>
                  <i class="bi bi-cart-plus"></i> Cart
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Pro.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Pro 16"</h5>
            <h6 class="mb-2">$2,499.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
                <li>14-Core CPU</li>
                <li>20-Core GPU</li>
                <li>24GB Unified Memory</li>
                <li>512GB SSD Storage¹</li>
              </ul>
              <ul class="list-unstyled mb-0" style="font-size: 1rem">
                <li>16-core Neural Engine</li>
                <li>16-inch Liquid Retina XDR display²</li>
                <li>
                  Three Thunderbolt 5 ports, HDMI port, SDXC card slot,
                  headphone jack, MagSafe 3 port
                </li>
                <li>Magic Keyboard with Touch ID</li>
                <li>Force Touch trackpad</li>
                <li>140W USB-C Power Adapter</li>
              </ul>
              <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
            </div>
            <div class="button d-flex justify-content-between">
              <a href="#"><button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-apple"> Buy</i>
                </button></a>
              <a href="cart.html">
                <button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-cart-plus"></i> Cart
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Air.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Pro 13"</h5>
            <h6 class="mb-2">$999.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
                <li>10-Core CPU</li>
                <li>8-Core GPU</li>
                <li>16GB Unified Memory</li>
                <li>256GB SSD Storage¹</li>
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
                <li>30W USB-C Power Adapter</li>
              </ul>
              <i class="bi bi-apple"> Apple Intelligence<sup>∆</sup></i>
            </div>
            <div class="button d-flex justify-content-between">
              <a href="#"><button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-apple"> Buy</i>
                </button></a>
              <a href="cart.html">
                <button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-cart-plus"></i> Cart
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Air.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Pro 13"</h5>
            <h6 class="mb-2">$1,199.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
                <li>10-Core CPU</li>
                <li>10-Core GPU</li>
                <li>16GB Unified Memory</li>
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
            <div class="button d-flex justify-content-between">
              <a href="#"><button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-apple"> Buy</i>
                </button></a>
              <a href="cart.html">
                <button type="button" class="btn btn-primary btn-sm mt-2">
                  <i class="bi bi-cart-plus"></i> Cart
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow pt-3 px-2 py-2" style="max-width: 350px; margin: auto">
          <img src="Images/Products-Img/Macbook-Air.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5>Macbook Air 13"</h5>
            <h6 class="mb-2">$1,399.00</h6>
            <div class="specifications mb-4 mt-2 fw-light">
              <ul class="list-unstyled mb-2" style="font-size: 1.4rem; font-weight: 600">
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
            <div class="button d-flex justify-content-between">
              <button type="button" class="btn btn-primary btn-sm mt-2" onclick='addToCart({
                name: "Macbook Air 13\"",
                price: 1399,
                image: "Images/Products-Img/Macbook-Pro.jpg"
              })'>
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>

              <a href="cart.html" class="btn btn-primary btn-sm mt-2">
                <i class="bi bi-cart-plus"></i> View Cart
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Products >>></a>
      </div>
    </div>
  </div>
  <!-- Our Products end -->

  <!-- Our Facilities Start -->
  <h2 class="mt-5 mb-4 text-center fw-bold h-font text-decoration-underline">
    Our Facilities
  </h2>
  <div class="container">
    <!-- First Row -->
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/fast-delivery.svg" alt="fast delivery image" width="80px"
          class="rounded-circle" />
        <h5 class="mt-5">Free & Fast Delivery</h5>
      </div>
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/authentic.jpg" alt="genuine image" width="80px" class="rounded-circle" />
        <h5 class="mt-5">100% Authentic Products</h5>
      </div>
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/easy-return.jpg" alt="easy return image" width="80px" class="rounded-circle" />
        <h5 class="mt-5">Easy Returns & Exchange</h5>
      </div>
    </div>

    <!-- Second Row -->
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/multiple-payment.jpg" alt="multiple payment image" width="80px"
          class="rounded-circle" />
        <h5 class="mt-5">Multiple Payment Options</h5>
      </div>
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/student-discount.png" alt="student discount image" width="80px"
          class="rounded-circle" />
        <h5 class="mt-5">Student Discounts</h5>
      </div>
      <div class="col-lg-3 col-md-3 bg-white text-center rounded shadow py-4 my-3">
        <img src="Images/Facilities-Img/student-discount.png" alt="student discount image" width="80px"
          class="rounded-circle" />
        <h5 class="mt-5">24/7 Support</h5>
      </div>
    </div>
  </div>
  <!-- Our Facilities End -->


  <!-- testimonials start -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-decoration-underline">
    Testimonials
  </h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="Images/Features/star.png" width="30px" />
            <h6 class="m-0 ms-2">Random Customer1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magni
            praesentium, similique molestiae iusto ducimus culpa maxime dicta
            in deserunt!
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="Images/Features/star.png" width="30px" />
            <h6 class="m-0 ms-2">Random Customer2</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magni
            praesentium, similique molestiae iusto ducimus culpa maxime dicta
            in deserunt!
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-light p-4">
          <div class="profile d-flex align-item-center mb-3">
            <img src="Images/Features/star.png" width="30px" />
            <h6 class="m-0 ms-2">Random Customer3</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magni
            praesentium, similique molestiae iusto ducimus culpa maxime dicta
            in deserunt!
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
  </div>
  <!-- testimonials end -->

  <!-- About Us Start -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">About Us</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
        <p class="about-text">
          ~Welcome to <span class="fs-5 text-dark fw-bold">ErcelStore</span>,
          your premium destination for all Apple products in Kathmandu, Nepal.
          Whether you're looking for the latest iPhone, a new MacBook, iPad,
          or iMac, we offer top-tier Apple products with the best customer
          service in town.
        </p>
        <p class="about-text">
          Our store is committed to delivering the best Apple experience. We
          aim to provide our customers with cutting-edge products, competitive
          pricing, and quick delivery services to ensure that your experience
          with us is seamless and satisfying.
        </p>
      </div>
      <div class="col-lg-4 col-md-4">
        <img src="Images/About-Img/ercelstore.jpg" alt="Apple Products" class="img-fluid rounded" />
      </div>
    </div>
  </div>

  <!-- About Us End -->

  <!-- contact us start -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14133.192431325024!2d85.33402185187914!3d27.677179769194222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f2804a02bf%3A0x85468199859b2d8d!2sKoteshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1745927344874!5m2!1sen!2snp"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-light p-4 rounded mb-3">
          <h5>Call us</h5>
          <a href="tel:+9779861252006" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9779861252006
          </a>
          <br />
          <a href="tel:+9779805143919" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9779805143919
          </a>
        </div>
        <div class="bg-light p-4 rounded">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <br />
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          <br />
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- contact us end -->

  <!-- main content end -->
  <?php
  require('Includes\footer.php');
  ?>



  <!-- swiperjs script cdn start -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- swiperjs script cdn end -->

  <!-- Initialize Swiper -->
  <script>
    // testimonial swiper
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

  <!-- script to find login modal -->
  <script>
    window.onload = function () {
      const urlParams = new URLSearchParams(window.location.search);
      const loginModal = urlParams.get("loginModal");

      if (loginModal === "true") {
        // Trigger your login modal opening
        // Example if you are using Bootstrap Modal:
        var myModal = new bootstrap.Modal(
          document.getElementById("loginModal")
        );
        myModal.show();
      }
    };
  </script>
  <!-- cart js file -->
  <script>
    function addToCart(product) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.push(product);
      localStorage.setItem("cart", JSON.stringify(cart));
      window.location.href = "cart.html"; // Redirect after adding
    }
  </script>

  <!-- for carousel -->
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <script src="Scripts/registerScript.js"></script>
  <script src="Scripts/passShowHide.js"></script>
</body>

</html>