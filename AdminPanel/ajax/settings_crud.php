<?php
require('../inc/dbconfig.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sn`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['update_general'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sn`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}

if (isset($_POST['update_shutdown'])) {
    $frm_data = ($_POST['update_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sn`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}

// contact
if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` WHERE `sn`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['update_contacts'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE contact_details SET `address` =?, `gmap` =?, `pn1` =?, `pn2` =?, `email` =?, `fb` =?, `insta` =?, 
    `tw` =?, `iframe` =? WHERE sn = ?";
    $values = [
        $frm_data['address'],
        $frm_data['gmap'],
        $frm_data['pn1'],
        $frm_data['pn2'],
        $frm_data['email'],
        $frm_data['fb'],
        $frm_data['insta'],
        $frm_data['tw'],
        $frm_data['iframe'],
        1
    ];
    $res = update($q, $values, 'sssssssssi');
    echo $res;
}

if (isset($_POST['add_members'])) {
    $frm_data = filteration($_POST);
    $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);

    if ($img_r == 'inv_img') {
        echo $img_r;
    } else if ($img_r == 'inv_size') {
        echo $img_r;
    } else if ($img_r == 'upload_failed') {
        echo $img_r;
    } else {
        $q = "INSERT INTO `team_details` (`name`, `picture`) VALUES (?, ?)";
        $values = [$frm_data['name'], $img_r];
        $res = insert($q, $values, 'ss');
        echo $res;
    }
}

if (isset($_POST['get_members'])) {
    $result = selectAll('team_details');
    while ($row = mysqli_fetch_assoc($result)) {
        $path = ABOUT_IMG_PATH;
        echo <<<data
           <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                    <img src="$path$row[picture]" alt="">
                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="remove_member($row[sn])" class="btn btn-danger btn-sm shadow-none">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </div>
                    <p class="card-text text-center px-3 py-2">$row[name]</p>
                </div>
        </div>
        data;
    }
}

if (isset($_POST['remove_member'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['remove_member']];
    $pre_q = "SELECT * FROM `team_details` WHERE `sn`=?";
    $result = select($pre_q, $values, "i");
    $img = mysqli_fetch_assoc($result);

    if (deleteImage($img['picture'], ABOUT_FOLDER)) {
        $q = "DELETE FROM `team_details` WHERE sn=?";
        $result = delete($q, $values, 'i');
        echo $result;
    } else {
        echo 0;
    }
}

?>