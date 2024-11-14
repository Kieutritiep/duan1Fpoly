<?php
    class capacityAdminController{
        public $capacity;
        public function __construct(){
            $this->capacity = new capacityAdminModel;
        }
        public function capacity(){
            require_once './views/admin/variant/capacity.php';
        }
    }