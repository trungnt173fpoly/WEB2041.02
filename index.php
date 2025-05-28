<?php 
// Trong MVC 
// M - Model => tầng kết nối với csdl và thực thao tác với CSDL
// Thao tác (Thực câu lênh truy vấn, thêm, chỉnh sửa, xóa )
// include_once 'models/Model.php';
// Khởi tạo đối tượng
// $model = new Model();
// var_dump($model->getConnection());
include_once 'configs/env.php';
include_once 'configs/helper.php';
// $model = new Model();
// var_dump($model->getConnection());
include 'views/product/add.php';
?>