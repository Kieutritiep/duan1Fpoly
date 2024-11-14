<?php
class cart_trongModel{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
}