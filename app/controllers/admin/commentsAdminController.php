<?php
    class commentsAdminController{
        public $Comment;
        public function __construct(){
            $this->Comment = new commentAdminModel;
        }
        public function comments(){
            require_once './views/admin/comments/listCommentAdmin.php';
        }
    }