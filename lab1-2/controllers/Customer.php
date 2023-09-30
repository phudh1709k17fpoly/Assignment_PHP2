<?php
require_once "./models/Customer.php";

function listProducts(){
    $customer = getProducts();
    include_once "views/Customer/view.php";
}

function addProducts(){
    if(isset($_POST['submit'])){
        $ten = $_POST["ten"];
        $tuoi = $_POST["tuoi"];
        if(empty($ten) || empty($tuoi)){
            $error['ct'] = 'Vui long dien du thong tin';
        }
        if(!isset($error['ct'])){
           addct($ten,$tuoi);
           $error['ct'] = "Thanh cong";
        }
    }
    include_once "views/Customer/add.php";
}

function exitProducts(){
    if(isset($_POST['submit'])){
        $ten = $_POST["ten"];
        $tuoi = $_POST["tuoi"];
        if(empty($ten) || empty($tuoi)){
            $error['ct'] = 'Vui long dien du thong tin';
        }
        if(!isset($error['ct'])){
             editct($ten,$tuoi);
         echo("<script>location.href ='?url=/';</script>");
        }
    }

    $ctmer = viewOneCustomer();
    include_once "views/Customer/edit.php";
}


function deleteProducts(){
    deletectCustomer();
    echo("<script>location.href ='?';</script>");
}
?>