<?php
include_once "controllers/Customer.php";
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
include_once "views/header.php";
switch($url){
    case "/" :
    listProducts();
    break;
    case "add-ct":
    addProducts();
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