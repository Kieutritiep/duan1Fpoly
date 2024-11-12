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
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        padding-left: 16px;
        padding-right: 16px;
    }
    .menu-link:hover {
        background-color: #e0e0e0;
        color: #000;
    }
    .menu-link.active {
        background-color: #007bff;
        color: white; 
    }
    /* css from login */
    .container1 {
        display: flex;
        justify-content: center;
        /* background: #081b29; */
        min-height: 100vh;
    }
    .wrapper {
        position: relative;
        width: 750px;
        height: 500px;
        background: transparent;
        background: #081b29;
        overflow: hidden;
        border: 2px solid #0ef;
    }
    .wrapper .form-box.login {
        left: 0;
        padding: 0 60px 0 40px;
    }
    .wrapper .form-box.login .animation {
        transform : translateX(0);
        opacity: 1;
        filter:blur(0);
        transition:.7s ease;
        transition-delay: calc(.1s * var(--j));
    }
    .wrapper.active .form-box.login .animation {
        transform : translateX(-120%);
        opacity: 0;
        filter:blur(10px);
        transition-delay: calc(.1s * var(--i));
    }
    .wrapper .form-box.register {
        right: 0;
        padding: 0 60px 0 40px;
    }
    .wrapper .form-box.register .animation {
        opacity: 0;
        filter: blur(10px);
        transition-delay: calc(.1s * var(--j));
        transform: translateX(120%);
        transition: .7s ease;
    }

    .wrapper.active .form-box.register .animation {
        transform: translateX(0);
        opacity: 1;
        filter: blur(0);
        transition-delay: calc(.1s * var(--i));
    }

    .wrapper .form-box {
        position: absolute;
        top: 0;
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .form-box h2 {
        font-size: 32px;
        color: #fff;
        text-align: center;
    }
    .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 25px 0;
    }
    .input-box input {
        width: 100%;
        height: 50px;
        border: none; 
        outline: none;
        font-size:16px;
        border-bottom: 2px solid #0ef;
        color: #fff;
        background-color: transparent;
    }
    .input-box input:focus + label,
    .input-box input:not(:placeholder-shown) + label {
        top: -1px;
        font-size: 15px;
        color: #0ef;
    }

    .input-box:focus-within i,
    .input-box input:not(:placeholder-shown) + i {
        color: #0ef;
    }


    .input-box label {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
    }

    .input-box i {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
    }
    .btn {
        position: relative;
        width: 100%;
        height: 45px;
        border: 2px solid #0ef;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 16px;
        color: #fff;
        font-weight: 600;
        /* background: transparent; */
    }
    .btn:hover {
        /* background: ; */
        color: #fff;
    }
    .logreg-link {
        font-size: 15px;
        color: #fff;
        text-align: center;
    }
    .logreg-link p a {
        font-weight: 600;
        color: #0ef;
        text-decoration: none;
    }
    .logreg-link p a:hover {
        color: #0ef;
        text-decoration: underline;
    }
    .info-text{
        position: absolute;
        top:0;
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .info-text.login{
        right: 0;
        text-align: right;
        padding:0 40px 50px 120px;
    }
    .wrapper .info-text.login .animation {
        transform : translateX(0);
        opacity: 1;
        filter:blur(0);
        transition:.7s ease;
        transition-delay: calc(.1s * var(--j));
    }
    .wrapper.active .info-text.login .animation {
        transform : translateX(120%);
        opacity: 0;
        filter:blur(10px);
        transition-delay: calc(.1s * var(--i));
    }
    .info-text.register{
        left: 0;
        text-align: left;
        padding:0 120px 50px 40px;
        /* display: none; */
        pointer-events: none;
    }
    .wrapper .info-text.register .animation {
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
    }
    .wrapper.active .info-text.register .animation {
        transform: translateX(0);
        opacity: 1;
        filter: blur(0);
        transition-delay: calc(.1s * var(--i));  
    }
    .info-text h2{
        font-size: 32px;
        color: #fff;
        line-height:1.3;
        text-transform:uppercase;
    }
    .info-text p{
        font-size: 16px;
        color: #fff;
        line-height:1.3;
        text-transform:uppercase;
    }
    .bg-animate{
        position: absolute;
        top: -4;
        right: 0;
        width: 850px;
        height: 600px;
        background: linear-gradient(45deg,#081b29,#0ef);
        border-bottom:3px solid #0ef;
        transform:rotate(10deg) skewY(35deg);
        transform-origin:bottom right;
        transition:1.5s ease;
        transition-delay:1.6s
    }
    .active .bg-animate{
        transform:rotate(0) skewY(0);
        transition-delay:0.5s
    }
    .bg-animate2{
        position: absolute;
        top: 100%;
        left: 250px;
        width: 850px;
        height: 700px;
        background: #081b29;
        border-top:3px solid #0ef;
        transform:rotate(0) skewY(0);
        transform-origin:bottom left;
        transition:1.5s ease;
        transition-delay: .5s
    }
    .active .bg-animate2{
        transform:rotate(-12deg) skewY(-42deg);
        transition-delay:1.2s
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
                    <a href="" class="menu-link text-reset text-decoration-none px-3 py-2 d-block">Trang Chủ</a>
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
        <a href="" class="position-relative text-reset text-decoration-none">
            <i class="fa-solid fa-cart-shopping me-5 fs-4"></i>
            <p class="position-absolute top-0 start-50 translate-middle bg-danger text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 20px; height: 20px; font-size: 12px;">1</p>
        </a>
    </div>
</header>
        <!-- end header -->
        