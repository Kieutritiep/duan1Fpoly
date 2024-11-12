<?php
    class registerController {
        public function __construct() {
            $this->loginController = new registerModel;
        }
        public function register() {
            require_once './views/users/register/register.php';
        }
    }