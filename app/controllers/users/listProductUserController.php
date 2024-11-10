<?php
    class listProductUsersController{
        public $connListProduct;
        public function __construct(){
            $this->connListProduct = new listProductUsersModel;
        }
        public function listProductUser(){
            require_once './views/users/products/listProductUser.php';
        }
    }