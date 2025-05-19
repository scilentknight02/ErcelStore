<?php
session_start();
require('Includes/header.php');

if ((isset($_SESSION['customerlogin']) && $_SESSION['customerlogin'] === true)) {
  redirect('customer_dashboard.php');
}
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
      width: 450px;
    }
  </style>
</head>

<body>

  <!-- Modal Login -->

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
      <h4 class="bg-dark text-white py-3">Login Now</h4>
      <div class="p-4">
        <div class="mb-3">
          <input name="email" type="email" class="form-control shadow-none" placeholder="Email" required />
        </div>
        <div class="mb-4">
          <input name="password" type="password" class="form-control shadow-none" placeholder="Password" required />
        </div>
        <p class="d-flex justify-content-between align-items-center ">
          <span><a class="text-decoration-none" href="forgot-password.php">Forget Password</a></span>
          <span><a class="text-decoration-none" href="register.php">Register Now</a></span>
        </p>
        <div>
          <button type="submit" name="login" id="login" class="btn text-dark custom-bg shadow-none">
            <span>Login</span>
          </button>
        </div>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['login'])) {
    // print_r($_POST);
    $frm_data = filteration($_POST);
    $query = "SELECT * FROM `customer` WHERE `email` = ? AND `password` = ?";
    $values = [$frm_data['email'], $frm_data['password']];
    $res = select($query, $values, "ss");

    if ($res->num_rows == 1) {
      $row = mysqli_fetch_assoc($res);
      $_SESSION['customerlogin'] = true;
      $_SESSION['cid'] = $row['id'];
      redirect('customer_dashboard.php');
    } else {
      alert("error", "Login Failed - Invalid Credentials!");
    }
  }
  ?>

  <?php
  require('Includes/scripts.php');
  ?>
</body>

</html>