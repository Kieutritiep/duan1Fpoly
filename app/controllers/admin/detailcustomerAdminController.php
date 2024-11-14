<?php
    class detailcustomersAdminController{
        public $detailCustomer;
        public function __construct(){
            $this->detailCustomer = new detailCustomerAdminModel;
        }
        public function detailcustomer(){
            require_once './views/admin/customer/detailCustomerAdmin.php';
        }
    }