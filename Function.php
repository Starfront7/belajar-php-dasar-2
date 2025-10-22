<?php

require_once "data/Person.php";

$Fadil = new Person("Muhammad", "Fadil");
$Fadil->name = "Fadil";
$Fadil->sayHello("World");

$Fadil2 = new Person("Star", "Line");
$Fadil2 ->name = "Starline";
$Fadil2 ->sayHello(null);

$Fadil->info();
$Fadil2->info();