<?php
    class odersAdminController{
        public $olderAdmin;
        public function __construct(){
            $this->olderAdmin = new olderAdminModel;
        }
        public function oders(){
            require_once './views/admin/older/older.php';
        }
    }