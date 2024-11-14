<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ
 
// Require toàn bộ file Controllers admin
require_once './controllers/admin/homeAdmimController.php';
require_once './controllers/admin/capacityAdminController.php';
require_once './controllers/admin/categorysAdminController.php';
require_once './controllers/admin/colorAdminController.php';
require_once './controllers/admin/commentsAdminController.php';
require_once './controllers/admin/detailcommentsAdminController.php';
require_once './controllers/admin/detailcustomerAdminController.php';
require_once './controllers/admin/detailodersAdminController.php';
require_once './controllers/admin/detailProductsAdminController.php';
require_once './controllers/admin/listcustomersAdminController.php';
require_once './controllers/admin/listProductAdminController.php';
require_once './controllers/admin/odersAdminController.php';
require_once './controllers/admin/ramAdminController.php';
// Require toàn bộ file Controllers users
require_once './controllers/users/listProductUserController.php';
require_once './controllers/users/loginController.php';

// Require toàn bộ file Models admin
require_once './models/admin/homeAdminModel.php';
require_once './models/admin/capacityAdminModel.php';
require_once './models/admin/categorysAdminModel.php';
require_once './models/admin/colorAdminModel.php';
require_once './models/admin/commentsAdminModel.php';
require_once './models/admin/detailcustomerAdminModel.php';
require_once './models/admin/detailodersAdminModel.php';
require_once './models/admin/detailProductsAdminModel.php';
require_once './models/admin/listcustomersAdminModel.php';
require_once './models/admin/listProductsAdminModel.php';
require_once './models/admin/odersAdminModel.php';
require_once './models/admin/ramAdminModel.php';
require_once './models/admin/detailcommentsAdminModel.php';

// Require toàn bộ file Models users
require_once './models/users/listProductUserModel.php';
require_once './models/users/loginModel.php';

// Route
$act = $_GET['act'] ?? '/';
// Điều hướng dựa trên giá trị $act
try {
    if (strpos($act, 'admin/') === 0) {
        // Điều hướng đến admin
        $adminAction = substr($act, 6); 
        match ($adminAction) {
            '' => (new homeAdminController())->homeAdmin(),
            'listProducts' => (new listProductAdminController())->listProducts(),
            'detailProducts' => (new detailProductAdminController())->detailProducts(),
            'categorys' => (new categorysAdminController())->categorysController(),
            'listcustomers' => (new listcustomersAdminController())->listcustomers(),
            'detailcustomer' => (new detailcustomersAdminController())->detailcustomer(),
            'comments' => (new commentsAdminController())->comments(),
            'detailcomments' => (new detailcommentsAdminController())->detailcomments(),
            'ram' => (new ramAdminController())->ram(),
            'capacity' => (new capacityAdminController())->capacity(),
            'color' => (new colorAdminController())->color(),
            'oders' => (new odersAdminController())->oders(),
            'detailoders' => (new detailOdersAdminController())->detailOders(),
        }; 
    } else {
        // điều hướng đến user
        match ($act) {
            '/' => (new listProductUsersController())->listProductUser(),
            'login' => (new loginController())->login(),
            default => throw new Exception('404 Not Found', 404),
        };
    }
} catch (Exception $e) {
    http_response_code($e->getCode());
    echo $e->getMessage();
}
