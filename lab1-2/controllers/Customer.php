<?php
require_once "./models/Customer.php";

function listProducts(){
    $customer = getProducts();
    return $customer;
}

function addProducts(){
   $product = addct();
   return $product;
}

function exitProducts(){
   editct();
   $ctmer = viewOneCustomer();
   return $ctmer; 
}


function deleteProducts(){
    deletectCustomer();
}
?>