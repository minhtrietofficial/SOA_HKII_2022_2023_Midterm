<?php

$controllers = array(
    'trangchu' => ['index','login_table', 'error', 'logout'],
    'quyen' => ['index', 'insert', 'edit'],
    'phanquyen' => ['index', 'insert', 'edit'],
    'account' => ['index', 'insert', 'edit'],
    'table' => ['index', 'detail','manage','edit','insert'],
    'category' => ['index', 'insert', 'edit'],
    'session' => ['index', 'detail','detail_session','menu_dish_cate', 'order_dish', 'pay','insert','menu'],
    'invoice' => ['index', 'detail','detail_session', 'order_dish', 'pay','insert'],
    'dish' => ['index', 'insert', 'edit'],






); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.



if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'trangchu';
    $action = 'error';
}

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
include_once('controllers/' . $controller . '_controller.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
