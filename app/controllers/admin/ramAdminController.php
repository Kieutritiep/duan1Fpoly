<?php
    class ramAdminController{
        public $ramAdmin;
        public function __construct(){
            $this->ramAdmin = new ramAdminModel;
        }
        public function ram(){
            require_once './views/admin/variant/ram.php';
        }
    }