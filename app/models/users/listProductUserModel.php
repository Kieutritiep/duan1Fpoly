<?php
class listProductUsersModel{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    }
}