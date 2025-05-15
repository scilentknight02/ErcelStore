<?php
require('Includes/frontend_essentials.php');

session_start();
session_destroy();
redirect('login.php');
?>