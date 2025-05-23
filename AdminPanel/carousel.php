<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
    <?php
    require('inc/links.php');
    ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php')
        ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Carousel section -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CAROUSEL</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0"> Carousel Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#carousel-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <!-- fetching data inside this div -->
                        <div class="row" id="carousel-data">
                        </div>
                    </div>
                </div>

                <!-- Carousel modal -->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Carousel Image</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_input"
                                            accept=".jpg, .jpeg, .png" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="carousel_picture.value=''"
                                        class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

            <!-- choose us section  -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CHOOSE US</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0"> Choose Us Images</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#chooseus-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <!-- fetching data inside this div -->
                        <div class="row" id="chooseus-data">
                        </div>
                    </div>
                </div>

                <!-- choose us modal -->
                <div class="modal fade" id="chooseus-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="chooseus_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Choose Us Image</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Reason</label>
                                        <input type="text" name="chooseus_name" id="chooseus_name_input"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="chooseus_image" id="chooseus_image_input"
                                            accept=".jpg, .jpeg, .png" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="chooseus_name.value='', chooseus_image.value=''"
                                        class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <!-- store section  -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">STORE</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0"> Store Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#store-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <!-- fetching data inside this div -->
                        <div class="row" id="store-data">
                        </div>
                    </div>
                </div>

                <!-- store modal -->
                <div class="modal fade" id="store-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="store_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Store Image</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Store Name</label>
                                        <input type="text" name="store_name" id="store_name_input"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="store_image" id="store_image_input"
                                            accept=".jpg, .jpeg, .png" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="store_image.value=''"
                                        class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/carousel.js"></script>
</body>

</html>