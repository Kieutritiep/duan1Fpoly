<?php
    class cartController{
        public $connCart;
        public function __construct(){
            $this->connCart = new cartModel;
        }
        public function cart(){
            require_once './views/users/carts/cart.php';
        }
    }