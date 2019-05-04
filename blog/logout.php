<?php
require_once('helpers/config.php');
unset($_SESSION['user_data']);
session_destroy();
header('Location:index.php');
die();
?>