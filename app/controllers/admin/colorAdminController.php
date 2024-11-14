<?php
    class colorAdminController{
        public $Comment;
        public function __construct(){
            $this->Comment = new commentAdminModel;
        }
        public function color(){
            require_once './views/admin/variant/color.php';
        }
    }