<?php
    class cart_detailsController{
        public $connCart_details;
        public function __construct(){
            $this->connCart_details = new cart_detailsModel;
        }
        public function cart_details(){
            require_once './views/users/carts/cart_details.php';
        }
    }