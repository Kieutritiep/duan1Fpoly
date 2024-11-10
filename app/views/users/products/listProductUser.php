<?php
    require_once $_SERVER['DOCUMENT_ROOT'] .'/baseDuanpoly/app/views/users/layout/header.php';
?><!-- start Banner -->
        <div class="container" style="padding:0 80px;">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="./public/images/banner3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="./public/images/banner2.png" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
                <div class="carousel-item">
                <img src="./public/images/banner1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            <!-- end Banner -->
            <div class="d-flex align-items-center justify-content-center mt-5">
                <img src="./public/images/logoApplemain.png" alt="" class="img-fluid" style="width: 20px; height: 22px;">
                <p class="text-white mb-0 ms-2 fw-bold">iPhone</p>
            </div>
            <!-- start main -->
            <div class="d-flex">
                <!-- start aside -->
                <aside class="mt-5 col-12 col-md-3 p-4" style="background-color: #323232; border-radius: 10px; max-height: 500px; overflow-y: auto;">
                    <div>
                        <h5 class="text-white">Danh mục sản phẩm</h5>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="product">
                            <p class="text-white mb-0 ms-2">iPhone 14</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="product">
                            <p class="text-white mb-0 ms-2">iPhone 13</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="product">
                            <p class="text-white mb-0 ms-2">iPhone 12</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="product">
                            <p class="text-white mb-0 ms-2">iPhone 12</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="product">
                            <p class="text-white mb-0 ms-2">iPhone 12</p>
                        </a>
                    </div>
                    <div>
                        <h5 class="text-white">Xắp xếp theo</h5>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="loc">
                            <p class="text-white mb-0 ms-2">Bán chạy</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="loc">
                            <p class="text-white mb-0 ms-2">Gía thấp đến cao</p>
                        </a>
                        <a href="" class="d-flex align-items-center p-2 rounded hover-block text-decoration-none">
                            <input type="radio" name="loc">
                            <p class="text-white mb-0 ms-2">Gía cao đến thấp</p>
                        </a>
                    </div>
                </aside>
                <!-- end aside -->
                <!-- start main -->
            <main class="p-4 mt-4" style="flex: 0 0 76%;">
                <div class="row g-4">
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000 <sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000<sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="" class=" text-decoration-none">
                            <div class="product-card text-white rounded-3 p-3 h-100 d-flex flex-column justify-content-between shadow-sm">
                                <img src="./public/images/iphone-16-pro-sa-mac-650x650.png" alt="Product 1" class="img-fluid product-image">
                                <div class="text-center mt-4">
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">256GB</span>
                                    <span style="background-color: #1C1C1D; border-radius: 5px; padding: 5px;">512GB</span>
                                </div>
                                <p class="text-center product-text mt-4 fw-bold">iphone 16 promax</p>
                                <p class="text-center product-text">34.990.000<sup>đ</sup></p>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] .'/baseDuanpoly/app/views/users/layout/footter.php';
?>
