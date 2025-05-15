<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
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
                <h3 class="mb-4">SETTINGS</h3>
                <!-- General settings section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General settings modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_input"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_input"
                                            class="form-control shadow-none" rows="5" required></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about"
                                        class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Shutdown section  -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>

                                    <input onchange="update_shutdown(this.value)" class="form-check-input"
                                        type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">No customers will be allowed to buy products, when shutdown mode is turn
                            on.</p>
                    </div>
                </div>

                <!-- contact details section  -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Us Settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>

                                <!-- iframe   -->
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- contact details modal  -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_input"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_input"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Numbers (with country
                                                        code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="pn1" id="pn1_input"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="pn2" id="pn2_input"
                                                            class="form-control shadow-none">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email</label>
                                                    <input type="text" name="email" id="email_input"
                                                        class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_input"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-instagram"></i></span>
                                                        <input type="text" name="insta" id="insta_input"
                                                            class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-twitter"></i></span>
                                                        <input type="text" name="tw" id="tw_input"
                                                            class="form-control shadow-none">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">iFrame Src</label>
                                                    <input type="text" name="iframe" id="iframe_input"
                                                        class="form-control shadow-none" required>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_input(contacts_data)"
                                        class="btn btn-text-secondary shadow-none"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- support team about us section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Support Team Settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#team-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <!-- fetching data inside this div -->
                        <div class="row" id="team-data">
                        </div>
                    </div>
                </div>

                <!-- support team settings modal -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team Member</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="member_name" id="member_name_input"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="member_picture" id="member_picture_input"
                                            accept=".jpg, .jpeg, .png" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="member_name.value='', member_picture.value=''"
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


    <?php
    require('inc/scripts.php');
    ?>

    <script>
        let contscts_data;
        let general_data;

        let general_s_form = document.getElementById('general_s_form')
        let site_title_input = document.getElementById('site_title_input');
        let site_about_input = document.getElementById('site_about_input');
        let contacts_s_form = document.getElementById('contacts_s_form')

        let team_s_form = document.getElementById('team_s_form');
        let member_name_input = document.getElementById('member_name_input');
        let member_picture_input = document.getElementById('member_picture_input');

        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_input.value = general_data.site_title;
                site_about_input.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }
                else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }

            xhr.send('get_general')
        }

        general_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            update_general(site_title_input.value, site_about_input.value)
        })

        function update_general(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();

            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                var myModal = document.getElementById('general-s')
                var modal = bootstrap.Modal.getInstance(myModal)

                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'Changes saved!');
                    get_general();
                }
                else {
                    alert('error', 'No changes made!');

                }
            }
            xhr.send('site_title=' + encodeURIComponent(site_title_val) +
                '&site_about=' + encodeURIComponent(site_about_val) +
                '&update_general=1');
        }

        function update_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (this.responseText == 1 && general_data.shutdown == 0) {
                    alert('success', 'Site has been shutdown!');
                    get_general();
                }
                else {
                    alert('success', 'Shutdown mode off!');

                }
                get_general();
            }
            xhr.send('update_shutdown=' + val);

        }

        // imp 
        function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                }
                iframe.src = contacts_data[9];
                contacts_input(contacts_data);

            }

            xhr.send('get_contacts')
        }

        function contacts_input(data) {
            let contacts_input_id = ['address_input', 'gmap_input', 'pn1_input', 'pn2_input', 'email_input', 'fb_input', 'insta_input', 'tw_input', 'iframe_input'];

            for (i = 0; i < contacts_input_id.length; i++) {
                document.getElementById(contacts_input_id[i]).value = data[i + 1];
            }
        }

        contacts_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            update_contacts();
        })

        function update_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
            let contacts_input_id = ['address_input', 'gmap_input', 'pn1_input', 'pn2_input', 'email_input', 'fb_input', 'insta_input', 'tw_input', 'iframe_input'];
            let data_str = "";

            for (let i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + encodeURIComponent(document.getElementById(contacts_input_id[i]).value) + '&';
            }

            data_str += "update_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                var myModal = document.getElementById('contacts-s')
                var modal = bootstrap.Modal.getInstance(myModal)

                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'Changes saved!');
                    get_contacts();
                }
                else {
                    alert('success', 'No changes made!');

                }
            };

            xhr.send(data_str);
        }
        // imp ends 

        // team support
        team_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            add_members();
        })

        function add_members() {
            let data = new FormData(); //creating object of FormData named interface
            data.append('name', member_name_input.value);
            data.append('picture', member_picture_input.files[0]);
            data.append('add_members', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.onload = function () {

                var myModal = document.getElementById('team-s')
                var modal = bootstrap.Modal.getInstance(myModal)

                modal.hide();
                if (this.responseText == 'inv_img') {
                    alert('error', 'Only jpg, jpeg, png images are allowed!');
                }
                else if (this.responseText == 'inv_size') {
                    alert('error', 'Image should be less than 2MB!');
                }
                else if (this.responseText == 'upload_failed') {
                    alert('error', 'Image upload failed. Server down!');
                }
                else {
                    alert('success', 'New member added!')
                    member_name_input.value = '';
                    member_picture_input.value = '';
                    get_members();

                }
            }

            xhr.send(data);
        }

        function get_members() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                document.getElementById('team-data').innerHTML = this.responseText;
            }

            xhr.send('get_members')
        }

        function remove_member(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert('success', 'Member removed!');
                    get_members();
                } else {
                    alert('error', 'Server down!');
                }
            }

            xhr.send('remove_member=' + encodeURIComponent(val));
        }


        window.onload = function () {
            get_general();
            get_contacts();
            get_members();
        }
    </script>
</body>

</html>