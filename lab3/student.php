<?php
class student extends humans{
    private $diemtoan;
    private $diemly;
    private $diemhoa;
    public function  __construct($fullName,$address,$birthYear,$email,$numberPhone,$diemtoan,$diemly,$diemhoa)
    {
        parent::__construct($fullName,$address,$birthYear,$email,$numberPhone);
        $this->diemtoan = $diemtoan;
        $this->diemly = $diemly;
        $this->diemhoa = $diemhoa;
    }
    private function tinhDiemTrungBinh(){
        $diemtb = ($this->diemtoan + $this->diemly + $this->diemhoa) / 3;
        return $diemtb;
    }
    public function thongTinHocSinh(){
        echo $this->displayInformation()."</br> Điểm TB :".$this->tinhDiemTrungBinh();
    }

}