<?php
class humans{
    protected $fullName;
    protected $address;
    protected $birthYear;
    protected $email;
    protected $numberPhone;

    public function __construct($fullName,$address,$birthYear,$email,$numberPhone)
    {
        $this->fullName = $fullName;
        $this->address = $address;
        $this->birthYear = $birthYear;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
    }
    private function countAge(){
        return (date("Y") - $this->birthYear);
    }
    public  function displayInformation(){
        echo "Họ và tên :".$this->fullName."</br>"."Địa chỉ :".$this->address."</br>"."Tuổi :".$this->countAge().
            "</br>"."Email :" .$this->email."</br>"."Số điện thoại :".$this->numberPhone;
    }

}