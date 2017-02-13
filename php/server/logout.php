<?php
require_once './auth.php';
logout();
$_SESSION["logout"] = "You have logged out of the Dashboard.";
header("Location: /login.php");
die();
