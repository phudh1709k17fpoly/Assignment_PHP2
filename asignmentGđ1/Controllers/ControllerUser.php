<?php
require_once "./Models/modelUsers.php";

class ControllerUser {
    public function publicUser(){
     $user =  new user();
     $ttuser = $user->getUser();
     require_once "Views/User/view.php";
    }
    public function addUser(){
    if(isset($_POST['submitUser'])){
        if(empty($_POST['ten'])){
            $error['ten'] = "Vui lòng nhập lại tên";
        }
        if (empty($_POST['tuoi'])){
            $error['tuoi'] = "Vui lòng nhập lại tuổi";
        }
        if (empty($_POST['diachi'])){
            $error['diachi'] = "Vui lòng nhập lại địa chỉ";
        }

        if(!isset($error)){
            echo  "thành công";
            $add = new user();
            $add->addUserModel();
            $success = "cập nhập thành công <a href='?url=user'>Quay lại</a>";
        }
    }
    require_once "Views/User/add.php";
    }

    public function editUser(){
        if(isset($_POST['updateUser'])){
            if(empty($_POST['ten'])){
                $error['ten'] = "Vui lòng nhập lại tên";
            }
            if (empty($_POST['tuoi'])){
                $error['tuoi'] = "Vui lòng nhập lại tuổi";
            }
            if (empty($_POST['diachi'])){
                $error['diachi'] = "Vui lòng nhập lại địa chỉ";
            }
            if(!isset($error)){
                $edit = new user();
                $edit->editUserModel();
                $success = "cập nhập thành công <a href='?url=user'>Quay lại</a>";
            }
        }
        $user =  new user();
        $publicOne = $user->getOneUser();
      require_once "Views/User/edit.php";
    }
    public function delete(){
        $user =  new user();
        $user->delete();

    echo("<script>location.href ='?url=user';</script>");
    }
}
