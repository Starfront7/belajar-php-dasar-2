<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Fadil";
$cat->run();

$dog = new Dog();
$dog->name = "Pinguin";
$dog->run();
