<?php
//    Lấy hành động đang thực hiện
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//Kiểm tra hành động đang thực hiện
switch ($action){
    case '':
        include_once 'views/brands/index.php';
        include_once 'models/brandModel.php';
        break;
    case 'create':
        include_once 'views/brands/create.php';
        break;
    case 'store':
        include_once 'models/brandModel.php';
        header('Location:index.php?controller=brand');
        break;
    case 'edit':
        include_once 'models/brandModel.php';
        include_once 'views/brands/edit.php';
        break;
    case 'update':
        include_once 'models/brandModel.php';
        header('Location:index.php?controller=brand');
        break;
    case 'destroy':
        include_once 'models/brandModel.php';
        header('Location:index.php?controller=brand');
        break;
}
?>

