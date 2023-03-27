<?php
require_once('connection.php');
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');


if (!isset($_SESSION['IdNV'])) {
    header('location:login.php');
}
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
}else {
        $controller = 'table';
        $action = 'index';
    }


require_once('routes.php');