<?php
    class categorysAdminController{
        public $category;
        public function __construct(){
            $this->category = new categorysAdminModel;
        }
        public function categorysController(){
            require_once './views/admin/category/listCategory.php';
        }
    }