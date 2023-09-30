<?php 
require_once "db.php";
function getProducts(){
    $sql = "SELECT * FROM `customer`";
    return getData($sql);
}
function addct(){
    if(isset($_POST["submit"])){
        $ten = $_POST["ten"];
        $tuoi = $_POST["tuoi"];
        if(empty($ten) || empty($tuoi)){
            $error['ct'] = 'Vui long dien du thong tin'; 
        }
        if(!isset($error['ct'])){
            $sql = "INSERT INTO `customer`(`ten`, `tuoi`) VALUES ('$ten',$tuoi)";
            getData($sql,false);
            $success = "Thàng công <a href='?'>đi đến danh sách</a>";
        }
        if(isset($error['ct'] )){
            return [$error['ct']];
        }else{
            return [$success];
        }
    }
}
function editct(){
    if(isset($_POST["submit"])){
        $ten = $_POST["ten"];
        $tuoi = $_POST["tuoi"];
        if(empty($ten) || empty($tuoi)){
            $error['ct'] = 'Vui long dien du thong tin'; 
            echo "thaats bai";
        }
        if(!isset($error['ct'])){
            $sql = "UPDATE `customer` SET `ten`='$ten',`tuoi`='$tuoi' WHERE `id` = $_GET[id]";
            getData($sql,false);
            echo("<script>location.href ='?url=/';</script>");
        }
    } 
}
function viewOneCustomer(){
   $sql = "SELECT * FROM `customer` WHERE `id`= $_GET[id]";
   return getData($sql,false);
}


function deletectCustomer(){
   $sql = "DELETE FROM `customer` WHERE `id`= $_GET[id]";
   getData($sql,false);
   echo("<script>location.href ='?';</script>");
}