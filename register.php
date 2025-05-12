<?php
// require('Includes/dbconfig.php');
// require('Includes/essentials.php');

// session_start();
// if((isset($_SESSION['customerlogin']) && $_SESSION['customerlogin'] == true)){
//     redirect('customer_dashboard.php');
// }
require('Includes/header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php
  require('Includes/links.php');
  ?>
  <style>
    .login-form {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: auto;
    }

    /* .custom-alert {
  position: fixed;
  top: 25px;
  right: 25px;
} */
  </style>
</head>

<body>

  <!-- Modal Login -->

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST" onsubmit="return form_validate()">
      <h4 class="bg-dark text-white py-3">Register Now</h4>
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your
        IDs (Citizenship,
        Passport, Driving License, etc)
      </span>
      <div class="p-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" name="fname" id="fname" class="form-control shadow-none" placeholder="First Name"
              required />
            <span id="fname_msg"></span>

          </div>
          <div class="col-md-6 mb-3">
            <input type="text" name="lname" id="lname" class="form-control shadow-none" placeholder="Last Name"
              required />
            <span id="lname_msg"></span>

          </div>
          <div class="col-md-6 mb-3">
            <input type="email" name="email" id="email" class="form-control shadow-none" placeholder="Email" required />
            <span id="email_msg"></span>

          </div>
          <div class="col-md-6 mb-3">
            <input type="text" name="phone" id="phone" class="form-control shadow-none" placeholder="Phone Number"
              required />
            <span id="phone_msg"></span>

          </div>
          <div class="col-md-6 mb-3">
            <select name="gender" class="form-control shadow-none" required>
              <option value="" disabled selected>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>

          </div>
          <div class="col-md-6 mb-3">
            <input type="date" name="dob" id="dob" class="form-control shadow-none" placeholder="Date of Birth"
              required />

          </div>
          <div class="col-md-6 mb-4">
            <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="Password"
              required />
            <span id="password_msg"></span>
          </div>

          <div class="col-md-6 mb-4">
            <input type="password" name="cpassword" id="cpassword" class="form-control shadow-none"
              placeholder="Confirm Password" required />
            <span id="cpassword_msg"></span>

          </div>
          <div class="col-md-12 mb-4 d-flex justify-content-between align-items-center">
            <button type="submit" name="register" id="register"
              class="btn text-dark custom-bg shadow-none">Register</button>
            <p>Already have an account?
              <a href="login.php" class="text-decoration-none"> Login</a>
            </p>
          </div>
        </div>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['register'])) {
    // print_r($_POST);
    $frm_data = filter($_POST);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $verify_query = mysqli_query($con, "SELECT email FROM customer WHERE email='$email'");
    if (mysqli_num_rows($verify_query) != 0) {
      echo "<script>
                    alert('Email already exists.');
                    window.location.href='register.php';
                </script>";
      exit();
    } else {
      // // Hash the password before inserting it into the database
      // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  
      // Insert the data into the database with the hashed password
      $sql = "INSERT INTO customer (first_name, last_name, email, phone, gender, date_of_birth, password) 
                    VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$dob', '$password')";
      $result = mysqli_query($con, $sql);

      if ($result) {
        echo "<script>
                    alert('Registration successful. Please login.');
                    window.location.href='login.php';
                </script>";
        exit();
      } else {
        echo "<script>alert('Data insertion failed: " . mysqli_error($conn) . "');</script>";
      }
    }
  }
  ?>

  <?php
  require('Includes/scripts.php');
  ?>
  <script src="./Scripts/passShowHide.js"></script>
  <script src="Scripts/registerScript.js"></script>
</body>

</html>