<?php 
    class ProductController {
        // Hiện thị
        public function index(){
            // Gọi model tương ứng
            $modelPro = new Product();
            // var_dump($modelPro->getAllProduct());
            $products = $modelPro->getAllProduct();
            // Giao diện 
            include_once 'views/product/list.php';
        }
        public function create(){
            include_once 'views/product/add.php';
        }
    }
?>