<?php
    class cart_trongController{
        public $connCart_trong;
        public function __construct(){
            $this->connCart_trong = new cart_trongModel;
        }
        public function cart_trong(){
            require_once './views/users/carts/cart_trong.php';
        }
    }