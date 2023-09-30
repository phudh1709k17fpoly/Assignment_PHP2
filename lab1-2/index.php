<?php
include_once "controllers/Customer.php";
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
include_once "views/header.php";
switch($url){
    case "/" :
    $customer  = listProducts();
    include_once "views/Customer/view.php";
    break;
    case "add-ct":
    $product = addProducts();
    include_once "views/Customer/add.php";
    break;
    case "edit-ct":
    $ctmer = exitProducts();
    include_once "views/Customer/edit.php";
    break;
    case "delete-ct":
    deleteProducts();
    break;
}
include_once "views/footer.php";
?>