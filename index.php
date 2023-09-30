<?php
require_once "Controllers/ControllerUser.php";
require_once "Views/header.php";
//
if(isset($_GET['url'])){
    $ctl = $_GET['url'];
    switch ($ctl){
        case "user":
        $view = new ControllerUser();
        $view->publicUser();
        break;
        case "add-user";
         $add = new ControllerUser();
         $add->addUser();
        break;
        case "edit-user";
          $edit = new ControllerUser();
          $edit->editUser();
        break;
        case "delete-user";
          $delete = new ControllerUser();
          $delete->delete();
        break;
    }
}
if(!isset($_GET['url'])){
    echo "HomePage";
}


