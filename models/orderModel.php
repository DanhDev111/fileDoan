<?php
// function de lay du lieu tu db ve
function index(){
    include_once 'connect/openConnect.php';
    $query = "SELECT * FROM orders ORDER BY order_id ASC";
    $orders = mysqli_query($connect, $query);
    include_once 'connect/closeConnect.php';
    return $orders;
}
function store(){
    $order_date=$_POST["order_date"];
    $status=$_POST["status"];
    $customer_id=$_POST["customer_id"];
    include_once 'connect/openConnect.php';
    $query_insert = "INSERT INTO orders (customer_id, order_date, status) VALUES ('$customer_id', '$order_date', '$status')";
    mysqli_query($connect, $query_insert);
    include_once 'connect/closeConnect.php';
}
switch ($action){
    case'':
        // Lay du lieu tu DB ve sau đó đổ dữ liệu lên mục views
        $orders=index();
        break;
    case 'store':
        store();
        break;
    case 'create':
        $orders = createProduct();
        break;
    case 'edit':
        $orders=edit();
        break;
    case 'update':
        update();
        break;
    case 'destroy':
        destroy();
        break;
}
?>

