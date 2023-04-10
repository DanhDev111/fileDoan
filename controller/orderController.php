<?php
// Lay hanh dong dang thuc hien
$action='';
if (isset($_GET['action'])){
    $action=$_GET['action'];
}
// Kiem tra hanh dong dang thuc hien
switch ($action){
    case '':
        // Tuc la cai nay se lam viec va lay du lieu ve
        include_once 'views/orders/index.php';
        include_once 'models/orderModel.php';

        break;
    case 'create':
        include_once 'views/orders/create.php';
        break;
    case 'store':
        include_once 'models/orderModel.php';
        header("Location:index.php?controller=order");
        break;
    case 'edit':
        //Hiển thị form sửa
        include_once 'models/orderModel.php';
        include_once 'views/order/edit.php';
        break;
    case 'update':
        include_once 'models/orderModel.php';
        header('Location:index.php?controller=order');
        break;
    case 'destroy':
        include_once 'models/orderModel.php';
        header('Location:index.php?controller=order');
        break;
}


?>

