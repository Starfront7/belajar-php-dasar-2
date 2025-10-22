<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "123456";
$student1->name = "Fadil";
$student1->value = 500;
$student1->setSample("XXX");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone
//$student2 = new Student();
//$student2->id = $student1->id;
//$student2->name = $student1->name;
//$student2->value = $student1->value;

// $student1 => clone $student2 => $student2->__clone()