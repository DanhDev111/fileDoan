<?php
//function để lấy dữ liệu từ DB về
function index(){
    include_once 'connect/openConnect.php';
    $sql_select="select * from category";
    $brands = mysqli_query($connect,$sql_select);
    include_once './connect/closeConnect.php';
    return $brands;
}

//    Function lưu dữ liệu lên DB
function store(){
    $category_name = $_POST['category_name'];
    include_once 'connect/openConnect.php';
    $sql = "INSERT INTO category(category_name) VALUES ('$category_name')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
//function lấy dữ liệu trên db dựa theo id
function edit(){
    $id = $_GET['category_id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM category WHERE category_id = '$id'";
    $brands = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $brands;
}
//    function update dữ liệu trên db
function update(){
    $id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    include_once 'connect/openConnect.php';
    $sql = "UPDATE category SET category_name = '$category_name' WHERE category_id = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
//fucntion xóa dữ liệu trên db
function destroy(){
    $id = $_GET['category_id'];
    include_once 'connect/openConnect.php';
    $sql = "DELETE FROM category WHERE category_id = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}

switch ($action){
    case '':
        //Lấy dữ liệu từ DB về
        $brands = index();
        break;
    case 'store':
//            Lưu dữ liệu lên DB
        store();
        break;
    case 'edit':
        //Lấy dữ liệu từ DB về dựa trên id
        $brands = edit();
        break;
    case 'update':
        //chỉnh sửa dữ liệu lên db
        update();
        break;
    case 'destroy':
        //xóa dữ liệu trên db
        destroy();
        break;
}
?>


