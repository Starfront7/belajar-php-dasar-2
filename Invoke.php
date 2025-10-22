<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "123456";
$student1->name = "Fadil";
$student1->value = 500;

$student1(1, "Muhammad ", true, "Fadil");
