<?php

// frontend process data
define('SITE_URL', 'http://localhost:8000/');
define('ABOUT_IMG_PATH', SITE_URL . 'Images/About-Img/');


// backend upload process need this data
define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/Images/');
define('ABOUT_FOLDER', 'About-Img/');

function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin'] == true)) {
        echo "<script>
            window.location.href='login.php';
        </script>";
        exit;
    }
}

function customerLogin()
{
    session_start();
    if (!(isset($_SESSION['customerlogin']) && $_SESSION['customerlogin'] == true)) {
        echo "<script>
            window.location.href='index.php';
        </script>";
    }
}

function redirect($url)
{
    echo "
    <script>
        window.location.href='$url';
    </script>
    ";
    exit;

}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade custom-alert show" role="alert">
    <strong class="me-2">$msg</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

function uploadImage($image, $folder)
{
    $valid_mime = ['image/jpeg', 'image/png', 'image/webp'];
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; // invalid image or format
    }

    if ($image['size'] / (1024 * 1024) > 2) {
        return 'inv_size'; // invalid size greater than 2MB
    }

    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $rname = 'IMG_' . random_int(11111, 99999) . ".$ext";
    $upload_folder = UPLOAD_IMAGE_PATH . $folder;

    if (!is_dir($upload_folder)) {
        mkdir($upload_folder, 0777, true);
    }

    $img_path = $upload_folder . $rname;

    if (move_uploaded_file($image["tmp_name"], $img_path)) {
        return $rname;
    } else {
        return "upload_failed";
    }
}

function deleteImage($image, $folder)
{
    if (unlink(UPLOAD_IMAGE_PATH . $folder . $image)) {
        return true;
    } else {
        return false;
    }
}

?>