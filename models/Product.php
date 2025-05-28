<?php 
class Product extends Model{
    protected $table = "products"; // Tên bảng
    private $conn;
    // Phương thức khởi tạo
    public function __construct(){
        $this->conn = new Model();
    }
    // Lấy ra tất cả bản ghi 
    public function getAllProduct(){
        $this->conn->setSql("SELECT * FROM $this->table");
        return $this->conn->all();
    }
}
?>