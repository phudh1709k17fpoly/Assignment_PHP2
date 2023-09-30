<?php 
require_once "db.php";
function getProducts(){
    $sql = "SELECT * FROM `customer`";
    return getData($sql);
}
function addct($ten,$tuoi){
     $sql = "INSERT INTO `customer`(`ten`, `tuoi`) VALUES ('$ten',$tuoi)";
     getData($sql,false);
}
function editct($ten,$tuoi){
   $sql = "UPDATE `customer` SET `ten`='$ten',`tuoi`='$tuoi' WHERE `id` = $_GET[id]";
   getData($sql,false);
}
function viewOneCustomer(){
   $sql = "SELECT * FROM `customer` WHERE `id`= $_GET[id]";
   return getData($sql,false);
}


function deletectCustomer(){
   $sql = "DELETE FROM `customer` WHERE `id`= $_GET[id]";
   getData($sql,false);
}