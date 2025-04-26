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
    </style>
  </head>
  <body>
    <!-- header start -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top"
    >
      <div class="container-fluid">
        <!-- Left Column - Logo -->
        <a class="navbar-brand fw-bold fs-3 h-font" href="index.php"
          >ErcelStore</a
        >

        <button
          class="navbar-toggler shadow-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarSupportedContent"
        >
          <!-- Center Column - Navigation items -->
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active me-3 text-primary"
                aria-current="page"
                href="index.php"
                >Home</a
              >
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle me-3"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Macbooks</a></li>
                <li><a class="dropdown-item" href="#">Iphones</a></li>
                <li><a class="dropdown-item" href="#">Ipads</a></li>
                <li><a class="dropdown-item" href="#">iMacs</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link me-3" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>

          <!-- Right Column - Login button -->
          <div class="d-flex ms-auto mt-3 mt-lg-0">
            <button
              type="button"
              class="btn btn-outline-dark shadow-none me-lg-3 me-3"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
              id="login"
            >
              Login
            </button>
            <button
              type="button"
              class="btn btn-outline-dark shadow-none me-lg-3 me-3"
              data-bs-toggle="modal"
              data-bs-target="#registrationModal"
              id="register"
            >
              Register
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Modal Login -->
    <div
      class="modal fade"
      id="loginModal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="login.php" method="post">
            <!-- <?php
           // Display error messages if any
           if (isset($_GET['error'])) {
               echo "<div class='alert alert-danger'>" . htmlspecialchars($_GET['error']) . "</div>";
           }
       ?> -->
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-circle fs-5 me-2"> User Login</i>
              </h5>
              <button
                type="reset"
                class="btn-close shadow-none"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control shadow-none"
                  required
                />
              </div>
              <div class="mb-4">
                <label class="form-label">Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control shadow-none"
                  required
                />
              </div>
              <div
                class="d-flex justify-content-between align-items-center mb-2 ms-2 me-2"
              >
                <button
                  type="submit"
                  name="login_btn"
                  id="login_btn"
                  class="btn btn-dark shadow-none"
                >
                  Login
                </button>
                <a
                  href="javascript: void(0)"
                  class="text-decoration-none text-primary"
                  >Forget Password</a
                >
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Register -->
    <div
      class="modal fade"
      id="registrationModal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form
            action="registration.php"
            method="post"
            onsubmit="return form_validate()"
          >
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-lines-fill"> User Registration</i>
              </h5>
              <button
                type="reset"
                class="btn-close shadow-none"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <span
                class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"
                >Note: Your details must match with your ID (Citizenship,
                Passport, Driving License, etc)
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">First Name</label>
                    <input
                      type="text"
                      name="fname"
                      id="fname"
                      class="form-control shadow-none"
                    />
                    <span id="fname_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Last Name</label>
                    <input
                      type="name"
                      name="lname"
                      id="lname"
                      class="form-control shadow-none"
                    />
                    <span id="lname_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control shadow-none"
                    />
                    <span id="email_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Phone</label>
                    <input
                      type="number"
                      name="phone"
                      id="phone"
                      class="form-control shadow-none"
                    />
                    <span id="phone_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Gender</label>
                    <select
                      class="form-select shadow-none"
                      name="gender"
                      id="gender"
                    >
                      <option value="" disabled selected>Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                    <span id="gender_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Date_of_Birth</label>
                    <input
                      type="date"
                      name="dob"
                      id="dob"
                      class="form-control shadow-none"
                    />
                    <span id="dob_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Password</label>
                    <div class="password-container">
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control shadow-none"
                      />
                      <img
                        src="eye-open.png"
                        id="eyePassword"
                        alt="eye open"
                        class="eye-icon"
                      />
                    </div>
                    <span id="password_msg"></span>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Confirm Password</label>
                    <div class="password-container">
                      <input
                        type="password"
                        name="cpassword"
                        id="cpassword"
                        class="form-control shadow-none"
                      />
                      <img
                        src="eye-open.png"
                        id="eyeCpassword"
                        alt="eye open"
                        class="eye-icon"
                      />
                    </div>
                    <span id="cpassword_msg"></span>
                  </div>
                </div>
              </div>
              <div
                class="d-flex justify-content-between align-items-center mb-2 ms-2 me-2"
              >
                <button
                  type="submit"
                  name="register_btn"
                  id="register_btn"
                  class="btn btn-dark shadow-none"
                >
                  Register
                </button>
                <span>
                  Already have an account?
                  <a
                    href="javascript: void(0)"
                    class="text-decoration-none text-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal"
                    data-bs-dismiss="modal"
                    >Login</a
                  >
                </span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- header end -->

    
       <!-- bootstrap script cdn start -->
       <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap script cdn end -->
    <script src="./Scripts/registerScript.js"></script>
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
    <script src="./Scripts/passShowHide.js"></script>
  </body>
</html>
