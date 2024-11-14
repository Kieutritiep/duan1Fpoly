<?php
    class listcustomersAdminController{
        public $listCustomerAdmin;
        public function __construct(){
            $this->listCustomerAdmin = new listCustomerAdminModel;
        }
        public function listcustomers(){
            require_once './views/admin/customer/listCustomer.php';
        }
    }