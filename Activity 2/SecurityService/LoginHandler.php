<?php
require_once 'header.php';
require_once 'AutoLoader.php';

$username = $_POST['username'];
$password = $_POST['password'];


$ss = new SecurityService("Kurt", "QWER");


if($ss->authenticateLogin($username, $password)){
    $_SESSION["principle"] = true;
    include 'LoginPassed.php';
}
else {
    $_SESSION["principle"] = false;
    include 'LoginFailed.php';
}