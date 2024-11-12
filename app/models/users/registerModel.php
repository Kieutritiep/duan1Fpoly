<?php
    class registerModel{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
    }