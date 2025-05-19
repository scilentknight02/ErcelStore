<?php
require('inc/essentials.php');
require('inc/dbconfig.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
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
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">FEATURES & FACILITIES</h3>

                <!-- facilities section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Facilities</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#facility-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 550px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top" style="z-index: 2;">
                                    <tr>
                                        <th scope="col" class="bg-dark text-light">S.N</th>
                                        <th scope="col" class="bg-dark text-light">Icon</th>
                                        <th scope="col" class="bg-dark text-light">Name</th>
                                        <th scope="col" class="bg-dark text-light" width="40%">Description</th>
                                        <th scope="col" class="bg-dark text-light">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="facilities-data">
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- facilities modal -->
                <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="facility_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Facility</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="facility_name" class="form-control shadow-none"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Icon</label>
                                        <input type="file" name="facility_icon" accept=".svg, .jpg, .png"
                                            class="form-control shadow-none" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Description</label>
                                        <textarea name="facility_desc" class="form-control shadow-none"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- feature section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#feature-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top" style="z-index: 2;">
                                    <tr>
                                        <th scope="col" class="bg-dark text-light">S.N</th>
                                        <th scope="col" class="bg-dark text-light">Name</th>
                                        <th scope="col" class="bg-dark text-light">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data">
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!-- feature modal -->
                <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="feature_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Feature</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="feature_name" class="form-control shadow-none"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-text-secondary shadow-none"
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

    <script>
        let feature_s_form = document.getElementById("feature_s_form");
        let facility_s_form = document.getElementById("facility_s_form");
        // feature section 
        feature_s_form.addEventListener("submit", function (e) {
            e.preventDefault();
            add_feature();
        });

        function add_feature() {
            let data = new FormData(); // creating object of FormData named interface
            data.append('name', feature_s_form.elements['feature_name'].value);
            data.append('add_feature', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById("feature-s");
                var modal = bootstrap.Modal.getInstance(myModal);

                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'New feature added!');
                    feature_s_form.elements['feature_name'].value = '';
                    get_features();
                } else {
                    alert('error', 'Server Down!');
                }
            };

            xhr.send(data);
        }

        function get_features() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                document.getElementById("features-data").innerHTML = this.responseText;
            };

            xhr.send("get_features");
        }

        function remove_feature(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert("success", "Feature removed!");
                    get_features();
                } else if (this.responseText == 'product_added') {
                    alert('error', 'Feature is added in product!')
                }
                else {
                    alert("error", "Server down!");
                }
            };

            xhr.send("remove_feature=" + encodeURIComponent(val));
        }

        // facility section 
        facility_s_form.addEventListener("submit", function (e) {
            e.preventDefault();
            add_facility();
        });

        function add_facility() {
            let data = new FormData(); // creating object of FormData named interface
            data.append('name', facility_s_form.elements['facility_name'].value); // frm_data
            data.append('icon', facility_s_form.elements['facility_icon'].files[0]); // frm_data
            data.append('desc', facility_s_form.elements['facility_desc'].value); // frm_data

            data.append('add_facility', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById("facility-s"); // facility model id hit
                var modal = bootstrap.Modal.getInstance(myModal);

                modal.hide();

                if (this.responseText == "inv_img") {
                    alert("error", "Only svg, jpg, png images are allowed!");
                } else if (this.responseText == "inv_size") {
                    alert("error", "Image should be less than 1MB!");
                } else if (this.responseText == "upload_failed") {
                    alert("error", "Image upload failed. Server down!");
                } else {
                    alert('success', 'New facility added!');
                    facility_s_form.reset();
                    get_facilities();
                }
            };

            xhr.send(data);
        }

        function get_facilities() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                document.getElementById("facilities-data").innerHTML = this.responseText;
            };

            xhr.send("get_facilities");
        }

        function remove_facility(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert("success", "Facility removed!");
                    get_facilities();
                } else if (this.responseText == 'product_added') {
                    alert('error', 'Facility is added in product!')
                }
                else {
                    alert("error", "Server down!");
                }
            };

            xhr.send("remove_facility=" + encodeURIComponent(val));
        }

        window.onload = function () {
            get_features();
            get_facilities();
        }
    </script>

</body>

</html>