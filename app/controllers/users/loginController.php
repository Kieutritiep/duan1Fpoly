<?php
    class loginController {
        public function __construct() {
            $this-> loginController = new loginModel;
        }
        public function login() {
            require_once './views/users/login/login.php';
        }
    }