<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
 
// Require toàn bộ file Controllers admin
// Require toàn bộ file Controllers users
require_once './controllers/users/listProductUserController.php';

// Require toàn bộ file Models admin


// Require toàn bộ file Models users
require_once './models/users/listProductUserModel.php';

// Route
$act = $_GET['act'] ?? '/';
// Điều hướng dựa trên giá trị $act
try {
    if (strpos($act, 'admin/') === 0) {
        // Điều hướng cho phần quản trị
        $adminAction = substr($act, 6); 
        match ($adminAction) {
            
        };
    } else {
        // điều hướng cho phần quản trị viên
        match ($act) {
            '/' => (new listProductUsersController())->listProductUser(),
             
            default => throw new Exception('404 Not Found', 404),
        };
    }
} catch (Exception $e) {
    http_response_code($e->getCode());
    echo $e->getMessage();
}
