<?php
class cartModel{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
}