<?php
    class detailcommentsAdminController{
        public $detailComment;
        public function __construct(){
            $this->detailComment = new detailCommentAdminModel;
        }
        public function detailcomments(){
            require_once './views/admin/comments/detailComment.php';
        }
    }