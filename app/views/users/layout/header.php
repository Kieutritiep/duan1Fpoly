<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Latest Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/styles.css">
</head>
<style>
    .product-card {
    background-color: #323232;
    border-radius: 10px;
    padding: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    }
    .product-card .product-image {
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-image {
        transform: translateY(-10px); 
    }
    .product-card:hover .product-text {
        color: #FF80FF;
        transition: color 0.3s ease; 
    }
    .product-card:hover {
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }
    .menu-link {
        display: block; /* Đảm bảo a tag chiếm toàn bộ chiều rộng */
        width: 100%; /* Đảm bảo chiếm toàn bộ chiều rộng */
        height: 100%; /* Đảm bảo chiếm toàn bộ chiều cao */
        border-radius: 5px; /* Bo góc */
        transition: background-color 0.3s ease; /* Hiệu ứng mượt khi hover */
        padding-left: 16px; /* padding mặc định từ px-3 */
        padding-right: 16px; /* padding mặc định từ px-3 */
    }
    .menu-link:hover {
        background-color: #e0e0e0;
        color: #000;
    }

    /* Màu nền khi mục được chọn */
    .menu-link.active {
        background-color: #007bff;
        color: white; 
    }
    
</style>
<body>
    <div class="" style="background-color: #3E3E3F;">
        <!-- start header -->
        <header class="w-100 mb-5">
    <div class="pe-5 ps-5 py-3 bg-black text-white d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="border-end pe-4 d-flex flex-column justify-content-center align-items-center" style="height: 60px;">
                <p class="mb-0 fw-bold" style="color: white; text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6);">iPhone Lux</p>
                <p class="mb-0" style="color: white; text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6);">store</p>
            </div>
            <img class="ms-3" style="width:40px; height:50px;" src="./public/images/logo.png" alt="">
        </div>
        <div class="flex-grow-1">
            <ul class="d-flex list-unstyled m-0 justify-content-center">
                <li class="mx-3">
                    <a href="index.php?act=home" class="menu-link text-reset text-decoration-none px-3 py-2 d-block">Trang Chủ</a>
                </li>
                <li class="mx-3">
                    <a href="#" class="menu-link text-reset text-decoration-none px-3 py-2 d-block">Sản phẩm mới ra mắt</a>
                </li> 
                <li class="mx-3">
                    <a href="#" class="menu-link text-reset text-decoration-none px-3 py-2 d-block">Sản phẩm cũ</a>
                </li>
            </ul>
        </div>

        <form class="position-relative">
            <input type="text" class="form-control rounded-4 pe-5 me-5" placeholder="Search" required>
            <i class="fa-solid fa-magnifying-glass position-absolute top-50 end-0 translate-middle-y me-3" style="color: gray;"></i>
        </form>
        <a href="#" class="text-decoration-none text-reset">
            <i class="fa-solid fa-user me-5 ms-5 fs-4"></i>
        </a>
        <a href="index.php?act=cart_dt" class="position-relative text-reset text-decoration-none">
            <i class="fa-solid fa-cart-shopping me-5 fs-4"></i>
            <p class="position-absolute top-0 start-50 translate-middle bg-danger text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 20px; height: 20px; font-size: 12px;">1</p>
        </a>
    </div>
</header>
        <!-- end header -->
        