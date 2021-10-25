<?php
require_once 'AutoLoader.php';
include 'header.php';

if($_SESSION["principle"] == null || $_SESSION["principle"] == FALSE || isset($_SESSION["principle"])){
    header("Location: index.html");
}