<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
 
// Require toàn bộ file Controllers admin
// Require toàn bộ file Controllers users
require_once './controllers/users/listProductUserController.php';
require_once './controllers/users/loginController.php';
require_once './controllers/users/registerController.php';


// Require toàn bộ file Models admin


// Require toàn bộ file Models users
require_once './models/users/listProductUserModel.php';
require_once './models/users/loginModel.php';
require_once './models/users/registerModel.php';

// Route
$act = $_GET['act'] ?? '/';
// Điều hướng dựa trên giá trị $act
try {
    if (strpos($act, 'admin/') === 0) {
        // Điều hướng đến admin
        $adminAction = substr($act, 6); 
        match ($adminAction) {
            
        };
    } else {
        // điều hướng đến user
        match ($act) {
            '/' => (new listProductUsersController())->listProductUser(),

            'login' => (new loginController())->login(),
            'register' => (new registerController())->register(),
            'cart_dt'=> include "./views/users/carts/cart_details.php",
            'cart_trong'=> include "./views/users/carts/cart_trong.php",
            'home'=> include "./views/users//products/listProductUser.php",
            default => throw new Exception('404 Not Found', 404),
        };
    }
    
} catch (Exception $e) {
    http_response_code($e->getCode());
    echo $e->getMessage();
}
