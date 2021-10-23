<?php
require_once 'data/Student.php';

$student1 = new Student();
$student1->id = 1;
$student1->name = "Naufal";
$student1->value = 100;
$student1->setSample("aa");

//menggunakan invoke function
$student1(1, "naufal", true, false, "Arinal");