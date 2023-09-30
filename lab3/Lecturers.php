<?php
class lecturers extends humans {
    private $luongCB;
    private  $soGioDay;
    public function __construct($fullName,$address,$birthYear,$email,$numberPhone,$luongCB,$soGioDay)
    {
        parent::__construct($fullName,$address,$birthYear,$email,$numberPhone);
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }

    private function tinhluong(){
        $luong = $this->luongCB * $this->soGioDay;
        return $luong;
    }

    public function thongTinGiangVien(){
        echo $this->displayInformation()."</br> Lương GV : ".$this->tinhluong();
    }
}