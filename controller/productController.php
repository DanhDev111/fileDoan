<?php
//    Lấy hành động đang thực hiện
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action){
    case '':
        //Hiển thị danh sách san pham
        include_once 'views/product/index.php';
        include_once 'models/productModel.php';

        break;
    case 'create':
        include_once 'views/product/create.php';
        break;
    case 'store':
        include_once 'models/productModel.php';
        header("Location:index.php?controller=product");
        break;
    case 'edit':
        //Hiển thị form sửa
        include_once 'models/productModel.php';
        include_once 'views/product/edit.php';
        break;
    case 'update':
        include_once 'models/productModel.php';
        header('Location:index.php?controller=product');
        break;
    case 'destroy':
        include_once 'models/productModel.php';
        header('Location:index.php?controller=product');
        break;

}
?>

