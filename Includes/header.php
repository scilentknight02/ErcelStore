<?php
require('AdminPanel/inc/dbconfig.php');
require('AdminPanel/inc/essentials.php');

$contact_q = "SELECT * FROM `contact_details` WHERE `sn` = ?";
$value = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $value, 'i'));
?>
<!-- fetch contact details -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <?php
  require('links.php');
  ?>
  <style>
    .password-container {
      position: relative;
      width: 100%;
    }

    /* Style for the input fields */
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

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .dropdown-menu {
      transition: all 0.3s ease;
    }
  </style>
</head>

<body>
  <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!-- Left: Logo -->
      <a class="navbar-brand fw-bold fs-3 h-font" href="index.php">ErcelStore</a>

      <!-- Toggle Button for Mobile -->
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center: Navigation Links -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link me-3" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link me-3" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link me-3" href="facilities.php">Facilities</a></li>
          <li class="nav-item"><a class="nav-link me-3" href="contact.php">Contact Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link me-3" href="products.php">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="products.php#macbook">MacBooks</a></li>
              <li><a class="dropdown-item" href="products.php#iphone">iPhones</a></li>
              <li><a class="dropdown-item" href="products.php#ipad">iPads</a></li>
              <li><a class="dropdown-item" href="products.php#imac">iMacs</a></li>
            </ul>
          </li>

        </ul>


      </div>

      <!-- Right: Login/Register Buttons -->
      <div class="d-none d-lg-flex">
        <a href="./login.php" class="btn shadow-none border-0 me-2">Login</a>
        <a href="./register.php" class="btn shadow-none border-0">Register</a>
      </div>
    </div>
  </nav>


  <!-- header end -->

  <!-- script to find login modal -->
  <script>
    window.onload = function () {
      const urlParams = new URLSearchParams(window.location.search);
      const loginModal = urlParams.get("loginModal");

      if (loginModal === "true") {
        var myModal = new bootstrap.Modal(
          document.getElementById("loginModal")
        );
        myModal.show();
      }
    };
  </script>
  <?php
  require('scripts.php');
  ?>
</body>

</html>