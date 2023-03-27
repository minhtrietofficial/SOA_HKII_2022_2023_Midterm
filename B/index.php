<?php
require_once('connection.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

if (isset($_SESSION['active']) && ($_SESSION['active'] != "1")) {
    header('location:lock.php');
}

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    if ($_SESSION['quyen'] == "admin") {
        $controller = 'trangchu';
        $action = 'home_admin';
    }
    else{
        $controller = 'trangchu';
        $action = 'home_nhanvien';
    }
}
require_once('routes.php');

