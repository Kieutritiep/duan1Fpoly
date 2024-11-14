<?php
    class detailOdersAdminController{
        public $detailOlder;
        public function __construct(){
            $this->detailOlder = new detailOlderAdminModel;
        }
        public function detailOders(){
            require_once './views/admin/older/detailOlderAdmin.php';
        }
    }