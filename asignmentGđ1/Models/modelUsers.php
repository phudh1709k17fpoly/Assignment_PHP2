<?php
require_once  "connectData.php";
class user extends connectData {
    public function getUser(){
    $sql = "SELECT * FROM `user`";
    return $this->getData($sql);
    }
    public  function getOneUser(){
        $sql = "SELECT * FROM `user` WHERE `id` = $_GET[id]";
        return $this->getData($sql,false);
    }
    public function  addUserModel(){
          $sql = "INSERT INTO `user`(`name`, `age`, `adress`) VALUES ('$_POST[ten]',$_POST[tuoi],'$_POST[diachi]')";
          $this->getData($sql,false);
    }

    public function editUserModel(){
            $sql = "UPDATE `user` SET `name`='$_POST[ten]',`age`=$_POST[tuoi],`adress`='$_POST[diachi]'  WHERE `id`= $_GET[id] ";
            $this->getData($sql,false);
        }
    public function delete()
    {
        $sql = "DELETE FROM `user` WHERE `id`= $_GET[id]";
        $this->getData($sql,false);
    }


}