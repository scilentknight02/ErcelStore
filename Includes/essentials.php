<?php

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
?>