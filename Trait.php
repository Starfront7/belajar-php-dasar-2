<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Fadil");
$person->hello("Gimms");

$person->name = "Muhammad Fadil";
var_dump($person);

$person->run();