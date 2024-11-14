<?php
    class detailProductAdminController{
        public $detailProduct;
        public function __construct(){
            $this->detailProduct = new detailProductAdminModel;
        }
        public function detailProducts(){
            require_once './views/admin/products/detailProductAdmin.php';
        }
    }