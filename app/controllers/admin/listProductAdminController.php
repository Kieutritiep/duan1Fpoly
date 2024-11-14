<?php
    class listProductAdminController{
        public $olderAdmin;
        public function __construct(){
            $this->olderAdmin = new listProductAdminModel;
        }
        public function listProducts(){
            require_once './views/admin/products/listPrductAdmin.php';
        }
    }