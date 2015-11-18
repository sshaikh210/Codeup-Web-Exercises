<?php
require_once "../lib/auth.php";
require_once "../lib/Input.php";
session_start();

Auth::logout();
    header("Location: login.php");
    die();

?>