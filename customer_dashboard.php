<?php
require('AdminPanel/inc/essentials.php');
customerLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <?php
    require('Includes/links.php');
    ?>
</head>

<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0">Customer Dashboard Panel</h3>
        <a class="btn btn-light btn-sm" href="logout.php">Log Out</a>
    </div>



    <?php
    require('Includes/scripts.php');
    ?>
</body>

</html>