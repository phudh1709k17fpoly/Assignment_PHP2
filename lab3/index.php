<?php
require "humans.php";
require "student.php";
require  "Lecturers.php";
// Con Người;
$humans1  = new humans("Đặng Huy Phú","HN","2002","contatc","099293393");
// public information
$humans1->displayInformation();
// --------///
echo "<hr/>";
//--------///
// Học sinh;
$std1 = new student("hs1","HN","2012","cnana@",'09454537372',"10","4","2");
$std1->thongTinHocSinh();
// GV
echo "<hr/>";
$GV1 = new lecturers("GV1","HN","1990","conatb@","1992929382","4900","33");
$GV1->thongTinGiangVien();

