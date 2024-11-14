<?php
class cart_detailsModel{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
}